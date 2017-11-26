<?php

include "random_qst_generator.php";
global $easy_qst_only;
global $medium_qst_only;
global $hard_qst_only;
global $easy_ans_only;
global $medium_ans_only;
global $hard_ans_only;
$easy_qst_only=array();
$easy_ans_only=array();
$medium_qst_only=array();
$medium_ans_only=array();
$hard_qst_only=array();
$hard_ans_only=array();
echo "<br>"."<br>"."<br>";
/// generate an array of easy qst only without answers
for ($j=0; $j<count($easy_qst);$j++){
$easy_qst_only[$j]['qst']=$easy_qst[$j]['qst'];
$easy_qst_only[$j]['answer1']=$easy_qst[$j]['answer1'];
$easy_qst_only[$j]['answer2']=$easy_qst[$j]['answer2'];
$easy_qst_only[$j]['answer3']=$easy_qst[$j]['answer3'];
$easy_qst_only[$j]['answer4']=$easy_qst[$j]['answer4'];
    
}

/// generate an array of easy answers only without qst
for ($j=0; $j<count($easy_qst);$j++){
$easy_ans_only[$j]['correct_answer1']=$easy_qst[$j]['correct_answer1'];
$easy_ans_only[$j]['correct_answer2']=$easy_qst[$j]['correct_answer2'];
$easy_ans_only[$j]['correct_answer3']=$easy_qst[$j]['correct_answer3'];
$easy_ans_only[$j]['correct_answer4']=$easy_qst[$j]['correct_answer4'];
$easy_ans_only[$j]['explication']=$easy_qst[$j]['explication'];
    
}


/// generate an array of medium qst only without answers
for ($j=0; $j<count($medium_qst);$j++){
$medium_qst_only[$j]['qst']=$medium_qst[$j]['qst'];
$medium_qst_only[$j]['answer1']=$medium_qst[$j]['answer1'];
$medium_qst_only[$j]['answer2']=$medium_qst[$j]['answer2'];
$medium_qst_only[$j]['answer3']=$medium_qst[$j]['answer3'];
$medium_qst_only[$j]['answer4']=$medium_qst[$j]['answer4'];
    
}
/// generate an array of medium answers only without qst
for ($j=0; $j<count($medium_qst);$j++){
$medium_ans_only[$j]['correct_answer1']=$medium_qst[$j]['correct_answer1'];
$medium_ans_only[$j]['correct_answer2']=$medium_qst[$j]['correct_answer2'];
$medium_ans_only[$j]['correct_answer3']=$medium_qst[$j]['correct_answer3'];
$medium_ans_only[$j]['correct_answer4']=$medium_qst[$j]['correct_answer4'];
$medium_ans_only[$j]['explication']=$medium_qst[$j]['explication'];
    
}
/// generate an array of hard qst only without answers
for ($j=0; $j<count($hard_qst);$j++){
$hard_qst_only[$j]['qst']=$hard_qst[$j]['qst'];
$hard_qst_only[$j]['answer1']=$hard_qst[$j]['answer1'];
$hard_qst_only[$j]['answer2']=$hard_qst[$j]['answer2'];
$hard_qst_only[$j]['answer3']=$hard_qst[$j]['answer3'];
$hard_qst_only[$j]['answer4']=$hard_qst[$j]['answer4'];
    
}
/// generate an array of hard answers only without qst
for ($j=0; $j<count($hard_qst);$j++){
$hard_ans_only[$j]['correct_answer1']=$hard_qst[$j]['correct_answer1'];
$hard_ans_only[$j]['correct_answer2']=$hard_qst[$j]['correct_answer2'];
$hard_ans_only[$j]['correct_answer3']=$hard_qst[$j]['correct_answer3'];
$hard_ans_only[$j]['correct_answer4']=$hard_qst[$j]['correct_answer4'];
$hard_ans_only[$j]['explication']=$hard_qst[$j]['explication'];
    
}
/// just for testing
/*print_r ($easy_qst_only);
echo "<br>"."<br>"."<br>";
print_r ($medium_qst_only);
echo "<br>"."<br>"."<br>";
print_r ($hard_qst_only);
echo "<br>"."<br>"."<br>";
print_r ($easy_ans_only);
echo "<br>"."<br>"."<br>";
print_r ($medium_ans_only);
echo "<br>"."<br>"."<br>";
print_r ($hard_ans_only);*/

// create an array of all qst only
$k=0;
for ($i=0; $i<count($easy_qst_only); $i++){
    $qst_only[$k]=$easy_qst_only[$i];
    $k++;
};
for ($i=0; $i<count($medium_qst_only); $i++){
    $qst_only[$k]=$medium_qst_only[$i];
    $k++;
};
for ($i=0; $i<count($hard_qst_only); $i++){
    $qst_only[$k]=$hard_qst_only[$i];
    $k++;
};

// create an array of all ans only

$k=0;
for ($i=0; $i<count($easy_ans_only); $i++){
    $ans_only[$k]=$easy_ans_only[$i];
    $k++;
};
for ($i=0; $i<count($medium_ans_only); $i++){
    $ans_only[$k]=$medium_ans_only[$i];
    $k++;
};
for ($i=0; $i<count($hard_ans_only); $i++){
    $ans_only[$k]=$hard_ans_only[$i];
    $k++;
};
print_r ($qst_only);

echo "<br>"."<br>"."<br>";
print_r ($ans_only);

?>