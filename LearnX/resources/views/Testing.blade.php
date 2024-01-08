<x-partials.QuizLayout><!--Calls the layout to render top and bottom of page-->
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
                      <div>
                          <div class="min-h-screen flex items-center justify-center bg-black bg-no-repeat bg-cover bg-center">
                              <!-- Modal for quiz completion -->
                              <div class="modal-container hidden fixed inset-0 z-10 bg-black bg-opacity-40 flex items-center justify-center" id="score-modal">
                                  <div class="modal-content-container bg-gray-800 rounded-lg p-6">
                                      <h1 class="text-gray-300 text-lg mb-4">Congratulations, Quiz Completed.</h1>
                                      <div class="grade-details text-white text-center">
                                          <p>Attempts : 10</p>
                                          <p>Wrong Answers : <span id="wrong-answers"></span></p>
                                          <p>Right Answers : <span id="right-answers"></span></p>
                                          <p>Grade : <span id="grade-percentage"></span>%</p>
                                          <p><span id="remarks"></span></p>
                                      </div>
                                      <div class="modal-button-container flex justify-center mt-4">
                                          <button onclick="closeScoreModal()" class="bg-gray-800 border border-white text-white px-4 py-1 rounded-lg hover:bg-gray-700">Continue</button>
                                      </div>
                                  </div>
                              </div>
                      
                              <div class="game-quiz-container w-full sm:w-3/4 md:w-2/3 lg:w-1/2 xl:w-2/5 bg-gray-300 flex flex-col items-center justify-around rounded-lg">
                                  <div class="game-details-container w-4/5 flex justify-around items-center">
                                      <h1>Score : <span id="player-score"></span> / 10</h1>
                                      <h1>Question : <span id="question-number"></span> / 10</h1>
                                  </div>
                                  <div class="game-question-container w-4/5 h-32 flex items-center justify-center border-2 border-gray-700 rounded-lg">
                                      <h1 id="display-question" class="text-lg text-center"></h1>
                                  </div>
                                  <div class="game-options-container w-4/5 h-48 flex flex-wrap items-center justify-around">
                                      <div class="modal-container hidden fixed inset-0 z-10 bg-black bg-opacity-40 flex items-center justify-center" id="option-modal">
                                          <div class="modal-content-container bg-gray-800 rounded-lg p-6">
                                              <h1 class="text-gray-300 text-lg mb-4">Please Pick An Option</h1>
                                              <div class="modal-button-container flex justify-center">
                                                  <button onclick="closeOptionModal()" class="bg-gray-800 border border-white text-white px-4 py-1 rounded-lg hover:bg-gray-700">Continue</button>
                                              </div>
                                          </div>
                                      </div>
                                      <span class="w-2/5 lg:w-1/3">
                                          <input type="radio" id="option-one" name="option" class="radio hidden" value="optionA" />
                                          <label for="option-one" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110" id="option-one-label"></label>
                                      </span>
                                      <span class="w-2/5 lg:w-1/3">
                                          <input type="radio" id="option-two" name="option" class="radio hidden" value="optionB" />
                                          <label for="option-two" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110" id="option-two-label"></label>
                                      </span>
                                      <span class="w-2/5 lg:w-1/3">
                                          <input type="radio" id="option-three" name="option" class="radio hidden" value="optionC" />
                                          <label for="option-three" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110" id="option-three-label"></label>
                                      </span>
                                      <span class="w-2/5 lg:w-1/3">
                                          <input type="radio" id="option-four" name="option" class="radio hidden" value="optionD" />
                                          <label for="option-four" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110" id="option-four-label"></label>
                                      </span>
                                  </div>
                                  <div class="next-button-container w-1/2 flex justify-center">
                                      <button onclick="handleNextQuestion()" class="w-24 h-8 rounded-lg border border-gray-700 bg-transparent text-gray-900 font-semibold cursor-pointer hover:bg-red-500 hover:text-white transition-all duration-300 focus:outline-none">Next Question</button>
                                  </div>
                              </div>
                          </div>
                      </div>
                  {{-- Put questions here in mutiple choice format --}}
                  </p>
              </div>
          </div>
      </div>
  </div>
</x-partials.QuizLayout>