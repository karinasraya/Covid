<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />
	
	<title>EARLY DETECTION COVID-19</title>
    <script type="text/javascript" src="jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>Result</h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
            $answer6 = $_POST['question-6-answers'];
            $answer7 = $_POST['question-7-answers'];
            $answer8 = $_POST['question-8-answers'];

        
            $totalCorrect = 0;
            
            if ($answer1 == "A") { $totalCorrect++; }
            if ($answer2 == "A") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "A") { $totalCorrect++; }
            if ($answer5 == "A") { $totalCorrect++; }
            if ($answer6 == "A") { $totalCorrect++; }
            if ($answer7 == "A") { $totalCorrect++; }
            if ($answer8 == "A") { $totalCorrect++; }

            if ($totalCorrect >= 3) {echo "<div id='results'>Jangan Panik! Silahkan Menghubungi Fasilitas terdekat atau hubungi hotline COVID-19 RI 119</div>";}
            if ($totalCorrect < 3) {echo "<div id='results'>Istirahatlah teratur, jangan keluar rumah yaa</div>";}
            
        ?>
	
	</div>

</body>

</html>