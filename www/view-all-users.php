
<?php $uname='uname'?>

<?php
    session_start();
    require('config.php');
    require('db.php');
    // $uname=$_SESSION['uname'];


    // if(!$_SESSION['uname']){
    //     header("location:login.php?session=notset");
    // }
?>


<?php
    // include 'Database_1/db.php';
    require('config.php');
    //session_start();


    // Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



    $current_user = $_SESSION['uuid'];

    $sql = "SELECT * FROM Users WHERE uname != '$current_user' order by id desc";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<table><tr><th>All users</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["name"]." ".$row["lname"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
