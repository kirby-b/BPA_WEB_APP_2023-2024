<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">History:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.timeline.hist') }}" class="hover:text-purple-300">Timeline</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.hist') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.writeout.hist') }}" class="hover:text-purple-300">Write It Out</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">History:</span><br>
                            <b>Learning Fun</b>
                        </div>
                        {{-- <form>
                            <p>Q1</p>
                            <input type="radio" id="ans1" name="question1" value="ans1">
                            <label for="ans1">A. ans1</label><br>
                            <input type="radio" id="ans2" name="question1" value="ans2">
                            <label for="ans2">B. ans2</label><br>
                            <input type="radio" id="ans3" name="question1" value="ans3">
                            <label for="ans3">C. ans3</label>
                            <input type="radio" id="ans4" name="question1" value="ans4">
                            <label for="ans4">D. ans4</label>
                        </form> --}}
                        {{-- CSS for quiz. Convert to tailwind
                            
                            *

                            .game-quiz-container{
                                width: 40rem;
                                height: 30rem;
                                background-color: lightgray;
                                display: flex;
                                flex-direction: column;
                                align-items: center;
                                justify-content: space-around;
                                border-radius: 30px;
                            }

                            .game-details-container{
                                width: 80%;
                                height: 4rem;
                                display: flex;
                                justify-content: space-around;
                                align-items: center;
                            }

                            .game-details-container h1{
                                font-size: 1.2rem;
                            }

                            .game-question-container{
                                width: 80%;
                                height: 8rem;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                border: 2px solid darkgray;
                                border-radius: 25px;
                            }

                            .game-question-container h1{
                                font-size: 1.1rem;
                                text-align: center;
                                padding: 3px;
                            }

                            .game-options-container{
                                width: 80%;
                                height: 12rem;
                                display: flex;
                                flex-wrap: wrap;
                                align-items: center;
                                justify-content: space-around;
                            }

                            .game-options-container span{
                                width: 45%;
                                height: 3rem;
                                border: 2px solid darkgray;
                                border-radius: 20px;
                                overflow: hidden;
                            }
                            span label{
                                width: 100%;
                                height: 100%;
                                display: flex;
                                align-items: center;
                                justify-content: center;
                                cursor: pointer;
                                transition: transform 0.3s;
                                font-weight: 600;
                                color: rgb(22, 22, 22);
                            }

                            span label:hover{
                                -ms-transform: scale(1.12);
                                -webkit-transform: scale(1.12);
                                transform: scale(1.12);
                                color: white;
                            }

                            input[type="radio"] {
                                position: relative;
                                display: none;
                            }


                            input[type=radio]:checked ~ .option {
                                background: paleturquoise;
                            }

                            .next-button-container{
                                width: 50%;
                                height: 3rem;
                                display: flex;
                                justify-content: center;
                            }
                            .next-button-container button{
                                width: 8rem;
                                height: 2rem;
                                border-radius: 10px;
                                background: none;
                                color: rgb(25, 25, 25);
                                font-weight: 600;
                                border: 2px solid gray;
                                cursor: pointer;
                                outline: none;
                            }
                            .next-button-container button:hover{
                                background-color: rgb(143, 93, 93);
                            }

                            --}}
                            <main onload="NextQuestion(0)" class="flex flex-column justify-center align-center bg-black"><!--On load was part of body innitially this may need to be there instead-->
                                <!-- creating a modal for when quiz ends -->
                                <div class="fadeIn font-serif z-1 hidden fixed top-0 left-0 overflow-auto bg-black flex-column justify-center align-center" id="score-modal">
                                  
                                    <div class="bg-slate-900 flex flex-column align-center justify-around border-2xl">
                                      
                                        <h1>Congratulations, Quiz Completed.</h1>
                                      
                                        <div class="flex flex-column align-center justify-around">
                                            <p class="text-white align-center">Attempts : 10</p>
                                            <p class="text-white align-center">Wrong Answers : <span id="wrong-answers"></span></p>
                                            <p class="text-white align-center">Right Answers : <span id="right-answers"></span></p>
                                            <p class="text-white align-center">Grade : <span id="grade-percentage"></span>%</p>
                                            <p class="text-white align-center"><span id="remarks"></span></p>
                                        </div>
                                      
                                        <div class="hover:bg-slate-400 flex justify-center align-center">
                                            <button onclick="closeScoreModal()" class="bg-none outline-0 border-solid border-sm bg-orange-100 text-white text-lg border-2xl cursor-pointer">Continue</button>
                                        </div>
                                      
                                    </div>
                                </div>
                        
                                <div class="game-quiz-container">
                                  
                                    <div class="game-details-container">
                                        <h1>Score : <span id="player-score"></span> / 10</h1>
                                        <h1> Question : <span id="question-number"></span> / 10</h1>
                                    </div>
                        
                                    <div class="game-question-container">
                                        <h1 id="display-question"></h1>
                                    </div>
                        
                                    <div class="game-options-container">
                                      
                                       <div class="fadeIn font-serif z-1 hidden fixed top-0 left-0 overflow-auto bg-black flex-column justify-center align-center" id="option-modal">
                                         
                                            <div class="bg-slate-900 flex flex-column align-center justify-around border-2xl">
                                                 <h1 class="text-gray-500 align-center">Please Pick An Option</h1>
                                              
                                                 <div class="hover:bg-slate-400 flex justify-center align-center">
                                                    <button onclick="closeOptionModal()">Continue</button>
                                                </div>
                                              
                                            </div>
                                         
                                       </div>
                                      
                                        <span>
                                            <input type="radio" id="option-one" name="option" class="radio" value="optionA" />
                                            <label for="option-one" class="option" id="option-one-label"></label>
                                        </span>
                                      
                        
                                        <span>
                                            <input type="radio" id="option-two" name="option" class="radio" value="optionB" />
                                            <label for="option-two" class="option" id="option-two-label"></label>
                                        </span>
                                      
                        
                                        <span>
                                            <input type="radio" id="option-three" name="option" class="radio" value="optionC" />
                                            <label for="option-three" class="option" id="option-three-label"></label>
                                        </span>
                                      
                        
                                        <span>
                                            <input type="radio" id="option-four" name="option" class="radio" value="optionD" />
                                            <label for="option-four" class="option" id="option-four-label"></label>
                                        </span>
                        
                        
                                    </div>
                        
                                    <div class="next-button-container">
                                        <button onclick="handleNextQuestion()">Next Question</button>
                                    </div>
                        
                                </div>
                            </main>
                            <script src="index.js"></script>
                        {{-- Put questions here in mutiple choice format --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>