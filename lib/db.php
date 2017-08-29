<?
require_once("config.php");


$id = $_POST[id];
$Name =$_POST[usrname];
$Email = $_POST[email];
$pw = $_POST[psw];

$sql = "insert into user_information (UserNumber, UserName, Email, pw)
VALUES ('$id', '$Name', '$Email', '$pw')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>

<script>
window.alert('sucess.');
location.href='../index.php';
</script>