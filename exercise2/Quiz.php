<html>
    <body>
            <h1>Results</h1>
            <?php
                $answer1 = $_POST['Q1'];
                $answer2 = $_POST['Q2'];
                $answer3 = $_POST['Q3'];
                $answer4 = $_POST['Q4'];
                $answer5 = $_POST['Q5'];
                $correctA1 = "C) To spy on Russia";
                $correctA2 = "B) Jet Engine/Ram Jets";
                $correctA3 = "D) Russia";
                $correctA4 = "A) 0";
                $correctA5 = "A) Leaking Fuel Tank";

                $totalCorrect = 0;

                if ($answer1 == $correctA1)
                {
                    $totalCorrect++;
                }
                if ($answer2 == $correctA2)
                {
                    $totalCorrect++;
                }
                if ($answer3 == $correctA3)
                {
                    $totalCorrect++;
                }
                if ($answer4 == $correctA4)
                {
                    $totalCorrect++;
                }
                if ($answer5 == $correctA5)
                {
                    $totalCorrect++;
                }
                $percentage = ($totalCorrect / 5) * 100;

                echo "<h3>Q1: Why was the SR-71 created?</h3><br>";
                echo "Your Answer: $answer1<br>";
                echo "Correct Answer: $correctA1<br><br>";

                echo "<h3>Q2: What engines were used in the SR71?</h3><br>";
                echo "Your Answer: $answer2<br>";
                echo "Correct Answer: $correctA2<br><br>";

                echo "<h3>Q3: The airframe of the SR-71 is made out of Titanium. Who did the US use to get it?</h3><br>";
                echo "Your Answer: $answer3<br>";
                echo "Correct Answer: $correctA3<br><br>";

                echo "<h3>Q4: How many SR-71 have been shot down?</h3><br>";
                echo "Your Answer: $answer4<br>";
                echo "Correct Answer: $correctA4<br><br>";

                echo "<h3>Q5: What major problem did the SR-71 have when coming back to base?</h3><br>";
                echo "Your Answer: $answer5<br>";
                echo "Correct Answer: $correctA5<br><br>";

                echo "$totalCorrect  / 5 correct";
                echo "  $percentage %";

            ?>
    </body>
</html>