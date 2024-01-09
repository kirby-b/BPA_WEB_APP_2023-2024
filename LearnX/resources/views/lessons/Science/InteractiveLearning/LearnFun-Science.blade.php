<x-partials.QuizLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <span class="font-semibold">Science:</span><br>
                        Interactive Learning:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.writeout.science') }}" class="hover:text-purple-300">Write it Out</a><br>
                        <br>
                        <a href="{{ route('page.learnfun.science') }}" class="hover:text-purple-300">Learning Fun</a><br>
                        <br>
                        <a href="{{ route('page.flashcards.science') }}" class="hover:text-purple-300">Flashcards</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <span class="font-black">Science:</span><br>
                            <span class="font-extrabold">Learning Fun:</span>
                        </div>
                        {{-- <form>
                            <span class="font-bold">Animal Science:</span>
                            <br>
                            <p>Which nutrient is primarily responsible for providing a readily available source of energy for animals?</p>
                            <input type="radio" id="feed1" name="question4" value="FALSE">
                            <label for="feed1">A. Protein</label><br>
                            <input type="radio" id="feed2" name="question4" value="TRUE">
                            <label for="feed2">B. Carbohydrates</label><br><!--Correct-->
                            <input type="radio" id="feed3" name="question4" value="FALSE">
                            <label for="feed3">C. Vitamins</label>
                            <input type="radio" id="feed4" name="question4" value="FALSE">
                            <label for="feed4">D. Minerals</label>
                            <br>
                            Which biotechnological process involves the production of genetically identical copies of a particular gene or DNA sequence?
                            A) Cloning<!--Correct-->
                            B) Fermentation
                            C) Polymerase Chain Reaction (PCR)
                            D) Transcription
                            Which state of matter has a definite volume but no definite shape?
                            A) Solid
                            B) Liquid<!--Correct-->
                            C) Gas
                            D) Plasma
                            What is the primary greenhouse gas responsible for trapping heat in the Earth's atmosphere?
                            A) Methane
                            B) Nitrous oxide
                            C) Carbon dioxide<!--Correct-->
                            D) Ozone
                            What term refers to the change in the DNA sequence that makes up a gene?
                            A) Mutation<!--Correct-->
                            B) Transcription
                            C) Translation
                            D) Replication
                            What is the process by which rocks are broken down into smaller particles due to natural factors like wind, water, and temperature changes?
                            A) Erosion
                            B) Weathering<!--Correct-->
                            C) Deposition
                            D) Sedimentation
                            What organism is responsible for the majority of Earth's oxygen production in marine environments?
                            A) Coral
                            B) Phytoplankton<!--Correct-->
                            C) Jellyfish
                            D) Sea urchin
                            What fundamental force is responsible for holding protons and neutrons together within an atomic nucleus?
                            A) Electromagnetic force
                            B) Gravitational force
                            C) Strong nuclear force<!--Correct-->
                            D) Weak nuclear force
                            What term describes the concept where an individual's behavior is influenced by observing and imitating others, especially those they perceive as role models?
                            A) Classical conditioning
                            B) Operant conditioning
                            C) Social learning theory<!--Correct-->
                            D) Cognitive dissonance
                            What is the process by which energy is produced in the core of the Sun through the fusion of hydrogen nuclei into helium?
                            A) Nuclear fission
                            B) Nuclear fusion<!--Correct-->
                            C) Solar flares
                            D) Solar wind
                        </form> --}}
                        <div>
                            <div class="min-h-screen flex items-center justify-center bg-black bg-no-repeat bg-cover bg-center">
                                <div class="modal-container hidden fixed inset-0 z-10 bg-black bg-opacity-40 flex items-center justify-center" id="score-modal"><!--Displays Score when quiz is over-->
                                    <div class="modal-content-container bg-gray-800 rounded-lg p-6">
                                        <h1 class="text-gray-300 text-lg mb-4">Congratulations, Quiz Completed.</h1>
                                        <div class="grade-details text-white text-center">
                                            <p>Attempts : 2</p>
                                            <p>Wrong Answers : <span id="wrong-answers"></span></p><!--Displays number or wrong answers-->
                                            <p>Right Answers : <span id="right-answers"></span></p><!--Displays number or right answers-->
                                            <p>Grade : <span id="grade-percentage"></span>%</p><!--Displays gade percent-->
                                            <p><span id="remarks"></span></p> <!--Displays remark based on grade-->
                                        </div>
                                        <div class="modal-button-container flex justify-center mt-4">
                                            <button onclick="closeScoreModal()" class="bg-gray-800 border border-white text-white px-4 py-1 rounded-lg hover:bg-gray-700">Continue</button><!--Closes the score screen and starts the test again-->
                                        </div>
                                    </div>
                                </div>
                        
                                <div class="game-quiz-container w-full sm:w-3/4 md:w-2/3 lg:w-1/2 xl:w-2/5 bg-gray-300 flex flex-col items-center justify-around rounded-lg">
                                    <div class="game-details-container w-4/5 flex justify-around items-center">
                                        <h1>Score : <span id="player-score"></span> / 10</h1><!--Displays number or right answers-->
                                        <h1>Question : <span id="question-number"></span> / 10</h1><!--Displays number or right answersquestion number-->
                                    <div class="game-question-container w-4/5 h-32 flex items-center justify-center border-2 border-gray-700 rounded-lg">
                                        <h1 id="display-question" class="text-base text-center"></h1>
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
                                            <label for="option-one" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-one-label"></label>
                                        </span>
                                        <span class="w-2/5 lg:w-1/3">
                                            <input type="radio" id="option-two" name="option" class="radio hidden" value="optionB" />
                                            <label for="option-two" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-two-label"></label>
                                        </span>
                                        <span class="w-2/5 lg:w-1/3">
                                            <input type="radio" id="option-three" name="option" class="radio hidden" value="optionC" />
                                            <label for="option-three" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-three-label"></label>
                                        </span>
                                        <span class="w-2/5 lg:w-1/3">
                                            <input type="radio" id="option-four" name="option" class="radio hidden" value="optionD" />
                                            <label for="option-four" class="option block w-full h-12 border-2 border-gray-700 rounded-full overflow-hidden cursor-pointer transition-transform duration-300 ease-in-out font-semibold text-gray-900 text-center leading-12 hover:scale-110 text-sm" id="option-four-label"></label>
                                        </span>
                                        <!--The spans above display the answer buttons-->
                                    </div>
                                    <div class="next-button-container w-1/2 flex justify-center">
                                        <button onclick="handleNextQuestion()" class="w-28 h-8 rounded-lg border border-gray-700 bg-transparent text-gray-900 font-semibold cursor-pointer hover:bg-red-500 hover:text-white transition-all duration-300 focus:outline-none text-sm">Next Question</button><!--Displays the next question-->
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
  
  
  
  
    <script type="text/javascript">//Script for all javascript
      function codeAddress() {
          alert('ok');
      }
  
      const questions = [//Contains all of the quiz questions. Formatted as Question, four answers, and a correct answer
          { 
              question: "Which biotechnological process involves the production of genetically identical copies of a particular gene or DNA sequence?",
              optionA: "Cloning",
              optionB: "Fermentation",
              optionC: "Polymerase Chain Reaction (PCR)",
              optionD: "Transcription",
              correctOption: "optionA"
          },
  
          {
              question: "What is the process by which energy is produced in the core of the Sun through the fusion of hydrogen nuclei into helium?",
              optionA: "Nuclear fission",
              optionB: "Nuclear fusion",
              optionC: "Solar flares",
              optionD: "Solar wind",
              correctOption: "optionB"
          },
  
          {
              question: "What term describes the concept where an individual's behavior is influenced by observing and imitating others, especially those they perceive as role models?",
              optionA: "Classical conditioning",
              optionB: "Operant conditioning",
              optionC: "Social learning theory",
              optionD: "Cognitive dissonance",
              correctOption: "optionC"
          },
  
          {
              question: "What fundamental force is responsible for holding protons and neutrons together within an atomic nucleus?",
              optionA: "Electromagnetic force",
              optionB: "Gravitational force",
              optionC: "Strong nuclear force",
              optionD: "Weak nuclear force",
              correctOption: "optionC"
          },

          {
              question: "What organism is responsible for the majority of Earth's oxygen production in marine environments?",
              optionA: "Coral",
              optionB: "Phytoplankton",
              optionC: "Jellyfish",
              optionD: "Sea urchin",
              correctOption: "optionB"
          },
          
          {
              question: "What is the process by which rocks are broken down into smaller particles due to natural factors like wind, water, and temperature changes?",
              optionA: "Erosion",
              optionB: "Weathering",
              optionC: "Deposition",
              optionD: "Sedimentation",
              correctOption: "optionB"
          },
  
          {
              question: "What term refers to the change in the DNA sequence that makes up a gene?",
              optionA: "Mutation",
              optionB: "Transcription",
              optionC: "Translation",
              optionD: "Replication",
              correctOption: "optionA"
          },
          
          {
              question: "What is the primary greenhouse gas responsible for trapping heat in the Earth's atmosphere?",
              optionA: "Methane",
              optionB: "Nitrous oxide",
              optionC: "Ozone",
              optionD: "Carbon dioxide",
              correctOption: "optionD"
          },
          
          {
              question: "Which state of matter has a definite volume but no definite shape?",
              optionA: "Solid",
              optionB: "Liquid",
              optionC: "Gas",
              optionD: "Plasma",
              correctOption: "optionB"
          }

      ]
  
  
      let shuffledQuestions = [] //empty array to hold shuffled selected questions
  
      function handleQuestions() { 
          //function to shuffle and push 10 questions to shuffledQuestions array
          while (shuffledQuestions.length <= 9) {
              const random = questions[Math.floor(Math.random() * questions.length)]
              if (!shuffledQuestions.includes(random)) {
                  shuffledQuestions.push(random)
              }
          }
      }
  
  
      let questionNumber = 1
      let playerScore = 0  
      let wrongAttempt = 0 
      let indexNumber = 0
  
      // function for displaying next question in the array to dom
      function NextQuestion(index) {
          console.log("Works")
          handleQuestions()
          const currentQuestion = shuffledQuestions[index]
          document.getElementById("question-number").innerHTML = questionNumber
          document.getElementById("player-score").innerHTML = playerScore
          document.getElementById("display-question").innerHTML = currentQuestion.question;
          document.getElementById("option-one-label").innerHTML = currentQuestion.optionA;
          document.getElementById("option-two-label").innerHTML = currentQuestion.optionB;
          document.getElementById("option-three-label").innerHTML = currentQuestion.optionC;
          document.getElementById("option-four-label").innerHTML = currentQuestion.optionD;
  
      }
  
  
      function checkForAnswer() {
          const currentQuestion = shuffledQuestions[indexNumber] //gets current Question 
          const currentQuestionAnswer = currentQuestion.correctOption //gets current Question's answer
          const options = document.getElementsByName("option"); //gets all elements in dom with name of 'option' (in this the radio inputs)
          let correctOption = null
  
          options.forEach((option) => {
              if (option.value === currentQuestionAnswer) {
                  //get's correct's radio input with correct answer
                  correctOption = option.labels[0].id
              }
          })
      
          //checking to make sure a radio input has been checked or an option being chosen
          if (options[0].checked === false && options[1].checked === false && options[2].checked === false && options[3].checked == false) {
              document.getElementById('option-modal').style.display = "flex"
          }
  
          //checking if checked radio button is same as answer
          options.forEach((option) => {
              if (option.checked === true && option.value === currentQuestionAnswer) {
                  document.getElementById(correctOption).style.backgroundColor = "green"
                  playerScore++
                  indexNumber++
                  //set to delay question number till when next question loads
                  setTimeout(() => {
                      questionNumber++
                  }, 1000)
              }
  
              else if (option.checked && option.value !== currentQuestionAnswer) {
                  const wrongLabelId = option.labels[0].id
                  document.getElementById(wrongLabelId).style.backgroundColor = "red"
                  document.getElementById(correctOption).style.backgroundColor = "green"
                  wrongAttempt++
                  indexNumber++
                  //set to delay question number till when next question loads
                  setTimeout(() => {
                      questionNumber++
                  }, 1000)
              }
          })
      }
  
  
  
      //called when the next button is called
      function handleNextQuestion() {
          checkForAnswer()
          unCheckRadioButtons()
          //delays next question displaying for a second
          setTimeout(() => {
              if (indexNumber <= 9) {
                  NextQuestion(indexNumber)
              }
              else {
                  handleEndGame()
              }
              resetOptionBackground()
          }, 1000);
      }
  
      //sets options background back to null after display the right/wrong colors
      function resetOptionBackground() {
          const options = document.getElementsByName("option");
          options.forEach((option) => {
              document.getElementById(option.labels[0].id).style.backgroundColor = ""
          })
      }
  
      // unchecking all radio buttons for next question(can be done with map or foreach loop also)
      function unCheckRadioButtons() {
          const options = document.getElementsByName("option");
          for (let i = 0; i < options.length; i++) {
              options[i].checked = false;
          }
      }
  
      // function for when all questions being answered
      function handleEndGame() {
          let remark = null
          let remarkColor = null
  
          // condition check for player remark and remark color
          if (playerScore <= 3) {
              remark = "Bad Grades, Keep Practicing."
              remarkColor = "red"
          }
          else if (playerScore >= 4 && playerScore < 7) {
              remark = "Average Grades, You can do better."
              remarkColor = "orange"
          }
          else if (playerScore >= 7) {
              remark = "Excellent, Keep the good work going."
              remarkColor = "green"
          }
          const playerGrade = (playerScore / 10) * 100
  
          //data to display to score board
          document.getElementById('remarks').innerHTML = remark
          document.getElementById('remarks').style.color = remarkColor
          document.getElementById('grade-percentage').innerHTML = playerGrade
          document.getElementById('wrong-answers').innerHTML = wrongAttempt
          document.getElementById('right-answers').innerHTML = playerScore
          document.getElementById('score-modal').style.display = "flex"
  
      }
  
      //closes score modal and resets game
      function closeScoreModal() {
          questionNumber = 1
          playerScore = 0
          wrongAttempt = 0
          indexNumber = 0
          shuffledQuestions = []
          NextQuestion(indexNumber)
          document.getElementById('score-modal').style.display = "none"
      }
  
      //function to close warning modal
      function closeOptionModal() {
          document.getElementById('option-modal').style.display = "none"
      }
  
      // window.onload = codeAddress;
    </script>
    {{-- Put questions here in mutiple choice format --}}
    {{-- https://codepen.io/Sulaimon-Olaniran/pen/zYKJLjK --}} 
    {{-- I regret not looking up the above earlier --}}
</x-partials.QuizLayout>