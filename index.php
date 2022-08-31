<?php 

$faq= [
    'section' => [
        'question' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso."],
        'answer' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso.",
                     "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                    "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese.",
                    "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese."],
    'section'=> [
        'question' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso."],
        'answer2' => [ "Queste valutazioni sono complesse e, in quanto organizzazione privata, 
                     potremmo non essere nella posizione giusta per prendere decisioni in merito 
                     al tuo caso.",
                     "Se non sei d'accordo con la nostra valutazione, puoi rivolgerti 
                    all'Autorità garante per la protezione dei dati personali nel tuo paese."],
    ]
    ]
    ];

echo '<pre>';
var_dump($faq);
echo '</pre>';

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
    <ul>
        <?php for( $i = 0; $i < count($faq) - 1 ; $i++ ) : ?>
        <li>
            <?php echo $faq['question']; ?>
            <div>
                <?php echo $faq['answer']; ?>
            </div>
        </li>
        <?php endfor; ?>
    </ul>
</body>
</html>