<?php
include 'day_count_test.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "completame";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// $insert_sql = "INSERT INTO test(texto)
// VALUES ('texto de prueba')";

// if ($conn->query($insert_sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

$select_sql = "
SELECT * FROM `test`
";

$result = $conn->query($select_sql);

?>

<!DOCTYPE html>
<html>
<?php include("head.php") ?>
<body>

<div id="content" class = "">

</div>
    
<form>
</form>

<?php

echo count_days_since('2019-1-0');

echo "<div id='comment-box'>";
foreach ($result as $row) {
    echo <<<ROW
     <div class=row>
        <div> {$row['id']} </div> 
        <div> {$row['texto']} </div> 
        <div> <button type="">vote up</button> </div> 
        <div> <h4>10</h4> </div> 
     </div> 
ROW;
}
echo "</div>"
?>


</body>
</html>

<?php
$conn->close();
?>