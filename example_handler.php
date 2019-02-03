<?php 
    sleep(1);
    echo $_POST['data'];


    $persons = [
        [
            'name' => 'Вася',
            'age' => 80
        ],
        [
            'name' => 'Коля',
            'age' => 78
        ],
        [
            'name' => 'Федор',
            'age' => 65
        ],
    ];

    echo json_encode($persons);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
</html>