<?php

$data =[
    [
    "question" => "Come state implementando la recente decisione della Corte di giustizia dell'Unione europea
                   (CGUE) relativa al diritto all'oblio?",
    "answer" => "La recente decisione della Corte di giustizia dell'Unione europea ha profonde conseguenze per
                i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori
                di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per
                poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti,
                o eccessivi.Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente
                per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e
                effettuare un bilanciamento tra il diritto dell'individuo a controllare i suoi dati personali ed il diritto
                di tutti di conoscere e distribuire le informazioni.",
    ],
    [
    "question" => "Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?",
    "answer" => "Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo
                  offrire un'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.
                 Siamo costantemente al lavoro per garantire un'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più
                 efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti
                 di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo. 
                 Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.
                 Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.",
    ],
    [
    "question" => "Perché il mio account è associato a un paese?",
    "answer" => [ "Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose:",
    
                ["La società consociata Google che offre i servizi,
                tratta le tue informazioni ed è responsabile del rispetto
                delle leggi sulla privacy vigenti. Generalmente Google
                offre i propri servizi per i consumatori tramite una
                delle due società seguenti:",

                    ["Google Ireland Limited, se gli utenti
                    sono residenti nello Spazio economico europeo
                    (paesi dell'Unione europea, oltre a Islanda,
                    Liechtenstein e Norvegia) o in Svizzera.",
                    "Google LLC, con sede negli Stati Uniti,
                    per il resto del mondo."]
                               
                ,
                "La versione dei termini che regola il nostro rapporto, che
                può variare in base alle leggi locali.
                Tieni presente che i servizi Google sono fondamentalmente
                gli stessi a prescindere dalla società consociata che li offre
                o dal paese a cui è associato il tuo account."
            ],

                "Tieni presente che i servizi Google sono fondamentalmente gli stessi a prescindere dalla società consociata che li offre o dal paese a cui è associato il tuo account."]

    ],        
];

foreach($data as $QnA => $arrQnA){            //cerco i subarray domanda-risposta

    $question = $arrQnA["question"];            //prendo i contenuti per singola chiave     
    $answer = $arrQnA["answer"];
?>
<!--
   if(is_array($answer)){                            //primo livello sottoliste  (se stringa:stampa, se no:cicla)
        foreach($answer as $list){

          if(is_array($list)){                        //secondo livello sottoliste
            foreach($list as $listcont){   
                
                if(is_array($listcont)){                       //terzo livello sottoliste
                    foreach($listcont as $sublist){
                        echo "<br> n ".$sublist . "<br>";
                    }
                 }else{
                
                    echo  "<br> ° ".$listcont . "<br>";
                 }
            }     
          }else echo $list . "<br>";
        }

    }else{
        echo $answer . "<br><br><br><br>";
        }-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Google form</title>
</head>
<body>

    <h2><?php echo $question ?></h2>

    <?php
       if(is_array($answer)){                            
        foreach($answer as $list){

          if(is_array($list)){                       
            foreach($list as $sublist){   
                
                if(is_array($sublist)){                       
                    foreach($sublist as $sublist_2){

                        ?>
                            <ul>
                             <li> <?php echo "°  ". $sublist_2 ?> </li>
                            </ul>                      
                        <?php
                    }
                }else{
                    ?>
                        <ul>
                          <li> <?php echo $sublist?> </li>
                        </ul> 
                
                    
                    <?php
                }
            }     
          }else echo $list . "<br>";
        }

    }else{
        echo $answer . "<br><br><br><br>";}
    ?>
    
 

</body>

<?php } ?>
</html>













