<?php
session_start();
session_destroy();
echo'<script>';
echo'alert("You have been logged out.");';
echo 'window.location.href = "index.php";';
echo '</script>';
?>