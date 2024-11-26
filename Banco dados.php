<?php
  session_start();

if($_SERVER ["REQUEST_METHOD"] == "POST"){
  $name = $_POST['name'];
  $password = $_POST['password'];
}
