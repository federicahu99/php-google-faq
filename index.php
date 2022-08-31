<?php 

$faq= [
    'section' => [
        'question' => "Lorem ipsum dolor sit, sapiente deserunt et, enim earum nesciunt?",
        'answer' => "<p>Lorem ipsum dolor sit. Quis quo, excepturi molestias est dignissimos doloremque! Asperiores, laudantium tempore hic error aut veritatis consectetur incidunt, sapiente deserunt et, enim earum nesciunt! </p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo, excepturi molestias est dignissimos doloremque! Asperiores, laudantium tempore hic error aut veritatis consectetur.</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo, excepturi molestias est dignissimos doloremque! Asperiores, enim earum nesciunt!</p>,
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit, sapiente deserunt et, enim earum nesciunt!     Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt perferendis aut aliquam suscipit pariatur, nisi veniam at necessitatibus, eveniet modi est reprehenderit ipsum aperiam, architecto minus enim. Maiores, incidunt est.</p>",
    ],
    'section'=> [
        'question' =>  "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo. Asperiores, laudantium tempore hic error aut veritatis consectetur incidunt, sapiente deserunt et, enim earum nesciunt?",
        'answer' => "<p>Lorem ipsum dolor sit. Quis quo, excepturi molestias est dignissimos doloremque! Asperiores, laudantium tempore hic error aut veritatis consectetur incidunt, sapiente deserunt et, enim earum nesciunt! </p>
        <p>    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt perferendis aut aliquam suscipit pariatur, nisi veniam at necessitatibus, eveniet modi est reprehenderit ipsum aperiam, architecto minus enim. Maiores, incidunt est.</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo, excepturi molestias est dignissimos doloremque! Asperiores, enim earum nesciunt! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quis quo, excepturi molestias est dignissimos doloremque! Asperiores, enim earum nesciunt!</p>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit, sapiente deserunt et, enim earum nesciunt!</p>",
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
        <?php foreach($faq as $section) : ?>
        <li>
            <h3> <?php echo $section['question']; ?></h3>
                <div>
                    <?php echo $section['answer']; ?>
                </div>
            <?php endforeach; ?>
        </li>
    </ul>

</body>
</html>