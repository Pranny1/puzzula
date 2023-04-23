<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Quizz time</title>
    <style>
		h2 {
			margin-top: 30px;
			margin-bottom: 10px;
		}
		p {
			margin-bottom: 20px;
		}
		input[type="text"] {
			width: 300px;
			padding: 10px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			box-shadow: 0 0 5px 0 rgba(0,0,0,0.3);
		}
		button {
			padding: 10px 20px;
			background-color: #4CAF50;
			color: white;
			border: none;
			border-radius: 5px;
			font-size: 16px;
			cursor: pointer;
		}
		button:hover {
			background-color: #3e8e41;
		}
            body {
            background-image: url('yuyu.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
          
        }
            .abc {
             width: 300px;
}

	</style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Dashboard</br></h1></br>
        <div id="score">Score: 0</div> <!-- Add score display to HTML -->
        <a href="logout.php" class="btn btn-warning">Submit and Logout</a>
        
    </div>
    </br>
    <button id="restartBtn">Restart Quest</button></br>
</br><h1>PUZZULA's QUEST</h1>
	<form>
		<h2>Question 1</h2>
		<h3>What is seen in the middle of March and April that can’t be seen at the beginning or end of either month?</h3>
		</br><input type="text" name="answer1" id="answer1">
		<button type="button" onclick="checkAnswer(1)">Submit</button>
		<h3 id="hint1" style="display: none; color: red;">Hint 1: It contain a "single alphabet" given in the below picture.</br><img class="abc" src="abcc.jpg"></br> Hint 2: It is a part of the joint family with 25 family members.</br> Hint 3: It is used in an "ARRAY".</br>Hint 4: It is as simple as that.</br>Hint 5: It can "R"everse.</h3>
       
		
		<h2>Question 2</h2>
		<img class="abc" src="xl.jpg"></br><h3>When is L greater than XL?.</h3>
		</br><input type="text" name="answer2" id="answer2">
		<button type="button" onclick="checkAnswer(2)">Submit</button>
		<h3 id="hint2" style="display: none; color: red;">Hint 1: It consists of "2" words .</br> Hint 2: It ought to have a word starting with letter "R".</br> Hint 3: It is another form of "numbers" and ends with the word "numbers".</br>Hint 4: It is as simple as to take "R"est.</br>Hint 5: It resembles the Greek's methodology .</h3>
		
		<h2>Question 3</h2>
		<h3>What disappears as soon as you say its name? </h3>
		</br><input type="text" name="answer3" id="answer3">
		<button type="button" onclick="checkAnswer(3)">Submit</button>
		<h3 id="hint3" style="display: none; color: red;">Hint 1: It starts with the letter "S".</br> Hint 2: The answer seems so simple—but not until you’ve figured it out! Before that moment.</br> Hint 3: It consists of "Seven" letters and we actions like this.</br><img class="abc" src="sil.jpg"></br> Hint 4: It appears strong in the dark.</br> Hint 5: It helps to detect the disturbance.</h3>
             <h2>Question 4</h2>
		<h3>What are the next three letters in this combination? OTTFFSS  </h3>
		</br><input type="text" name="answer4" id="answer4">
		<button type="button" onclick="checkAnswer(4)">Submit</button>
		<h3 id="hint4" style="display: none; color: red;">Hint 1: You have to determine the relationship between the letters in an order. </br> Hint 2: It is an order of"Numbers".</br> Hint 3: It lies between "0" and "11". </br> Hint 4: It is a specialization in medical filed.</br> Hint 5: It is as simple and easy as "ANT" but only a letter differs.</h3>
             <h2>Question 5</h2>
		<h3>What runs but never walks, has a mouth but never talks, has a bed but never sleeps? </h3>
		</br><input type="text" name="answer5" id="answer5">
		<button type="button" onclick="checkAnswer(5)">Submit</button>
		<h3 id="hint5" style="display: none; color: red;">Hint 1: It starts with the letter "R" </br> Hint 2: It always ends by merging into something.</br> Hint 3: It is everywhere in the world.</br> Hint 4: It always ends with the same .</br> Hint 5: It provide the requirements to live better.</h3>
	</form>
<script>
	var score = 0;
var answeredQuestions = [];

function checkAnswer(questionNumber) {
  var answer = document.getElementById("answer" + questionNumber).value.toLowerCase();
  var hint = document.getElementById("hint" + questionNumber);

  switch(questionNumber) {
    case 1:
      if (answer === "r" && !answeredQuestions.includes(questionNumber)) {
        alert("That's Correct! Keep It Up..");
        hint.style.display = "none";
        score += 20;
        answeredQuestions.push(questionNumber);
        document.getElementById("score").innerHTML = "Score: " + score;
      } else if (answeredQuestions.includes(questionNumber)) {
        alert("You already answered this question correctly!");
        hint.style.display = "none";
      } else {
        hint.style.display = "block";
      }
      break;

				case 2:
					if (answer === "roman numbers" && !answeredQuestions.includes(questionNumber)) {
                                         alert("That's Correct! Keep It Up..");
                                         hint.style.display = "none";
                                         score += 20;
                                         answeredQuestions.push(questionNumber);
                               document.getElementById("score").innerHTML = "Score: " + score;
                               } else if (answeredQuestions.includes(questionNumber)) {
                                alert("You already answered this question correctly!");
                                     hint.style.display = "none";
                                      } else {
                                hint.style.display = "block";
                                }
                              break;
					
				case 3:
                             if (answer === "silence" && !answeredQuestions.includes(questionNumber)) {
                                         alert("That's Correct! Keep It Up..");
                                         hint.style.display = "none";
                                         score += 20;
                                         answeredQuestions.push(questionNumber);
                               document.getElementById("score").innerHTML = "Score: " + score;
                               } else if (answeredQuestions.includes(questionNumber)) {
                                alert("You already answered this question correctly!");
                                     hint.style.display = "none";
                                      } else {
                                hint.style.display = "block";
                                }
                              break;
					
                        case 4:
					if (answer === "ent" && !answeredQuestions.includes(questionNumber)) {
                                         alert("That's Correct! Keep It Up..");
                                         hint.style.display = "none";
                                         score += 20;
                                         answeredQuestions.push(questionNumber);
                               document.getElementById("score").innerHTML = "Score: " + score;
                               } else if (answeredQuestions.includes(questionNumber)) {
                                alert("You already answered this question correctly!");
                                     hint.style.display = "none";
                                      } else {
                                hint.style.display = "block";
                                }
                              break;
                        case 5:
					if (answer === "river" && !answeredQuestions.includes(questionNumber)) {
                                         alert("That's Correct! Keep It Up..");
                                         hint.style.display = "none";
                                         score += 20;
                                         answeredQuestions.push(questionNumber);
                               document.getElementById("score").innerHTML = "Score: " + score;
                               } else if (answeredQuestions.includes(questionNumber)) {
                                alert("You already answered this question correctly!");
                                     hint.style.display = "none";
                                      } else {
                                hint.style.display = "block";
                                }
                              break;
				default:
					alert("Invalid question number.");
			}
		}
	</script>
    
    <script>
      // Add event listener to the restart button
      document.getElementById("restartBtn").addEventListener("click", function() {
        // Reload the page to restart the quiz
        location.reload();
      });
    </script>
      
</body>
</html>