<?php
$config = [
    'host' => 'localhost',
    'dbname' => 'phptest',
    'user' => 'php_user',
    'pass' => '123',
    'table' => 'todo_list'
];

function renderPage($tasks = [], $error = null) {
    // (HTML and styling omitted for brevity)
}

try {
    $dsn = "mysql:host={$config['host']};dbname={$config['dbname']};charset=utf8mb4";
    $pdo = new PDO($dsn, $config['user'], $config['pass'], [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);

    $stmt = $pdo->query("SELECT content FROM {$config['table']}");
    $tasks = $stmt->fetchAll(PDO::FETCH_ASSOC);

    renderPage($tasks);
} catch (PDOException $e) {
    renderPage([], $e->getMessage());
}
?>
