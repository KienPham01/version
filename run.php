<?php
  
  require 'Model/Database.php';
  $name = $_POST['name'];
  $phonenumber = $_POST['phonenumber'];
  $email = $_POST['emailadress'];
  $district = $_POST['district'];
  $province = $_POST['province'];
  $dt = new saveCustomer();
  $dt->enterCustommer($name,$phonenumber,$email,$district,$province);
    $dt->saveCustomer();

  ?>