<?php
require('../db.php');
$id = $_REQUEST['id'];
$query = "DELETE FROM log WHERE logid=$id";
$result = mysqli_query($con, $query) or die(mysqli_error());
header("Location: view.php");
