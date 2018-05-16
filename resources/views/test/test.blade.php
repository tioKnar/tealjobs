@extends('layouts.app')

    @section ('content')

<div id="quizzie">
  <h1>What Type Of Thing Are You?</h1>
    <ul class="quiz-step step1 current">
        <li class="question">
            <div class="question-wrap">
                <h2>Question #1: Are you more...</h2>
            </div>
        </li>
        <li class="quiz-answer low-value" data-quizIndex="2">
            <div class="answer-wrap"> 
                <p class="answer-text">This Thing</p>
            </div>
        </li>
        <li class="quiz-answer high-value" data-quizIndex="4">
            <div class="answer-wrap"> 
                <p class="answer-text">That Thing</p>
            </div>
        </li>
    </ul>
    <ul class="quiz-step step2">
        <li class="question">
            <div class="question-wrap">
                <p>Question #2: Are you more...</p>
            </div>
        </li>
        <li class="quiz-answer low-value" data-quizIndex="2">
            <div class="answer-wrap"> 
                <p class="answer-text">First Thing</p>
            </div>
        </li>
        <li class="quiz-answer high-value" data-quizIndex="4">
            <div class="answer-wrap">
                <p class="answer-text">Second Thing</p>
            </div>
        </li>
    </ul>
    <ul class="quiz-step step3">
        <li class="question">
            <div class="question-wrap">
                <p>Question #3: Are you more...</p>
            </div>
        </li>
        <li class="quiz-answer low-value" data-quizIndex="2">
            <div class="answer-wrap">
                <p class="answer-text">One Thing</p>
            </div>
        </li>
        <li class="quiz-answer high-value" data-quizIndex="4">
            <div class="answer-wrap">
                <p class="answer-text">Another Thing</p>
            </div>
        </li>
    </ul>
    <ul class="quiz-step step4">
        <li class="question">
            <div class="question-wrap">
                <p>Question #4: Are you more...</p>
            </div>
        </li>
        <li class="quiz-answer low-value" data-quizIndex="2">
            <div class="answer-wrap">
                <p class="answer-text">Thing 1</p>
            </div>
        </li>
        <li class="quiz-answer high-value" data-quizIndex="4">
            <div class="answer-wrap">
                <p class="answer-text">Thing 2</p>
            </div>
        </li>
    </ul>
    <ul id="results">
        <li class="results-inner">
            <p>Your result is:</p>
            <h1></h1>
            <p class="desc"></p>
        </li>
    </ul>
</div>


