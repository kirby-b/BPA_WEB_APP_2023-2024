<!DOCTYPE html>
{{-- <link rel="stylesheet" type="text/css" href="/css/app.css">  --}}
@vite('resources/css/app.css')
<head>
    <meta charset="UTF-8">
    <meta name="description" content="LearnX Why us">
    <meta name="keywords" content="Laravel">
    <meta name="author" content="Brodie Kirby And Adelaide Meisel">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

    <body class="bg-purple-400">
    
        <h1 class="text-center underline">Why Us?</h1>
        <div class="absolute font-sans mt-150 text-2xl h-auto w-356.25">
            <p>
            We offer revelent courses to suit the students needs. Our flashcards and small assignments will fit<br>  
            what the student would learn during the course of that year. We run our assignments through our <br>
            employees and other teachers throughout the U.S. to ensure that every student gets the correct <br>
            information they will need to learn as best as they can. With LearnX students get the best education <br>
            they can get. Our website is easy to navigate and easy for teachers to help students. Teachers can <br>
            add their own assignments and eaisily put them into the gradebook. All of our assignments, quizzes, <br>
            and tests challenge and push students as they grow. We don't have any premium account because <br>
            of our belifs that every child deserves a fair and free education. We do ask for donations which you<br> 
            can find at the bottom of the screen.
            </p>
        </div>
        <div class="absolute ml-1115 mt-63 border-solid border-5 border-amber-700">
            <div>
                <img src="/Images/Calculator-On-Notepad.jpg" width="400px" height="450px" class="float-right" ><!--DON'T PUT ANYTHING HERE, THIS IS FOR PIC ONLY-->
            </div>
            <div class="absolute mt-27 ml-210 text-2xl font-sans">
                LearnX made learning in school so much easier! -Larua Don<br>
                <br>
                School and LearnX equals success. - Kelly Hemp<br>
            </div>
            <div class="absolute mt-330 ml-25 text-2xl font-sans">
                All schools should use LearnX! My child is so successful in school now! -Brooke Asher
            </div>
        </div>


        <div class="Preahvihear text-center text-3xl absolute width-full h-17 bg-center bg-cover bg-[url('/Images/Light-Rainbow-Gradient.jpg')] mt-582 border-7 border-solid border-black">
            <div>
                <div class="m-44 inline">
                    <a class="no-underline text-black" type="button" value ="Yes" class href={{ route("page.faq") }}>FAQ</a> 
                </div>
                <div class="m-44 inline">
                    <a class="no-underline text-black" type="button" value ="Yes" class href={{ route("page.about") }}>ABOUT</a>
                </div>
                <div class="m-44 inline">
                    <a class="no-underline text-black" type="button" value ="Yes" class href={{ route("page.index") }}>MENU</a>
                </div>
                <div class="m-44 inline">
                    <a class="no-underline text-black" type="button" value ="Yes" class href={{ route("page.donate") }}>DONATE</a>
                </div>
                <div class="m-44 inline">
                    <a class="no-underline text-black" type="button" value ="Yes" class href={{ route("page.reviews") }}>WHAT TEACHERS/STUDENTS SAY</a>
                </div>
                <!--Links to various places on the website-->
            </div>
        </div>


    </body>
</html>