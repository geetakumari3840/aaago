<?php
$conn = new mysqli("root","root","") or die (mysqli_connect_error());
mysqli_select_db($conn, "admissionform") or die (mysqli_connect_error());
?>