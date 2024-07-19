<?php
$db = new SQLite3('family.db');

// familyテーブルの作成
$db->exec("CREATE TABLE IF NOT EXISTS family (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    name TEXT NOT NULL,
    age INTEGER NOT NULL
)");

echo "Database and table created successfully.";
?>
