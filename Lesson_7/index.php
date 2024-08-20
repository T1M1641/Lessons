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
                'author' => 'George Orwell',
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
    ?>

    <ul>
        <?php foreach ($books as $book): ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['author'] . ": " . $book['name'] . ", " . $book['releaseYear']?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</body>
</html>