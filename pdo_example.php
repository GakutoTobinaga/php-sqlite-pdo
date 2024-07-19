<?php
// データベース接続の設定
$dsn = 'sqlite:family.db';
$username = null;
$password = null;

try {
    // PDOインスタンスの作成
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected to the database successfully.<br>";

    // データの挿入
    $stmt = $pdo->prepare("INSERT INTO family (name, age) VALUES (:name, :age)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':age', $age);

    // 例: データの挿入
    // $name = 'John Doe';
    // $age = 30;
    // $stmt->execute();

    // $name = 'Jane Smith';
    // $age = 25;
    // $stmt->execute();

    // $name = "Gakuto Tobinaga";
    // $age = 25;
    // $stmt->execute();

    echo "Data inserted successfully.<br>";

    // データの取得
    $stmt = $pdo->query("SELECT Id, name, age FROM family");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . ", Name: " . $row['name'] . ", Age: " . $row['age'] . "<br>";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
