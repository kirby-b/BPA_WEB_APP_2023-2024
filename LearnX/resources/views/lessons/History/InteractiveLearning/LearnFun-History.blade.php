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

                        <main onload="NextQuestion(0)" class="flex flex-column justify-center align-center bg-black"><!--On load was part of body innitially this may need to be there instead-->
                            <!-- creating a modal for when quiz ends -->
                            <div class="fadeIn font-serif z-1 hidden fixed top-0 left-0 overflow-auto bg-black flex-column justify-center align-center" id="score-modal">
                                
                                <div class="bg-slate-900 flex flex-column align-center justify-around rounded-2xl">
                                    
                                    <h1>Congratulations, Quiz Completed.</h1>
                                    
                                    <div class="flex flex-column align-center justify-around">
                                        <p class="text-white align-center">Attempts : 10</p>
                                        <p class="text-white align-center">Wrong Answers : <span id="wrong-answers"></span></p>
                                        <p class="text-white align-center">Right Answers : <span id="right-answers"></span></p>
                                        <p class="text-white align-center">Grade : <span id="grade-percentage"></span>%</p>
                                        <p class="text-white align-center"><span id="remarks"></span></p>
                                    </div>
                                    
                                    <div class="hover:bg-slate-400 flex justify-center align-center">
                                        <button onclick="closeScoreModal()" class="bg-none outline-0 border-solid border-2 bg-orange-100 text-white text-lg cursor-pointer rounded-2xl">Continue</button>
                                    </div>
                                    
                                </div>
                            </div>
                    
                            <div class="bg-slate-400 flex flex-column align-center justify-around rounded-3xl">
                                
                                <div class="flex justify-around align-center">
                                    <h1 class="text-lg">Score : <span id="player-score"></span> / 10</h1>
                                    <h1 class="text-lg"> Question : <span id="question-number"></span> / 10</h1>
                                </div>
                    
                                <div class="flex align-center justify-center border-2 border-solid rounded-3xl">
                                    <h1 id="display-question" class="text-lg text-center p-3"></h1>
                                </div>
                    
                                <div class="flex flex-wrap align-center justify-around">
                                    
                                    <div class="fadeIn font-serif z-1 hidden fixed top-0 left-0 overflow-auto bg-black flex-column justify-center align-center" id="option-modal">
                                        
                                        <div class="bg-slate-900 flex flex-column align-center justify-around rounded-2xl">
                                                <h1 class="text-gray-500 align-center">Please Pick An Option</h1>
                                            
                                                <div class="hover:bg-slate-400 flex justify-center align-center">
                                                <button onclick="closeOptionModal()">Continue</button>
                                            </div>
                                            
                                        </div>
                                        
                                    </div>
                                    
                                    <span class="border-2 border-solid rounded-xl overflow-hidden">
                                        <input type="radio" id="option-one" name="option" class="radio checked:bg-cyan-300 relative hidden" value="optionA" />
                                        <label for="option-one" class="option hover:scale flex align-center justify-center cursor-pointer transition-transform text-semibold bg-slate-800" id="option-one-label"></label>
                                    </span>
                                    
                    
                                    <span class="border-2 border-solid rounded-xl overflow-hidden">
                                        <input type="radio" id="option-two" name="option" class="radio checked:bg-cyan-300 relative hidden" value="optionB" />
                                        <label for="option-two" class="option hover:scale flex align-center justify-center cursor-pointer transition-transform text-semibold bg-slate-800" id="option-two-label"></label>
                                    </span>
                                    
                    
                                    <span class="border-2 border-solid rounded-xl overflow-hidden">
                                        <input type="radio" id="option-three" name="option" class="radio checked:bg-cyan-300 relative hidden" value="optionC" />
                                        <label for="option-three" class="option hover:scale flex align-center justify-center cursor-pointer transition-transform text-semibold bg-slate-800" id="option-three-label"></label>
                                    </span>
                                    
                    
                                    <span class="border-2 border-solid rounded-xl overflow-hidden">
                                        <input type="radio" id="option-four" name="option" class="radio checked:bg-cyan-300 relative hidden" value="optionD" />
                                        <label for="option-four" class="option hover:scale flex align-center justify-center cursor-pointer transition-transform text-semibold bg-slate-800" id="option-four-label"></label>
                                    </span>
                    
                    
                                </div>
                    
                                <div class="flex justify-center">
                                    <button onclick="handleNextQuestion()" class="hover:bg-rose-800 cursor-pointer border-2 bg-none outline-0 border-solid border-base rounded-lg">Next Question</button>
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