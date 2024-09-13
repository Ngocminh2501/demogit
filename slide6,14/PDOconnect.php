<?php
//kết nối PDO với database
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

<?php
//thêm dữ liệu vào bảng
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO my_contacts (full_names, gender, contact_no, email, city, country) 
            VALUES (:full_names, :gender, :contact_no, :email, :city, :country)";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':full_names' => 'Lucas',
        ':gender' => 'Male',
        ':contact_no' => '541',
        ':email' => 'poseidon@sea.oc',
        ':city' => 'Troy',
        ':country' => 'Ithaca'
    ]);

    echo "Record added successfully";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<?php
//cập nhật dữ liệu
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "UPDATE my_contacts 
            SET full_names = :full_names, gender = :gender, contact_no = :contact_no, email = :email, city = :city, country = :country
            WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':full_names' => 'Poseidon Updated',
        ':gender' => 'Male',
        ':contact_no' => '542',
        ':email' => 'poseidon_updated@sea.oc',
        ':city' => 'Troy',
        ':country' => 'Ithaca',
        ':id' => 1 // ID của bản ghi cần cập nhật
    ]);

    echo "Record updated successfully<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


<?php
//xóa dữ liệu
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM my_contacts WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id' => 1]); // ID của bản ghi cần xóa

    echo "Record deleted successfully<br>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<?php
//hiển thị dữ liệu
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contacts', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM my_contacts";
    $stmt = $pdo->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "ID: " . $row['id'] . "<br>";
        echo "Full Name: " . $row['full_names'] . "<br>";
        echo "Gender: " . $row['gender'] . "<br>";
        echo "Contact No: " . $row['contact_no'] . "<br>";
        echo "Email: " . $row['email'] . "<br>";
        echo "City: " . $row['city'] . "<br>";
        echo "Country: " . $row['country'] . "<br><br>";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>


