<?php
    // Database connection
    $conn = mysqli_connect('localhost:3307','root','','minor-project-ii');
    if(isset($_POST['sb'])){
        $rate = $_POST['rate'];
        $gender = $_POST['gender'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $FeedBack = $_POST['FeedBack'];
        $query = "INSERT INTO feedback(rate, gender, firstname, lastname, email, phone,Feedback) VALUES('$rate','$gender','$firstname','$lastname','$email','$phone','$FeedBack')";
        $run = mysqli_query($conn,$query);

        header("Location: index.html");
        exit;
    }
?>