<div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2>Test</h2>
                    <form action="" method="POST">
                        @csrf
                        <fieldset>
                        <p>question1</p>
                            <input type="radio" name="1" class="input-error">réponse1<br>
                            <input type="radio" name="2">réponse2<br>
                            <input type="radio" name="3">réponse3<br>
                            <input type="radio" name="4">réponse4<br>
                            <input type="radio" name="5">réponse5<br>
                            <input type="radio" name="6">réponse6<br>
                            <button class="btn btn-next">next</button>
                        </fieldset>
                        <fieldset>
                        <p>question2</p>
                            <input type="radio" name="1">réponse1<br>
                            <input type="radio" name="2">réponse2<br>
                            <input type="radio" name="3">réponse3<br>
                            <input type="radio" name="4">réponse4<br>
                            <input type="radio" name="5">réponse5<br>
                            <input type="radio" name="6">réponse6<br>
                            <button class="btn btn-next">next</button>
                        </fieldset>
                        <fieldset>
                        <p>question3</p>
                            <input type="radio" name="1">réponse1<br>
                            <input type="radio" name="2">réponse2<br>
                            <input type="radio" name="3">réponse3<br>
                            <input type="radio" name="4">réponse4<br>
                            <input type="radio" name="5">réponse5<br>
                            <input type="radio" name="6">réponse6<br>
                            <button type="submit" class="btn btn-submit" name="save">submit</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <script>

        </script>


    <div class="container" style="padding-top: 15px;">

      <div  class="row justify-content">
        <div id="div1" class="col-sm-4" style="padding-top: 5px;">
            <div style="background-color: white;">
                <div class="panel panel-default">
                    <div  class="panel-heading" style="background-color: white;"><!-- <h4>Learning / <b style="font-size:13px; color:black;">Quizzes</b></h4></div> -->
                        <!-- <div  class="panel-body"> -->
              
                            <!-- <div id='title'>
                    <h3>Quiz Title - Example</h3>
                            </div> -->
                            <!-- <br/> -->
              <!-- <div id="h4Start"> -->
                 <!--  <b>Questions:</b> 10<br/>
                  <b>Maximum Score:</b> 100<br/>
                  <b>Pass Mark:</b> 70%<br/><br/>
                  <p style="color:#dc026b;"><b>Discripiton</b><p/>
                                Lorem ipsum dolor sit amet, solum dolore sententiae ex has, his an amet nostrum fierent. No dicat mundi sed, nam autem corrumpit definiebas ea. Quo debet reprehendunt eu. Et impetus comprehensam eum, has ne dissentiet dissentiunt.
                  <h4 >Click start to start the quiz</h4> -->
             <!--  </div> -->
              
            
              
                            <button id="start">Start Quiz</button>
              
                  
                        <div id="content">
                            <div id="question"></div>
                            <div id="answers"></div>
                            <br/>
                            <button id="back" disabled>Back</button>
                            <button id="next">Next</button>
     
                            <h3><p id="score"></p></h3>
                            <p id="result"><b>Congratulations! You made it!</b></p>
                            <p id="resultbad"><b>Sorry, you need to score 70 points to pass</b></p>
                  
                  <!-- <button id="startagain">Start Again</button> -->
                        </div>
              
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-4" style="padding-top: 5px;">
            <div style="background-color: white;">
                <div class="panel panel-default">
                    <div class="panel-heading" style="background-color: white;"><h4>Progress</h4></div>
                        <div id="div2" class="panel-body">
              
                            <div class="panel panel-default" style="border-radius: 0;">
                                <!-- <div id="div" class="panel-heading"><img class="img-responsive" src="https://dangelo2017.files.wordpress.com/2017/02/quiz-img-21.jpg" alt="quiz-exemple"></div>
                                <div class="panel-body"><!-- <h4>Alternative Text Example</h4> --></div> -->
                  
                  
                                <div class="panel-footer">Your Progress<br/>
                                    <p id="questCount"></p>
                                    <div id="barra" class="progress">
                                        <div id="bar" class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="0" aria-valuemax="100" style="width:1%">
                                        </div>                                           
                                    </div>
                                </div>                      
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
    </div>

    <!-- <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script> -->

    <script src="js/index.js"></script>

    <script>
        function newQuestion(params) {
            var temp = {
                question:  params[0],
                choices: params[1],
                correctAnswer: params[2]
            };
            // dd(temp);
            return temp;
        }
// Create the array allQuestions and generate all of the new questions
        var allQuestions = [
                        ["<p><b>Question 1:</b><br/> How much is 1 + 1?<p/>", ["1", "2", "3", "4"], 1],
                        ["<p><b>Question 2:</b><br/>How much is 2 + 2?<p/>", ["2", "6", "3", "4"], 3],
                        ["<p><b>Question 3:</b><br/>How much is 3 + 3?<p/>", ["6", "9", "3", "12"], 0],
                        ["<p><b>Question 4:</b><br/>How much is 4 + 4?<p/>", ["10", "12", "8", "4"], 2],
                        ["<p><b>Question 5:</b><br/>How much is 5 + 5?<p/>", ["10", "15", "14", "11"], 0],
                        ["<p><b>Question 6:</b><br/>How much is 6 + 6?<p/>", ["11", "12", "13", "14"], 1],
                        ["<p><b>Question 7:</b><br/>How much is 7 + 7?<p/>", ["49", "21", "15", "14"], 3],
                        ["<p><b>Question 8:</b><br/>How much is 8 + 8?<p/>", ["0", "16", "64", "24"], 1],
                        ["<p><b>Question 9:</b><br/>How much is 9 + 9?<p/>", ["81", "18", "15", "24"], 1],
                        ["<p><b>Question 10:</b><br/>How much is 10 + 10?<p/>", ["10", "20", "30", "40"], 1]
                       ].map(newQuestion);
// Create and initialize the total (to 0), number (to 0), and totalQuestions (to the length of allQuestions) variables
    var total = 0, number = 0, totalQuestions = allQuestions.length, answers = [];

