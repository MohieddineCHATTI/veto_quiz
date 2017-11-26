<!DOCTYPE html>
<html>

<head><title>quiz</title></head>
<body>
    
<?php

$all_qst= array( array(array('qst1 easy', 'answer1.1 easy','answer1.2 easy', 'answer1.3 easy', 'answer1.4 easy'),array('qst2 easy', 'answer2.1 easy','answer2.2 easy', 'answer2.3 easy', 'answer2.4 easy')),array(array('qst1 medium', 'answer1.1 medium','answer1.2 medium', 'answer1.3 medium', 'answer1.4 medium'),array('qst2 medium', 'answer2.1 medium','answer2.2 medium', 'answer2.3 medium', 'answer2.4 medium')),array(array('qst1 hard', 'answer1.1 hard','answer1.2 hard', 'answer1.3 hard', 'answer1.4 hard'),array('qst2 hard', 'answer2.1 hard','answer2.2 hard', 'answer2.3 hard', 'answer2.4 hard')));
    
    
    
    function nextqst(){
    $j=0;
    $i=0;
    global $all_qst;
    global $qst,$answer1,$answer2,$answer3,$answer4;
    $qst= $all_qst[$i][$j][0];
    $answer1=$all_qst[$i][$j][1];
    $answer2=$all_qst[$i][$j][2];
    $answer3=$all_qst[$i][$j][3];
    $answer4=$all_qst[$i][$j][4];
    
    echo 'sdsd';
    }
    
    nextqst();
?>
    <p> <?php echo 'sfdsddg'.$qst ?> </p>
    <p> <?php echo $answer1 ?> </p>
    <p> <?php echo $answer2 ?> </p>
    <p> <?php echo $answer3 ?> </p>
    <p> <?php echo $answer4 ?> </p>


    
    
    
</body>









</html>