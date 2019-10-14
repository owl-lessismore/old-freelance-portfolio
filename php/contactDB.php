<!-- Insert To Database Contacts -->
<?php
    $servername = "localhost";
    $username = "id10929077_root";
    $password = "password";
    $dbname = "id10929077_my_port";
    
    $conn = mysqli_connect($servername,$username,$password,$dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $con_fullname = $_POST['fullname'];
    $con_email = $_POST['email'];
    $con_message = $_POST['message'];

    $query = "Insert into tbl_contact(Name,Email,Message) values ('$con_fullname','$con_email','$con_message')";
    $res = mysqli_query($conn,$query);
    if($res){
        echo "<script> window.location.href='../html/contact.php';
        alert('Messege Sent');
        </script>";    
    }
?>