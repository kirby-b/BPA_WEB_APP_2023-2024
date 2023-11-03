<!DOCTYPE html>

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="description" content="Learning Website">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
     <div class="width-full max-h-24.25 font-Preahvihear text-left text-3xl rounded border-black border-solid bg-center bg-cover bg-[url('/Images/School-Supplies.jpg')]">{{--Top-div-info-page --}}
        <div>
            <div>
                <p>LearnX</p>
            </div>

                <!--<div>
                        put the "A+s" here
                </div>-->

             <div class="text-white text-right">
                <a type="button" value ="Yes" href={{ route("signin") }} class="text-white">Sign-In  </a><a type="button" value ="Yes" href={{ route("signup") }} class="text-white">|  Create New Account</a>
                <!--Sign in is sign in, create new needs to go to are you org-->
            </div>
        </div>
    </div>
</body>

<div class="mt-200 mr-300 absolute">
    <div >
        <img src="/Images/Teacher-Online-With-Student.jpg" width="900px" height="550px">
    </div>
</div>

<div class="max-w-64.25 max-h-31.875 font-BalsamiqSans border-black border-solid border-7 absolute text-4xl bg-violet-400">
    <div>
        A+ Students
    </div>
    <div>
        A+ Grades
    </div>
    <div>
         A+  Learning
    </div>
</div>


<body class="bg-violet-100">

    <div class="absolute ml-900 border-5 border-solid border-black font-sans text-xl max-w-104 max-h-136.125 bg-green-250">
        <p class="m-10 mt-25">
        LearnX, a place for students K-12 to strive and grow through their educational learning.
        We strive to make every year count as your students grow throught this program. At LearnX
        we take it upon ourselves to better our platform for students and for you. We teach kids
        their 123's, all the way up to thier f(x) = 3x^4 - 2x^3 + 5x^2 - 7x + 9 (The answer is x≈0.5231).
        From their ABC's to fully eassays on complex topics our world faces. For this upcoming 2024-2025
        school year, we hope to help teachers engage with their students more than they could. We
        also offer personalized learning sessions so students can get the most out of their learning.
        We make our system user-friendly so you can get the most out of our site.
        <br> 
        <br>
        <br> 
        <br>
        <br>
        We hope you enjoy LearnX! <a type="button" id="inText" value ="Yes" class href={{ route("signup") }}>Click here</a> to make a new account.<!--Goes to routes and goes to the respective pages for login and sign up-->
        </p>
    </div>
    
</body>

<div class="Preahvihear text-center text-3xl absolute width-full max-h-17 bg-center bg-cover bg-[url('/Images/Light-Rainbow-Gradient.jpg')] mt-550 border-7 border-solid border-black">
    <div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.faq") }}>FAQ</a> 
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.about") }}>ABOUT</a>
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.why.us") }}>WHY US</a>
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.donate") }}>DONATE</a>
        </div>
        <div class="m-44 inline">
            <a type="button" value ="Yes" class href={{ route("page.reviews") }}>WHAT TEACHERS/STUDENTS SAY</a>
        </div>
        <!--Links to various places on the website-->
    </div>
</div>

</html>