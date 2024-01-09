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
                    {{-- Put questions here in mutiple choice format --}}
                    </p>
                </div>
            </div>
        </div>
    </div>
  
  
  
  
    <script type="text/javascript">
      function codeAddress() {
          alert('ok');
      }
  
      const questions = [
          {
              question: "How many days makes a week ?",
              optionA: "10 days",
              optionB: "14 days",
              optionC: "5 days",
              optionD: "7 days",
              correctOption: "optionD"
          },
  
          {
              question: "How many players are allowed on a soccer pitch ?",
              optionA: "10 players",
              optionB: "11 players",
              optionC: "9 players",
              optionD: "12 players",
              correctOption: "optionB"
          },
  
          {
              question: "Who was the first President of USA ?",
              optionA: "Donald Trump",
              optionB: "Barack Obama",
              optionC: "Abraham Lincoln",
              optionD: "George Washington",
              correctOption: "optionD"
          },
  
          {
              question: "30 days has ______ ?",
              optionA: "January",
              optionB: "December",
              optionC: "June",
              optionD: "August",
              correctOption: "optionC"
          },
  
          {
              question: "How manay hours can be found in a day ?",
              optionA: "30 hours",
              optionB: "38 hours",
              optionC: "48 hours",
              optionD: "24 hours",
              correctOption: "optionD"
          },
  
          {
              question: "Which is the longest river in the world ?",
              optionA: "River Nile",
              optionB: "Long River",
              optionC: "River Niger",
              optionD: "Lake Chad",
              correctOption: "optionA"
          },
  
          {
              question: "_____ is the hottest Continent on Earth ?",
              optionA: "Oceania",
              optionB: "Antarctica",
              optionC: "Africa",
              optionD: "North America",
              correctOption: "optionC"
          },
  
          {
              question: "Which country is the largest in the world ?",
              optionA: "Russia",
              optionB: "Canada",
              optionC: "Africa",
              optionD: "Egypt",
              correctOption: "optionA"
          },
  
          {
              question: "Which of these numbers is an odd number ?",
              optionA: "Ten",
              optionB: "Twelve",
              optionC: "Eight",
              optionD: "Eleven",
              correctOption: "optionD"
          },
  
          {
              question: `"You Can't see me" is a popular saying by`,
              optionA: "Eminem",
              optionB: "Bill Gates",
              optionC: "Chris Brown",
              optionD: "John Cena",
              correctOption: "optionD"
          },
  
          {
              question: "Where is the world tallest building located ?",
              optionA: "Africa",
              optionB: "California",
              optionC: "Dubai",
              optionD: "Italy",
              correctOption: "optionC"
          },
  
          {
              question: "The longest river in the United Kingdom is ?",
              optionA: "River Severn",
              optionB: "River Mersey",
              optionC: "River Trent",
              optionD: "River Tweed",
              correctOption: "optionA"
          },
  
  
          {
              question: "How many permanent teeth does a dog have ?",
              optionA: "38",
              optionB: "42",
              optionC: "40",
              optionD: "36",
              correctOption: "optionB"
          },
  
          {
              question: "Which national team won the football World cup in 2018 ?",
              optionA: "England",
              optionB: "Brazil",
              optionC: "Germany",
              optionD: "France",
              correctOption: "optionD"
          },
  
          {
              question: "Which US state was Donald Trump Born ?",
              optionA: "New York",
              optionB: "California",
              optionC: "New Jersey",
              optionD: "Los Angeles",
              correctOption: "optionA"
          },
  
          {
              question: "How man states does Nigeria have ?",
              optionA: "24",
              optionB: "30",
              optionC: "36",
              optionD: "37",
              correctOption: "optionC"
          },
  
          {
              question: "____ is the capital of Nigeria ?",
              optionA: "Abuja",
              optionB: "Lagos",
              optionC: "Calabar",
              optionD: "Kano",
              correctOption: "optionA"
          },
  
          {
              question: "Los Angeles is also known as ?",
              optionA: "Angels City",
              optionB: "Shining city",
              optionC: "City of Angels",
              optionD: "Lost Angels",
              correctOption: "optionC"
          },
  
          {
              question: "What is the capital of Germany ?",
              optionA: "Georgia",
              optionB: "Missouri",
              optionC: "Oklahoma",
              optionD: "Berlin",
              correctOption: "optionD"
          },
  
          {
              question: "How many sides does an hexagon have ?",
              optionA: "Six",
              optionB: "Sevene",
              optionC: "Four",
              optionD: "Five",
              correctOption: "optionA"
          },
  
          {
              question: "How many planets are currently in the solar system ?",
              optionA: "Eleven",
              optionB: "Seven",
              optionC: "Nine",
              optionD: "Eight",
              correctOption: "optionD"
          },
  
          {
              question: "Which Planet is the hottest ?",
              optionA: "Jupitar",
              optionB: "Mercury",
              optionC: "Earth",
              optionD: "Venus",
              correctOption: "optionB"
          },
  
          {
              question: "where is the smallest bone in human body located?",
              optionA: "Toes",
              optionB: "Ears",
              optionC: "Fingers",
              optionD: "Nose",
              correctOption: "optionB"
          },
  
          {
              question: "How many hearts does an Octopus have ?",
              optionA: "One",
              optionB: "Two",
              optionC: "Three",
              optionD: "Four",
              correctOption: "optionC"
          },
  
          {
              question: "How many teeth does an adult human have ?",
              optionA: "28",
              optionB: "30",
              optionC: "32",
              optionD: "36",
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
          console.log("TWERKS")
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