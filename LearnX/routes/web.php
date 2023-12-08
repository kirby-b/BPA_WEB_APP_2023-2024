<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Goes to index
Route::get('/', function () {
    return view('welcome');
})->name("page.index");
Route::get('/home', function () {
    return view('home');
})->name("page.home");

//Goes to FAQ
Route::get('/FAQ', function () {
    return view('FAQ');
})->name("page.faq");

//Goes to Gradebook
Route::get('/GradeBook', function () {
    return view('Gradebook');
})->name("page.gradebook");

//Goes to the Password Reset Page
Route::get('/forgotPassword', function () {
    return view('ForgotPassword');
})->name("page.reset.pas");

//Goes to the Donations Page
Route::get('/donations', function () {
    return view('donate');
})->name("page.donate");

//Goes to the about us page
Route::get('/aboutUs', function () {
    return view('About-Us');
})->name("page.about");

//Goes to why us
Route::get('/whyUs', function () {
    return view('whyUs');
})->name("page.why.us");

//Goes to what people say
Route::get('/whatPeopleSay', function () {
    return view('whatPeopleSay');
})->name("page.reviews");
//Goes to student page
Route::get('/student', function (){
    return view('Student-View');
})->name("page.student");
//Goes to the math page
Route::get('/math', function (){
    return view('Math');
})->name("page.math");
//Goes to the science page
Route::get('/science', function (){
    return view('Science');
})->name("page.science");
//Goes to the history page
Route::get('/history', function (){
    return view('History');
})->name("page.history");
//Goes to the english page
Route::get('/english', function (){
    return view('English');
})->name("page.english");
//Goes to the profile page
Route::get('/profile', function (){
    return view('Profile');
})->name("page.profile");

// Show Register/Create Form through create function in UserController
Route::get('/SignUp', [UserController::class, 'create'])->name('signup')->middleware('guest');

// Create New User through store function in UserController
Route::post('/users', [UserController::class, 'store']);

