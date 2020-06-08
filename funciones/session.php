<?php
 session_start(); 
 require_once 'dbcon.php';
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['id']) || (trim($_SESSION['id']) == '')) { ?>
<script>
window.location = "index.php";
</script>
<?php
}
$id=$_SESSION['id'];

?>