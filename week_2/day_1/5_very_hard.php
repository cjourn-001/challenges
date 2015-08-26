
<!DOCTYPE html>
<html>
<head></head>
<body>
<p>

    <?php
    while($Ericscore < 4 && $Markscore < 4){ 
                        //random function for r,p,s
        
        $Markroll=rand(1,3);
        switch($Markroll) {
            case 1:
                $Markroll= "Rock";
                    break;
            case 2:
                $Markroll= "Paper";
                    break;
            case 3:
                $Markroll= "Scissors";
                    break;
            }
    
        $Ericroll=rand(1,3);
        switch($Ericroll) {
            case 1:
                $Ericroll= "Rock";
                    break;
            case 2:
                $Ericroll= "Paper";
                    break;
            case 3:
                $Ericroll= "Scissors";
                    break;
            }
        
        if($Markscore < 4 || $Ericscore < 4 ) {
            if($Ericroll == "Rock" && $Markroll == "Paper"){
                $Markscore++;
                echo "Eric Rolled Rock";
                echo "Mark Rolled Paper";
                echo "Eric's score = $Ericscore";
                echo "Mark's score = $Markscore";
            }
            elseif($Ericroll == "Rock" && $Markroll == "Scissors"){
                $Ericscore++;
                echo "Eric Rolled Rock";
                echo "Mark Rolled Scissors";
                echo "Eric's score = $Ericscore";
                echo "Mark's score = $Markscore";
            }
            elseif($Ericroll == "Paper" && $Markroll == "Rock"){
                $Ericscore++;
                echo "Eric Rolled Paper";
                echo "Mark Rolled Rock";
                echo "Eric's score = $Ericscore";
                echo "Mark's score = $Markscore";
            }
            elseif($Ericroll == "Paper" && $Markroll == "Scissors"){
                $Markscore++;
                echo "Eric Rolled Paper";
                echo "Mark Rolled Scissors";
                echo "Eric's score = $Ericscore";
                echo "Mark's score = $Markscore";
            }
            elseif($Ericroll == "Scissors" && $Markroll == "Rock"){
                $Markscore++;
                echo "Eric Rolled Scissors";
                echo "Mark Rolled Rock";
                echo "Eric's score = $Ericscore";
                echo "Mark's score = $Markscore";
            }
            elseif($Ericroll == "Scissors" && $Markroll == "Paper"){
                $Ericscore++;
                echo "Eric Rolled Scissors";
                echo "Mark Rolled Paper";
                echo "Eric's score = $Ericscore";
                echo "Mark's score = $Markscore";
            }
            else{
                //rolled same thing
            }
        }
    }
    ?>
</p>
</body>
</html>