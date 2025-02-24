<?php
if ($_SERVER["REQUEST_URI"] === '/html') {

    echo '
    <div>
      <b>content from backend</b>
    </div>
    ';

    exit();
}

if ($_SERVER["REQUEST_URI"] === '/json') {
    $cats = [
        [
            'name' => 'pinecone'
        ],
        [
            'name' => 'Mr'
        ]
    ];

    echo json_encode($cats);
    exit();

}



?>
