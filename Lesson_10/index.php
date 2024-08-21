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

$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] >= 1950 && $book['releaseYear'] <= 2020;
});

require 'index.view.php';
