<?php

// print_r($_POST);
session_start();

include("../common/db.php");



if(isset($_POST['signup'])){
  

    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $address = htmlspecialchars($_POST['address']);

    $sql = "INSERT INTO users (username, email, password, address) VALUES ('$username', '$email', '$password', '$address')";
    $user->insert_id;

    if($conn->query($sql) === TRUE){
        // echo "User Registered Successfully!<br>";
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user->insert_id];
        header("location: ../index.php");
        exit();
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // echo "User Name is ".$_POST['username']."<br>";
    // echo "User Email is ".$_POST['email']."<br>";
    // echo "Password is ".$_POST['password']."<br>";
    // echo "Address is ".$_POST['address']."<br>";
}else if(isset($_POST['login'])){
    // print_r($_POST);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $username = "";
    $user_id = 0;

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
        foreach($result as $row){
            // print_r($row);
            $username = $row['username'];
            $user_id = $row['id'];
            // echo $username;
        }
        $_SESSION["user"] = ["username" => $username, "email" => $email, "user_id" => $user_id];
        header("location: ../index.php");
        exit();
    }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}else if(isset($_GET['logout'])){
    session_unset();
    header("location: ../index.php");
}
else if(isset($_POST['ask'])){


    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);
    $category_id = $_POST['category'];
    $user_id = $_SESSION['user']['user_id'];

    $sql = "INSERT INTO questions (title, description, category_id, user_id) VALUES ('$title', '$description', '$category_id', '$user_id')";

    if($conn->query($sql) === TRUE){
        header("location: ../index.php");
        exit();
    }else{
        echo "Question is Not Added To Website. Error: " . $sql . "<br>" . $conn->error;
    }

}else if (isset($_POST['answer'])){
    // print_r($_POST);

    $answer = htmlspecialchars($_POST['answer']);
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user']['user_id'];

    $sql = "INSERT INTO answers (id, answer, question_id, user_id) VALUES (NULL, '$answer', '$question_id', '$user_id')";

    if($conn->query($sql) === TRUE){
        header("location: ../index.php?q-id=$question_id");
        exit();
    }else{
        echo "Answer is Submitted. Error: " . $sql . "<br>" . $conn->error;
    }
    
}else if (isset($_GET["delete"])) {
    echo $qid= $_GET["delete"];
     $query= $conn->prepare("DELETE FROM `questions` WHERE `questions`.`id` = $qid");
     $result = $query->execute();
     if($result){
        header("location: /discuss");
     }else {
        echo "Question not deleted";
     }
}

$conn->close();
?>