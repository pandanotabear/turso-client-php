<?php

$authToken = 'eyJ0eXAiOiJKV1QiLCJhbGciOiJFZERTQSJ9.eyJpYXQiOjE3NDA2Nzc2ODUsIm5iZiI6MTc0MDY3NzY4NSwiZXhwIjoxNzQxMjgyNDg1LCJqdGkiOiJkYjEifQ.6qW2iglFGkiEDZ9IAp0CL5n2zpz_SlD8EwcSDwEurOdQ9d8qrppek5qJ5rXTyH80hyHi5CruaFsvmkcUZg_UBg';

try {
    $db = new LibSQL('libsql:dbname=http://127.0.0.1:8080;authToken=' . $authToken);

    $db->query("SELECT 1");

    $db->execute("CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, name TEXT, age INTEGER)");

    $db->execute("INSERT INTO users (name, age) VALUES ('Bilal Ali Maftullah', 21)");

    $db->query("SELECT * FROM users");

    $db->execute("DROP TABLE users");

    $db->close();
} catch (\Throwable $th) {
    throw $th;
}

echo "🟩 Remote Database Connection is working fine and thank you!" . PHP_EOL;
