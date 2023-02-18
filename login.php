<?php  
 session_start();  
 $servername = "localhost";  
 $username = "root";  
 $password = "";  
 $db = "db_result";  
 $message = "";  
 try  
 {  
      $connect = new PDO("mysql:host=$servername; dbname=$db", $username, $password);  
      $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
      if(isset($_POST["login"]))  
      {  
           if(empty($_POST["username"]) || empty($_POST["password"]))  
           {  
                $message = '<label>All fields are required</label>';  
           }  
           else  
           {  
                $query = "SELECT * FROM login WHERE username = :username AND password = :password";  
                $statement = $connect->prepare($query);  
                $statement->execute(  
                     array(  
                          'username'     =>     $_POST["username"],  
                          'password'     =>     $_POST["password"]  
                     )  
                );  
                $count = $statement->rowCount();  
                if($count > 0)  
                {  
                     $_SESSION["username"] = $_POST["username"];  
                     header("location:menu.html");  
                }  
                else  
                {  
                    echo '<script>alert("invalid login")</script>';
                    echo '<script>window.location = "login.html"</script>';

                }  
           }  
      }  
 }  
 catch(PDOException $error)  
 {  
      $message = $error->getMessage();  
 }  
 ?>