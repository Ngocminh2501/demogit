<?php
$dbh = mysqli_connect('localhost', 'root', '');
if (!$dbh) {
    die("Unable to connect to MySQL: " . mysqli_connect_error()); 
    
}
if (!mysqli_select_db($dbh, 'contacts')) {
    die("Unable to select database: " . mysqli_error($dbh)); 
  
}

// Câu lệnh SQL để thêm dữ liệu
$sql_stmt = "INSERT INTO `my_contacts` (`full_names`, `gender`, `contact_no`, `email`, `city`, `country`) ";
$sql_stmt .= "VALUES('Poseidon', 'Male', '541', 'poseidon@sea.oc', 'Troy', 'Ithaca')";
$result = mysqli_query($dbh, $sql_stmt);
if (!$result) {
    die("Adding record failed: " . mysqli_error($dbh));   
} else {
    echo "Poseidon has been successfully added to your contacts list<br>";
}

//update dữ liệu
$sql_stmt = "UPDATE `my_contacts` SET `contact_no` = '785',`email` = 'poseidon@ocean.oc'";
    $sql_stmt .= "WHERE `id` = 5";
    
    $result = mysqli_query($dbh,$sql_stmt);
if (!$result) {
        die("Deleting record failed: " . mysqli_error($dbh));
} else {
        echo "ID number 5 has been successfully updated<br>";
    }


//xóa dữ liệu
    $id = 4; 
    // ID của Venus trong CSQL
    
    $sql_stmt = "DELETE FROM `my_contacts` WHERE `id` = $id"; 
    
    $result = mysqli_query($dbh,$sql_stmt); 
    
    if (!$result) {
        die("Deleting record failed: " . mysqli_error($dbh));
    } else {
        echo "ID number $id has been successfully deleted<br>";
    }
    

//hiển thị dữ liệu
    $sql_stmt = "SELECT * FROM my_contacts";
    
    $result = mysqli_query($dbh,$sql_stmt);
     
    if (!$result)     
        die("Database access failed: " . mysqli_error($dbh)); 
        
        $rows = mysqli_num_rows($result); 
    
    if ($rows) {
        while ($row = mysqli_fetch_array($result)) {         
            echo 'ID: ' . $row['id'] . '<br>';         
            echo 'Full Names: ' . $row['full_names'] . '<br>';        
            echo 'Gender: ' . $row['gender'] . '<br>';         
            echo 'Contact No: ' . $row['contact_no'] . '<br>';         
            echo 'Email: ' . $row['email'] . '<br>';         
            echo 'City: ' . $row['city'] . '<br>';         
            echo 'Country: ' . $row['country'] . '<br><br>';     
        } 
    } 

// Đóng kết nối CSDL
mysqli_close($dbh);
?>
