<?php
    // landing/index page
  include("../controllers/customer-controller.php");

  if (isset($_POST['submit'])) {
    $name= $_POST['customer_name'];
    $email= $_POST['customer_email'];
    $password= $_POST['customer_pass'];
    $country= $_POST['customer_country'];
    $city= $_POST['customer_city'];
    $contact=$_POST['customer_contact'];
    $image=$_POST['customer_image'];
    $user_role = 2;

    $registering= insert_ctr($name, $email, $password, $country, $city, $contact,$image, $user_role);
    if($registering){
    echo "Sucessfully registered a new customer.";
    // now redirects to the login page
    header("Location: login.php");

  } else{
    echo "Registration was unsuccessful";
  }

}
?>