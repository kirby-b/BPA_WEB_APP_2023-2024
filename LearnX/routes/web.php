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

// Each route gets a page with a get or post request. It is formatted like this
// Route:get/post('/nametodisplayinsearchbar',function(
//     return view('nameOfTheFile'); -- The name is the name of the Blade or php file without the extensions( .blade.php or .php)
// ))->name("specific.name.for.page");

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

//English
Route::get('/contractions', function (){
    return view('lessons/English/Contractions');
})->name("page.contractions");
Route::get('/partsofspeech', function (){
    return view('lessons/English/Parts-Of-Speech');
})->name("page.partsofspeech");
Route::get('/punctuation', function (){
    return view('lessons/English/Puntuations');
})->name("page.punctuation");
Route::get('/research-citations', function (){
    return view('lessons/English/Research-Citations');
})->name("page.research.citations");
Route::get('/sentancesandparagraphs', function (){
    return view('lessons/English/Sentences-&-Paragraph');
})->name("page.sentandpara");
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

//History
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

//Civics
Route::get('/civics', function (){
    return view('lessons/History/Civics/Civics');
})->name("page.civics");
Route::get('/civics-engagement', function (){
    return view('lessons/History/Civics/Civic-Engagement-&-Participation');
})->name("page.civics.engagement");
Route::get('/voting-rights', function (){
    return view('lessons/History/Civics/Voting-Rights-&-Election-Integrity');
})->name("page.voting.rights");
Route::get('/climate', function (){
    return view('lessons/History/Civics/Climate-Change-&-Environmental-Sustainability');
})->name("page.climate");
Route::get('/government-transparency', function (){
    return view('lessons/History/Civics/Government-Trasparency');
})->name("page.governmentTrans");
Route::get('/social-justice', function (){
    return view('lessons/History/Civics/Social-Justice-&-Equality');
})->name("page.social.justice");
Route::get('/education-reform', function (){
    return view('lessons/History/Civics/Education-Reform');
})->name("page.education.reform");
Route::get('/crisis-response-and-emergency', function (){
    return view('lessons/History/Civics/Crisis-Response-&-Emergency-Managment');
})->name("page.emergency.management");
Route::get('/healthcare-access-policy', function (){
    return view('lessons/History/Civics/Healthcare-Access-&-Policy');
})->name("page.health.access");
Route::get('/tech-and-privacy', function (){
    return view('lessons/History/Civics/Technology-&-Privacy');
})->name("page.tech.privacy");
Route::get('/civic-urban-planning', function (){
    return view('lessons/History/Civics/Civic-Infrastructure-&-Urban-Planning');
})->name("page.civic.urban");

//Holidays
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

//American Historys
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

//World History
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

//Economy
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

//Science
Route::get('/animals', function (){
    return view('lessons/Science/Animals');
})->name("page.animals");
Route::get('/chemistry', function (){
    return view('lessons/Science/Chemistry');
})->name("page.chemistry");
Route::get('/earth', function (){
    return view('lessons/Science/Earth');
})->name("page.earth");
Route::get('/biology', function (){
    return view('lessons/Science/Biology');
})->name("page.biology");
Route::get('/oceans', function (){
    return view('lessons/Science/Oceans');
})->name("page.oceans");
Route::get('/genetics', function (){
    return view('lessons/Science/Genetics');
})->name("page.genes");
Route::get('/geology', function (){
    return view('lessons/Science/Geology');
})->name("page.rocks");
Route::get('/psychology', function (){
    return view('lessons/Science/Psychology');
})->name("page.psycho");
Route::get('/physics', function (){
    return view('lessons/Science/Physics');
})->name("page.physics");
Route::get('/space', function (){
    return view('lessons/Science/Space');
})->name("page.space");

