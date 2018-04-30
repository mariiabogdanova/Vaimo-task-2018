<?php
// $emailtext = $_POST["email"];
$email = test_input($_POST["email"]);
  	function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
     }

if(empty($_POST["email"])){
// if (empty($email)) {
    echo "Email is required";
    // echo "MEoW";
    // echo 
    // '<style type="text/css">
    // 	#subscribtion_loading{
    // 	display:none; }

    //     #subscribtion_failed {
    //         display: block; }
    //     </style>';
  } else {

 }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format"; 

     
    //   <script>
    //     $( '#subscribtion_loading' ).css('display': 'none');
    //     $( '#subscribtion_failed' ).css('display': 'block');
    // </script>


      
  

    $fp = fopen('C:\Vaimo-task-2018\Vaimo\public\newsletter\subscribe', 'w');
    fwrite($fp, json_encode($_POST['email']));
    fclose($fp);
}
?>

