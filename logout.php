<?php
session_start();
session_destroy();

header("Location: assigment.html");
exit();
?>