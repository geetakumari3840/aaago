<?php
@session_start();
session_destroy();
header("location: /adjnoida/index.php");
?>