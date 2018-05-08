<?php
    $email = test_input($_POST["email"]);
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
       }
// if(empty($_POST["email"])){
//     echo "Email is required";
//   }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
       die(header("HTTP/1.0 404 Not Found"));
    }
    if ((filter_var($email, FILTER_VALIDATE_EMAIL))) {

    $fp = fopen('C:\Vaimo-task-2018\Vaimo\public\newsletter\subscribe', 'w');
    fwrite($fp, json_encode($_POST['email']));
    fclose($fp);
}
?>

