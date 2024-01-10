<x-partials.QuizLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10" onload="NextQuestion(0)">
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
                                    </div>
                                    <div class="next-button-container w-1/2 flex justify-center">
                                        <button onclick="handleNextQuestion()" class="w-28 h-8 rounded-lg border border-gray-700 bg-transparent text-gray-900 font-semibold cursor-pointer hover:bg-red-500 hover:text-white transition-all duration-300 focus:outline-none text-sm">Next Question</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {{-- For some reason putting comments in the above code breaks it. I do not know why, and I am to tired to figure out why. So all comments for the above with go below:
                        1. The modal-container/score modal div at the top controls displaying the score when you finish
                        2. The paragraphs with spans with in that container display the values they get from the JS 
                        3. The continue and next buttons are self explainitory, they render the next quiz or question
                        4. The score and question spans display the according values for the user--}}
                    </p>
                </div>
            </div>
        </div>
    </div>
  
  
  
  
    <script type="text/javascript">//Script for all javascript
      function codeAddress() {
          alert('ok');
      }
    //Contains all of the quiz questions. Formatted as Question, four answers, and a correct answer
      const questions = [
          {
              question: "How many states are there?",
              optionA: "10",
              optionB: "43",
              optionC: "101",
              optionD: "50",
              correctOption: "optionD"
          },
          
          {
              question: "This is a reminder to make a question",
              optionA: "",
              optionB: "",
              optionC: "",
              optionD: "",
              correctOption: "optionD"
          },

          {
              question: "What type of government system allows citizens to elect representatives who make decisions on their behalf?",
              optionA: "Oligarchy",
              optionB: "Democracy",
              optionC: "Autocracy",
              optionD: "Monarchy",
              correctOption: "optionB"
          },

          {
              question: "What is the biggest continent?",
              optionA: "North America",
              optionB: "Aftrica",
              optionC: "Asia",
              optionD: "Australia",
              correctOption: "optionC"
          },

          {
              question: "Which US branch of government comes up with laws?",
              optionA: "Legislative",
              optionB: "Executive",
              optionC: "Judicial",
              optionD: "People",
              correctOption: "optionA"
          },

          {
              question: "Which one is not an ancient civilization?",
              optionA: "The Aztecs",
              optionB: "The Mayas",
              optionC: "The Luminaras",
              optionD: "The Incas",
              correctOption: "optionC"
          },

          {
              question: "Which historical event happened first?",
              optionA: "Battle of Hastings",
              optionB: "Spanish Inquisition is established",
              optionC: "Russian Revolution",
              optionD: "Fall of Sejanus",
              correctOption: "optionD"
          },

          {
              question: "Which one of these is a Japanese Buddhist Holiday that honors the deceased",
              optionA: "Diwali",
              optionB: "Obon",
              optionC: "The Forth of July",
              optionD: "Hinamatsuri",
              correctOption: "optionB"
          },

          {
              question: "Which economic system emphasizes collective ownership of resources, equitable distribution of wealth, and centralized planning?",
              optionA: "Capitalism",
              optionB: "Feudalism",
              optionC: "Socialism",
              optionD: "Mercantilism",
              correctOption: "optionC"
          },

          {
              question: "In a parliamentary system of government, which entity typically holds the most executive power?",
              optionA: "Prime Minister",
              optionB: "President",
              optionC: "Monarch",
              optionD: "Governor",
              correctOption: "optionA"
          },
  
          {
              question: "Which document established the framework for the government of the United States and replaced the Articles of Confederation?",
              optionA: "Declaration of Independence",
              optionB: "Emancipation Proclamation",
              optionC: "Constitution",
              optionD: "Bill of Rights",
              correctOption: "optionC"
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
  </x-partials.QuizLayout>