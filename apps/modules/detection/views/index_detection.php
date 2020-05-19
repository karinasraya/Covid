<!DOCTYPE html>
<!--code by webdevtrick (webdevtrick.com) -->
<head>
	<meta charset=UTF-8" />
	
	<title>Early Detection COVID-19</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
    <script type="text/javascript" src="jquery.min.js"></script>
</head>

<body>

	<div class="question">

		<h1>EARLY DETECTION COVID-19</h1>
		
		<form action="" method="post" class="quiz">
		
            <ol>
            
                <li>
                
                    <h3>Apakah Anda Mengalami Demam?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">Ya </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">Tidak</label>
                    </div>
                    
                
                </li>
                
                <li>
                
                    <h3>Apakah Anda Mengalami Batuk?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">Tidak</label>
                    </div>
                    

                </li>
                
                <li>
                
                    <h3>Apakah Anda Mengalami Nyeri Tenggorokan?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">Tidak</label>
                    </div>
                    
                
                </li>
                
                <li>
                
                    <h3>Apakah Anda Mengalami Lemah, Letih, dan Lesu?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">Tidak</label>
                    </div>
                    
                
                </li>
                
                <li>
                
                    <h3>Apakah Anda mengalami sesak nafas?</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">Tidak</label>
                    </div>
                    
                 
                
                </li>

                <li>
                
                    <h3>Apakah Anda memiliki riwayat perjalanan ke luarnegeri?</h3>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-A" value="A" />
                        <label for="question-6-answers-A">Ya</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-6-answers" id="question-6-answers-B" value="B" />
                        <label for="question-6-answers-B">Tidak</label>
                    </div>
                 
                </li>

                <li>
                
                <h3>Apakah Anda memiliki riwayat perjalanan ke area terjangkit COVID-19?</h3>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-A" value="A" />
                    <label for="question-7-answers-A">Ya</label>
                </div>
                
                <div>
                    <input type="radio" name="question-7-answers" id="question-7-answers-B" value="B" />
                    <label for="question-7-answers-B">Tidak</label>
                </div>
             
            </li>

            <li>
                
                <h3>Apakah Anda memiliki riwayat kontak dengan pasien?</h3>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-A" value="A" />
                    <label for="question-8-answers-A">Ya</label>
                </div>
                
                <div>
                    <input type="radio" name="question-8-answers" id="question-8-answers-B" value="B" />
                    <label for="question-8-answers-B">Tidak</label>
                </div>
             
            </li>
            
            </ol>
            
            <input type="submit" value="Submit" class="submitbtn" />
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