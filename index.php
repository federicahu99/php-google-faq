<?php 

$faq= [
    'question1' => [
        'answer1' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso.",
                     "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese."],
        'answer2' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso.",
                     "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                    "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                    "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese."],
    'question2'=> [
        'answer3' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso.",
                     "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                     "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese."],
        'answer4' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso.",
                     "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese."],
    ]
    ]
]
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>
<body>
    <h1>Domande frequenti:</h1>
    <?php foreach($faq as $question) { ?>
        <h3> <?php echo $question; ?></h3>
        <?php foreach($question as $answer) { ?>
            <div>
            <?php echo $answer; ?>
            </div>
        <?php }; ?>
    <?php }; ?>
</body>
</html>