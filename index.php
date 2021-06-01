<?php

$data =[
    [
    "question" => "???",
    "answer" => "!!!",
    ],
    [
    "question" => "????",
    "answer" => "!!!",
    ],
    [
    "question" => "????",
    "answer" => "!!!",
    ]
];

foreach($data as $QnA => $arrQnA){

    foreach($arrQnA as $key => $value){

     echo $key . " " . $value;

    }

}



?>