$(document).ready(function() {

    function newQuestionAnswers() {
        $("#content").fadeOut(500, function() {
            $("#answers").empty();
            if (number < totalQuestions)
                $("#questCount").text("Question: " + (number + 1) + " of 10");
            var query = allQuestions[number];
            $("#question").html(query.question);

            // make sure to put in the name parameter and make sure that it's the same as the div that groups
            // the radio buttons together, otherwise they can all be checked at the same time, you'll never have
            // just one answer. The use of the html <label> element was discovered here:
            // http://stackoverflow.com/questions/5795499/changing-text-of-radio-button
            // Where it was explained that the text of the radio button was now explicitly associated with the
            // use of <label>
            for(var i = 0; i < query.choices.length; i++)
                $("#answers").append("<input type='radio' name='answers' id='radio" + i + "' value='answer" + i
                    + "'><label for='test" + i + "'>" + query.choices[i] + "</label><br>");
            if(answers.length > number)
                $("#radio" + answers[number]).prop("checked", true);
            if (number > 0)
                $("#back").prop("disabled", false);
        });
        $("#content").fadeIn(500);
    }

    function checkAnswer() {
        // Make sure a radio button is checked before proceeding. If one is checked add it to answers, else if
        // the last radio button is reached and it is not checked alert the user that they must select an answer.
        for(var i = 0; i < $("input").length; i++) {
            if ($("#radio" + i).is(":checked")) {
                answers[number] = i;
                break;
            }
            else if ( i === $("input").length -1 && !$("#radio" +i).is(":checked")) {
                $("#next").after("<p id='warning'>Please select an answer and then click next</p>");
                return false;
            }
        }

        // Check to see if the current radio button checked is the correct answer. If correct increment the
        // score 10 points. This answer helped figure out if a radio box was checked and allowed you to use it in
        // an if statement http://stackoverflow.com/a/12932116
        var query = allQuestions[number];
        if($("#radio" + query.correctAnswer).is(":checked"))
            updateScore(10);
        number += 1;
        return true;
    }

    function finalScore() {
        $("#score").text("Final Score: " + total + "/" + totalQuestions * 10).show(1000);
        $("#question, #answers, #questCount, #next, #back").hide(10);
         $("#startagain").hide(100);
        if (total > 60)
         $("#result").show(1000);
        if (total < 70)
         $("#resultbad").show(1000);
         
        
         
        
    }

    function updateScore(change) {
        total += change;
        $("#score").text("Score: " + total);
    }

    $("#back").hide();
    $("#next").hide();
    $("#startagain").hide();
    $("#score").hide();
    $("#bar10").hide();
    $("#result").hide();
    $("#resultbad").hide();
    
    
    $("#start").on('click', function() {
        $("#start").hide();
        $('#h4Start').hide(1000);
         $("#next").show(1000);
        $("#bar").width('5%');
        newQuestionAnswers();
        updateScore(0);
    });

      $("#startagain").on('click', function() {
        
       location.reload();
     
    
         
    });
    
    $("#next").on('click', function() {
        $("#back").show(100);
        $("#warning").remove();
        if(checkAnswer()) {
            if (number < totalQuestions)
                newQuestionAnswers();
            else
                finalScore();
            
            
        }
        
       
        
        // Enable the back button if past first question
        if (number > 0)
            $("#back").prop("disabled", false);
            $("#bar").width('10%');
        
        if (number > 1)
        $("#bar").width('20%');
        if (number > 2)
        $("#bar").width('30%');
        if (number > 3)
        $("#bar").width('40%');
        if (number > 4)
        $("#bar").width('50%');
        if (number > 5)
        $("#bar").width('60%');
        if (number > 6)
        $("#bar").width('70%');
        if (number > 7)
        $("#bar").width('80%');
        if (number > 8)
        $("#bar").width('90%');
        if (number > 9)
        $("#bar").width('100%');
        
        
   
    });
    
    
    
        

    $("#back").on('click', function() {
        if ( number === totalQuestions) {
            $("#score").hide();
            $("#question, #answers, #questCount, #next, #score").show(2500);
        }
        
        if (number > 0)
        $("#bar").width('5%');
        if (number > 1)
        $("#bar").width('10%');
        if (number > 2)
        $("#bar").width('20%');
        if (number > 3)
        $("#bar").width('30%');
        if (number > 4)
        $("#bar").width('40%');
        if (number > 5)
        $("#bar").width('50%');
        if (number > 6)
        $("#bar").width('60%');
        if (number > 7)
        $("#bar").width('70%');
        if (number > 8)
        $("#bar").width('80%');
        if (number > 9)
        $("#bar").width('90%');
        
        number -= 1;
        $("#back").prop("disabled", true);
        if (allQuestions[number].correctAnswer === answers[number])
            updateScore(-10);
        newQuestionAnswers();
        
          
    });
});
    </script>



    @endsection