// Log User Out through log out function in UserController
Route::post('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Show Login Form login function in UserController
Route::get('/SignIn', [UserController::class, 'login'])->name('signin')->middleware('guest');

// Log In User through authenticate function in UserController
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
   

//Give new routes name 

Route::get('/contractions', function (){
    return view('lessons/English/Contractions');
})->name("page.contractions");
Route::get('/lettersandsounds', function (){
    return view('lessons/English/Letters-And-Sounds');
})->name("page.lettersandsounds");
Route::get('/partsofspeech', function (){
    return view('lessons/English/Parts-Of-Speech');
})->name("page.partsofspeech");
Route::get('/punctuation', function (){
    return view('lessons/English/Puntuations');
})->name("page.punctuation");
Route::get('/research-citations', function (){
    return view('lessons/English/Research-Citations');
})->name("page.research.citations");
Route::get('/definitions', function (){
    return view('lessons/English/Definitions');
})->name("page.definitions");
Route::get('/essays', function (){
    return view('lessons/English/Essays');
})->name("page.essays");
Route::get('/small-reading', function (){
    return view('lessons/English/Small-Reading');
})->name("page.small.reading");
Route::get('/small-spelling', function (){
    return view('lessons/English/Small-Spelling');
})->name("page.small.spelling");
Route::get('/storytelling', function (){
    return view('lessons/English/Storytelling');
})->name("page.storytelling");
Route::get('/vowelsandconsenents', function (){
    return view('lessons/English/Vowels-And-Consenents');
})->name("page.vsandcs");

Route::get('/holidays', function (){
    return view('lessons/History/Holidays/Holidays');
})->name("page.holidays");
Route::get('/american-history', function (){
    return view('lessons/History/American/American-History');
})->name("page.american.history");
Route::get('/ancient-history', function (){
    return view('lessons/History/Ancient-History');
})->name("page.ancient.history");
Route::get('/branches-of-gov', function (){
    return view('lessons/History/Branches-Of-Government');
})->name("page.branches.of.gov");
Route::get('/civics', function (){
    return view('lessons/History/Civics');
})->name("page.civics");
Route::get('/contenents-and-oceans', function (){
    return view('lessons/History/Contenents-And-Oceans');
})->name("page.contenents.oceans");
Route::get('/economy', function (){
    return view('lessons/History/Econ/Economy');
})->name("page.economy");
Route::get('/politics', function (){
    return view('lessons/History/Politics');
})->name("page.politics");
Route::get('/states', function (){
    return view('lessons/History/States');
})->name("page.states");
Route::get('/world-history', function (){
    return view('lessons/History/World/World-History');
})->name("page.world.history");

Route::get('/china', function (){
    return view('lessons/History/Holidays/China');
})->name("page.china");
Route::get('/indonsia', function (){
    return view('lessons/History/Holidays/Indonesia');
})->name("page.indonesia");
Route::get('/usa', function (){
    return view('lessons/History/Holidays/United-States');
})->name("page.usa");
Route::get('/india', function (){
    return view('lessons/History/Holidays/India');
})->name("page.india");
Route::get('/japan', function (){
    return view('lessons/History/Holidays/Japan');
})->name("page.japan");
Route::get('/mexico', function (){
    return view('lessons/History/Holidays/Mexico');
})->name("page.mexico");
Route::get('/nigeria', function (){
    return view('lessons/History/Holidays/Nigeria');
})->name("page.nigeria");
Route::get('/pakistan', function (){
    return view('lessons/History/Holidays/Pakistan');
})->name("page.pakistan");
Route::get('/russia', function (){
    return view('lessons/History/Holidays/Russia');
})->name("page.russia");
Route::get('/brazil', function (){
    return view('lessons/History/Holidays/Brazil');
})->name("page.brazil");

Route::get('/15thcentury', function (){
    return view('lessons/History/American/15th-Century');
})->name("page.century15.america");
Route::get('/16thcentury', function (){
    return view('lessons/History/American/16th-Century');
})->name("page.century16.america");
Route::get('/17thcentury', function (){
    return view('lessons/History/American/17th-Century');
})->name("page.century17.america");
Route::get('/18thcentury', function (){
    return view('lessons/History/American/18th-Century');
})->name("page.century18.america");
Route::get('/19thcentury', function (){
    return view('lessons/History/American/19th-Century');
})->name("page.century19.america");
Route::get('/20thcentury', function (){
    return view('lessons/History/American/20th-Century');
})->name("page.century20.america");
Route::get('/21stcentury', function (){
    return view('lessons/History/American/21st-Century');
})->name("page.century21.america");

Route::get('/1stcentury-world', function (){
    return view('lessons/History/World/1st-Century');
})->name("page.century1.world");
Route::get('/2ndcentury-world', function (){
    return view('lessons/History/World/2nd-Century');
})->name("page.century2.world");
Route::get('/3rdcentury-world', function (){
    return view('lessons/History/World/3rd-Century');
})->name("page.century3.world");
Route::get('/4thcentury-world', function (){
    return view('lessons/History/World/4th-Century');
})->name("page.century4.world");
Route::get('/5thcentury-world', function (){
    return view('lessons/History/World/5th-Century');
})->name("page.century5.world");
Route::get('/6thcentury-world', function (){
    return view('lessons/History/World/6th-Century');
})->name("page.century6.world");
Route::get('/7thcentury-world', function (){
    return view('lessons/History/World/7th-Century');
})->name("page.century7.world");
Route::get('/8thcentury-world', function (){
    return view('lessons/History/World/8th-Century');
})->name("page.century8.world");
Route::get('/9thcentury-world', function (){
    return view('lessons/History/World/9th-Century');
})->name("page.century9.world");
Route::get('/10thcentury-world', function (){
    return view('lessons/History/World/10th-Century');
})->name("page.century10.world");
Route::get('/11thcentury-world', function (){
    return view('lessons/History/World/11th-Century');
})->name("page.century11.world");
Route::get('/12thcentury-world', function (){
    return view('lessons/History/World/12th-Century');
})->name("page.century12.world");
Route::get('/13thcentury-world', function (){
    return view('lessons/History/World/13th-Century');
})->name("page.century13.world");
Route::get('/14thcentury-world', function (){
    return view('lessons/History/World/14th-Century');
})->name("page.century14.world");
Route::get('/15thcentury-world', function (){
    return view('lessons/History/World/15th-Century');
})->name("page.century15.world");
Route::get('/16thcentury-world', function (){
    return view('lessons/History/World/16th-Century');
})->name("page.century16.world");
Route::get('/17thcentury-world', function (){
    return view('lessons/History/World/17th-Century');
})->name("page.century17.world");
Route::get('/18thcentury-world', function (){
    return view('lessons/History/World/18th-Century');
})->name("page.century18.world");
Route::get('/19thcentury-world', function (){
    return view('lessons/History/World/19th-Century');
})->name("page.century19.world");
Route::get('/20thcentury-world', function (){
    return view('lessons/History/World/20th-Century');
})->name("page.century20.world");
Route::get('/21stcentury-world', function (){
    return view('lessons/History/World/21st-Century');
})->name("page.century21.world");

Route::get('/typesOfEcon', function (){
    return view('lessons/History/Econ/Types-Of-Economy');
})->name("page.typesOfEcon");
Route::get('/econIndicators', function (){
    return view('lessons/History/Econ/Economy-Indicators');
})->name("page.econIndicators");
Route::get('/international', function (){
    return view('lessons/History/Econ/International-Trade');
})->name("page.internatTrade");
Route::get('/laborMarket', function (){
    return view('lessons/History/Econ/Labor-Market');
})->name("page.laborMarket");
Route::get('/marketStructures', function (){
    return view('lessons/History/Econ/Market-Structures');
})->name("page.marketStructures");
Route::get('/personalFinance', function (){
    return view('lessons/History/Econ/Personal-Finance');
})->name("page.personalFinance");
Route::get('/roleOfGov', function (){
    return view('lessons/History/Econ/Role-Of-Government');
})->name("page.roleOfGov");
Route::get('/basic', function (){
    return view('lessons/History/Econ/Basic');
})->name("page.basic");

Route::get('/deleteAccount', function(){
    return view('users/DeleteAccount');
})->name("page.accountTermination");

// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->middleware('guest')->name('password.request');