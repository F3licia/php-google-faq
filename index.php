<?php

$data = include("./allData/allData.php");

foreach($data as $QnA => $arrQnA){            //cerco i subarray domanda-risposta

    $question = $arrQnA["question"];            //prendo i contenuti per singola chiave     
    $answer = $arrQnA["answer"];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./stylesheets/style.css">
    <title>Google form</title>
</head>
<body>
  <div class="mainpage">
    <h3><?php echo $question ?></h3>

    <?php
       if(is_array($answer)){                               //se stringa stampa, altrimenti cicla nell'array
                               
        foreach($answer as $subAnswer){
            
            if(is_array($subAnswer)){                              //di nuovo 
                ?>
                <ul class="list"> <!--apertura primo ul-->
                <?php 
                 
                foreach($subAnswer as $sublist){  
                  
                    if(is_array($sublist)){                           //di nuovo 

                        ?>
                        <ul class="sublist"> <!--apertura secondo ul-->
                        <?php  

                        foreach($sublist as $sublist_2){

                            ?>
                               <li> <?php echo $sublist_2 ?> </li>                                         
                            <?php
                        }

                        ?> </ul> <?php  //chiusura secondo ul 
                    }else{
                        ?>
                        
                          <li> <?php echo $sublist?> </li>
                                
                        <?php
                    }    
                } 
                
                ?> </ul> <?php //chiusura primo ul 
            }      
            else{
                ?>
                    <p> <?php echo $subAnswer ?> </p>  
                <?php
            }  
        }
       
    }else{
        ?>
           <p> <?php echo $answer ?> </p>                 
        <?php
        }
    }
    ?>

</body>
</html>













