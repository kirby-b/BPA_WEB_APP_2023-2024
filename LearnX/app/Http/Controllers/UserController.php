<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    // Show Register/Create Form
    public function create() {
        return view('users.SignUp'); //goes to sign up page
    }

    // Create New User
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],//Gets the users name and makes sure it is 3 characters long and declares it required
            'email' => ['required', 'email', Rule::unique('users', 'email')], //Gets email and declares it required. It also makes user it is email format
            'password' => 'required|confirmed|min:6', //Gets password and makes sure it is Confirmed and 6 Characters long. Also declares it required
            'permissions' => ['required'], //Gets the permissions of the user
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        // Login 
        auth()->login($user);

        return redirect('/home')->with('message', 'User created and logged in');
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate(); //Invalidates session
        $request->session()->regenerateToken(); // Regenerates the session token/cookie.

        return redirect('/')->with('message', 'You have been logged out!');

    }

    // Show Login Form
    public function login() {
        return view('users.SignIn'); // Goes to sign in page
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'], //Requires you put in an email and gets it
            'password' => 'required' // Requires you put something in for the password and gets it
        ]);

        $user = User::where('email', '=', $request->email)->first();
        if($user->deleted){
            return back()->withErrors(['email' => 'Account Deactivated'])->onlyInput('email'); 
        }

        //dd($user);

        if(auth()->attempt($formFields)){ // Checks to see if credentials are right 
            $request->session()->regenerate(); //Regenerates session as valid

            return redirect('/home')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email'); 
        // Returns error for only under email so it says only "Invalid Credentials". This is for security reasons
    }

    // public function getUserByEmail(Request $request)
    // {
    //     $user = User::where('email', '=', $request->email)->first();

    //     $user->password = bcrypt($request->password);
    //     $user->save();

    // }

    public function deleteUser(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'], //Requires you put in an email and gets it
            'password' => 'required' // Requires you put something in for the password and gets it
        ]);
        //dd($request);
        if(auth()->attempt($formFields)) { // Checks to see if credentials are right
            
            $user = User::where('email', '=', $request->email )->first();
            $user->deleted = true;
            $user->save();
            $request->session()->invalidate(); //Invalidates session
            $request->session()->regenerateToken(); // Regenerates the session token/cookie.
        }
        else{
            return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email'); 
        }
        return redirect('/')->with('message', 'You have delete your account!');
    }

    public function requestReset(Request $request)
    {
        $request->validate(['email' => 'required|email']);//Takes email
 
        $status = Password::sendResetLink(//Sends link
            $request->only('email')
        );
    
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);//Checks to see if it works
    }

    public function resetPass(Request $request)
    {
        $request->validate([//Makes sure the params are right
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);
     
        $status = Password::reset(//Saves new info
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));
     
                $user->save();
     
                event(new PasswordReset($user));
            }
        );
     
        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    }

    public function getProfileInfo(Request $request) {
    // Get user info by Auth ID
    }
    
    //Put a controller here for a page that changes based on whether you are teacher, student, or admin
    // public function getUserPermissions(Request $request)
    // {
    //     $user = User:: something to query what they are
    //
    //      if user = student:
    //          return student page(only has the files they added and lesson pdfs)
    //      if user = teacher:
    //          return teacher page(student + upload assignments)
    //      if user = admin:
    //          return admin page(teacher + deleting stuff that isnt theirs )
    // }
}