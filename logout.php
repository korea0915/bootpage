<? require_once("lib/session.php");
   session_destroy();
?>
<script>
window.alert('logout suscess.');
location.href='index.php';
</script>
