<?php

session_start();

require_once 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(empty($email) || empty($password))
    {
        header("Location: login.php?error=empty");
        exit();
    }

    try
    {

        $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");

        $stmt->bindParam(":email",$email);

        $stmt->execute();

        if($stmt->rowCount() == 1)
        {

            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if(password_verify($password,$user['password']))
            {

                $_SESSION['user_id'] = $user['id'];
                $_SESSION['name'] = $user['name'];
                $_SESSION['email'] = $user['email'];    
                $_SESSION['roll_no'] = $user['roll_no'];  

                header("Location: dashboard.php");
                exit();

            }
            else
            {

                header("Location: login.php?error=invalid");
                exit();

            }

        }
        else
        {

            header("Location: login.php?error=invalid");
            exit();

        }

    }
    catch(PDOException $e)
    {

        die("Database Error : ".$e->getMessage());

    }

}
else
{

    header("Location: login.php");
    exit();

}