<?
require_once("config.php");
require_once("session.php");

  $usrname = $_POST['usrname'];
  $psw = $_POST['psw'];
  $sql = "select * from user_information where UserName = '{$usrname}' and pw = '{$psw}'";
  $result = mysqli_query($conn, $sql);

  $row = mysqli_fetch_assoc($result);

  if ($row != null)
    {
        $_SESSION['is_login'] = true;
        $_SESSION['ses_userid'] = $row['UserName'];?>
        <script>
        window.alert('login sucess.');
        location.href='../index.php';
        </script>
    <?}

    else
    {?>
       <script>
        window.alert('login fail.');
        location.href='../index.php';
        </script>
    <?}



?>
