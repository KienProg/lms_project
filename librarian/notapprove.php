<?php
  include "connection.php";
  $id = $_GET["id"];
  mysqli_query($link,"update student_registration set status='no' where id=$id");

?>

<script>
  window.location = "display_student_info.php";
</script>