<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<head>
	<meta charset=UTF-8" />
	
	<title>Early Detection COVID-19</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
    <link href="http://fonts.googleapis.com/css?family=Corben:bold" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Nobile" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<style>
.question{
  text-align: center;
}
.result{
    text-align:center;
    color: white;
    border: 3px solid grey;
    background-color:#333333;
    padding:13px 32px;
}
.myButton {
	box-shadow: 0px 10px 14px -7px #b8a5b8;
	background:linear-gradient(to bottom, #ffffff 5%, #c9c9c9 100%);
	background-color:#ffffff;
	border-radius:8px;
	display:inline-block;
	cursor:pointer;
	color:#666666;
	font-family:Arial;
	font-size:17px;
	font-weight:bold;
	padding:13px 32px;
	text-decoration:none;
    text-shadow:0px 1px 0px #808080;
    align: center;
}
.myButton:hover {
	background:linear-gradient(to bottom, #c9c9c9 5%, #ffffff 100%);
	background-color:#c9c9c9;
}
.myButton:active {
	position:center;
	top:1px;
}


</style>
<body>

<div class="container p-3 my-3 bg-dark text-white" >
  <h1 class="text-center">Early Detection of COVID-19</h1>
  <p class="text-center">Mohon diisi dengan Data yang Sebenar-benarnya</p>
</div>


	<div class="question">
		<form action="" method="post" class="quiz">
            <ol>
    
               
                    <h3>1. Apakah Anda Mengalami Demam?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" required/>
                        <label for="question-1-answers-A">Ya </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B"required />
                        <label for="question-1-answers-B">Tidak</label>
                    </div>
                    
    
                
                    <h3>2. Apakah Anda Mengalami Batuk?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A"required />
                        <label for="question-2-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B"required />
                        <label for="question-2-answers-B">Tidak</label>
                    </div>
                    

                    <h3>3. Apakah Anda Mengalami Nyeri Tenggorokan?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" required />
                        <label for="question-3-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" required />
                        <label for="question-3-answers-B">Tidak</label>
                    </div>
                    
        
                
                    <h3>4. Apakah Anda Mengalami Lemah, Letih, dan Lesu?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" required/>
                        <label for="question-4-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B"required />
                        <label for="question-4-answers-B">Tidak</label>
                    </div>
                    
                
                
                    <h3>5. Apakah Anda mengalami sesak nafas?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" required/>
                        <label for="question-5-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B"required />
                        <label for="question-5-answers-B">Tidak</label>
                    </div>
                    
                
                    <h3>6. Apakah Anda memiliki riwayat perjalanan ke luarnegeri?</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" required/>
                        <label for="question-6-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" required/>
                        <label for="question-6-answers-B">Tidak</label>
                    </div>
                 
                
                <h3>7. Apakah Anda memiliki riwayat perjalanan ke area terjangkit COVID-19?</h3>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" required/>
                    <label for="question-7-answers-A">Ya</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" required/>
                    <label for="question-7-answers-B">Tidak</label>
                </div>
             
       
                
                <h3>8. Apakah Anda memiliki riwayat kontak dengan pasien?</h3>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A"required />
                    <label for="question-8-answers-A">Ya</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" required/>
                    <label for="question-8-answers-B">Tidak</label>
                </div>
             
          
            
            </ol>
            
            <input type="submit" value="Submit" class="myButton" />
            <input type="hidden" name="<?php echo $this->security->get_csrf_token_name();?>" value="<?php echo $this->security->get_csrf_hash();?>">
		</form>
	
	</div>
    <div class="result">

<br>





<?php

    $answer1 = isset($_POST['question-1-answers']) ? $_POST['question-1-answers'] : null;

    $answer2 = isset($_POST['question-2-answers']) ? $_POST['question-2-answers'] : null;

    $answer3 = isset($_POST['question-3-answers']) ? $_POST['question-3-answers'] : null;

    $answer4 = isset($_POST['question-4-answers']) ? $_POST['question-4-answers'] : null;

    $answer5 = isset($_POST['question-5-answers']) ? $_POST['question-5-answers'] : null;

    $answer6 = isset($_POST['question-6-answers']) ? $_POST['question-6-answers'] : null;

    $answer7 = isset($_POST['question-7-answers']) ? $_POST['question-7-answers'] : null;

    $answer8 = isset($_POST['question-8-answers']) ? $_POST['question-8-answers'] : null;

/*

    $answer2 = $_POST['question-2-answers'];

    $answer3 = $_POST['question-3-answers'];

    $answer4 = $_POST['question-4-answers'];

    $answer5 = $_POST['question-5-answers'];

    $answer6 = $_POST['question-6-answers'];

    $answer7 = $_POST['question-7-answers'];

    $answer8 = $_POST['question-8-answers'];

*/      



    $totalCorrect = 0;

    

    if ($answer1 == "A") { $totalCorrect++; }

    if ($answer2 == "A") { $totalCorrect++; }

    if ($answer3 == "A") { $totalCorrect++; }

    if ($answer4 == "A") { $totalCorrect++; }

    if ($answer5 == "A") { $totalCorrect++; }

    if ($answer6 == "A") { $totalCorrect++; }

    if ($answer7 == "A") { $totalCorrect++; }

    if ($answer8 == "A") { $totalCorrect++; }



    if ($answer1 == "B") { 

        if ($answer2 == "B") {

            if ($answer3 == "B") {

                if ($answer4 == "B") {

                    if ($answer5 == "B") {

                        if ($answer5 == "B") {

                            if ($answer6 == "B") {

                                if ($answer7 == "B") {

                                    if ($answer8 == "B") { $totalCorrect = 1; }

                                }

                            }

                        }

                    }

                }

            }

        }

    }



    //echo "<div>$totalCorrect / 8 correct</div>";
    if ($totalCorrect == 0) {echo "<div id='results'></div>";}
    elseif ($totalCorrect >= 3) {echo "<div id='results'><h1>Result</h1><br>Jangan Panik! Silahkan Menghubungi Fasilitas terdekat atau hubungi hotline COVID-19 RI 119</div>";}
    elseif ($totalCorrect < 3 && $totalCorrect > 0) {echo "<div id='results'><h1>Result</h1><br>Istirahatlah teratur, jangan keluar rumah yaa</div>";}

?>
<!-- <input type="submit" value="Back" class="backbtn" /> -->
</div>

</body>
<script>


$(document).ready(function(){
$(".submitbtn").click(function(){
$(".result").show();
var Serialized =  $(".quiz").serialize();
$.ajax({
type: "POST",
    url: "result.php",
    data: Serialized,
    success: function(data) {
        //var obj = jQuery.parseJSON(data); if the dataType is not specified as json uncomment this
        // do what ever you want with the server response
    },

}
});
});
});
</script>

<!-- <script>

$(document).ready(function(){

$(".result").hide();

});

$(document).ready(function(){

$(".submitbtn").click(function(){

$(".result").slideToggle("slow");

});

});

</script>

-->

</html>