//Math
Route::get('/algebra', function (){
    return view('lessons/Math/Algebra');
})->name("page.algebra");
Route::get('/calculus', function (){
    return view('lessons/Math/Calculus');
})->name("page.calculus");
Route::get('/elementary', function (){
    return view('lessons/Math/ElementaryMath');
})->name("page.elementary");
Route::get('/fractions-decimals-and-percentages', function (){
    return view('lessons/Math/FractionsDecimalsNPercentages');
})->name("page.FDP");
Route::get('/geometry', function (){
    return view('lessons/Math/Geometry');
})->name("page.geometry");
Route::get('/graphing', function (){
    return view('lessons/Math/Graphing');
})->name("page.graphing");
Route::get('/number', function (){
    return view('lessons/Math/Numbers');
})->name("page.number");
Route::get('/patterns', function (){
    return view('lessons/Math/Patterns');
})->name("page.patterns");
Route::get('/probability-and-statistics', function (){
    return view('lessons/Math/ProbabilityNStats');
})->name("page.probNstats");

//Other?
Route::get('/shapes-and-colors', function (){
    return view('lessons/ShapesNColors');
})->name("page.shapesncolors");

//Interactive-History
Route::get('/History-LearningFun', function (){
    return view('lessons/History/InteractiveLearning/LearnFun-History');
})->name("page.learnfun.hist");
Route::get('/History-Timeline', function (){
    return view('lessons/History/InteractiveLearning/Timeline-History');
})->name("page.timeline.hist");
Route::get('/History-Write', function (){
    return view('lessons/History/InteractiveLearning/WriteItOut-History');
})->name("page.writeout.hist");

//Interactive-Science
Route::get('/Science-FlashCards', function (){
    return view('lessons/Science/InteractiveLearning/Flashcards-Science');
})->name("page.flashcards.science");
Route::get('/Science-LearningFun', function (){
    return view('lessons/Science/InteractiveLearning/LearnFun-Science');
})->name("page.learnfun.science");
Route::get('/Science-Write', function (){
    return view('lessons/Science/InteractiveLearning/WriteItOut-Science');
})->name("page.writeout.science");

//Interactive-English
Route::get('/English-Write', function (){
    return view('lessons/English/InteractiveLearning/WriteItOut-English');
})->name("page.writeout.english");
Route::get('/English-LearningFun', function (){
    return view('lessons/English/InteractiveLearning/LearnFun-English');
})->name("page.learnfun.english");
Route::get('/English-FlashCards', function (){
    return view('lessons/English/InteractiveLearning/Flashcards-English');
})->name("page.flashcards.english");

//Interactive-Math
Route::get('/Math-LearningFun', function (){
    return view('lessons/Math/InteractiveLearning/LearnFun-Math');
})->name("page.learnfun.math");
Route::get('/Math-FlashCards', function (){
    return view('lessons/Math/InteractiveLearning/Flashcards-Math');
})->name("page.flashcards.math");
Route::get('/Math-Solve', function (){
    return view('lessons/Math/InteractiveLearning/SolveIt-Math');
})->name("page.solveit.math");


//Goes to delete account page
Route::get('/deleteAccount', function(){
    return view('users/DeleteAccount');
})->name("page.accountTermination");

// Show Register/Create Form through create function in UserController
Route::get('/SignUp', [UserController::class, 'create'])->name('signup')->middleware('guest');

// Create New User through store function in UserController
Route::post('/users', [UserController::class, 'store']);

// Log User Out through log out function in UserController
Route::get('/logout', [UserController::class, 'logout'])->name('logout')->middleware('auth');

// Show Login Form login function in UserController
Route::get('/SignIn', [UserController::class, 'login'])->name('signin')->middleware('guest');

// Log In User through authenticate function in UserController
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Log User Out through log out function in UserController
Route::post('/delete', [UserController::class, 'deleteUser'])->name('deleteUser')->middleware('auth');

//Goes to forgot password page
Route::get('/forgotpassword', function () {
    return view('users/RequestPasswordReset');
})->middleware('guest')->name('password.request');
// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->middleware('guest')->name('password.request');

//Sends the email with token
Route::post('/forgot-password', [UserController::class, 'requestReset'])->name('password.email')->middleware('guest');

//Goes to reset page using view+token
Route::get('/reset-password/{token}', function (string $token) {
    return view('users/ResetPassword', ['token' => $token]);
})->middleware('guest')->name('password.reset');
// Route::get('/reset-password/{token}', function (string $token) {
//     return view('auth.reset-password', ['token' => $token]);
// })->middleware('guest')->name('password.reset');

//Updates the password with new value
Route::post('/reset-password', [UserController::class, 'resetPass'])->name('password.update')->middleware('guest');
