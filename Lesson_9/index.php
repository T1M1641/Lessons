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
            'releaseYear' => 1968,
            'purchaseUrl' => 'https://example.com'
        ],
        [
            'name' => 'The Langoliers',
            'author' => 'Steven King',
            'releaseYear' => 1990,
            'purchaseUrl' => 'https://example.com'
        ],
        [
            'name' => '1984',
            'author' => 'Jack London',
            'releaseYear' => 1949,
            'purchaseUrl' => 'https://example.com'
        ],
        [
            'name' => 'The Sun also Rises',
            'author' => 'Ernest Hemingway',
            'releaseYear' => 1926,
            'purchaseUrl' => 'https://example.com'
        ],
        [
            'name' => 'Martin Eden',
            'author' => 'Jack London',
            'releaseYear' => 1909,
            'purchaseUrl' => 'https://example.com'
        ],
    ];

//    function filter($items, $fn) {
//        $filteredItems = [];
//
//        foreach ($items as $item) {
//            if ($fn($item)) {
//                $filteredItems[] = $item;
//            }
//        }
//
//        return $filteredItems;
//    }

        $filteredBooks = array_filter($books, function ($book) {
            return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
        });

    ?>

    <ul>
        <?php foreach ($filteredBooks as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= "{$book['author']}: {$book['name']}, {$book['releaseYear']}"?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>