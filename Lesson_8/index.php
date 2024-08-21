<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>

<h1>Recommended Books</h1>

<?php
    $books = [
        [
            'name' => 'Do Androids Dream of Electric Sheep',
            'author' => 'Philip K. Dick',
            'releaseYear' => '1968',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Langoliers',
            'author' => 'Steven King',
            'releaseYear' => '1990',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => '1984',
            'author' => 'Jack London',
            'releaseYear' => '1949',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'The Sun also Rises',
            'author' => 'Ernest Hemingway',
            'releaseYear' => '1926',
            'purchaseUrl' => 'http://example.com'
        ],
        [
            'name' => 'Martin Eden',
            'author' => 'Jack London',
            'releaseYear' => '1909',
            'purchaseUrl' => 'http://example.com'
        ],
    ];

    function filteredByAuthor($books, $author) {
       $filteredBooks = [];

       foreach ($books as $book) {
           if ($book['author'] === $author) {
               $filteredBooks[] = $book;
           }
       }

       return $filteredBooks;
    }

?>

    <ul>
        <?php foreach (filteredByAuthor($books, 'Jack London') as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= "{$book['author']}: {$book['name']}, {$book['releaseYear']}"?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

    <!--Задача от Саши-->
    <a>
        <?php
        function isNumber($array) {
            return is_numeric($array);
        }

        $arr = [1, 'abc', 23, '42', false, null, '123abc', 99, -2];
        $filteredArray = array_filter($arr, 'isNumber');

        foreach ($filteredArray as $key => $item) {
            echo "$item ";
        }

        ?>
    </a>

</body>
</html>