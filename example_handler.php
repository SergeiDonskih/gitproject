<?php 
    sleep(1);
    // echo $_POST['data'];


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