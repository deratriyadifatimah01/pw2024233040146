<?php 

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["password"] == "12345") {
        header("Location: admin.php");
        exit;
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bagian login</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 80vh;
            width: 80vh;
            color: black;
            margin: auto;
        }
        
        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-color: cornsilk;
            width: 80%;
            height: 80%;
            font-size: 1rem;
            font-family: Arial, Helvetica, sans-serif;
            border-radius: 50px;
        }

        h2 {
            color: black;
        }

        input {
            margin-top: 10px;
            border: 1px white solid;
            width: 200px;
            height: 35px;
            border-radius: 80px;
        }

        button {
            margin: 0 auto;
            margin-top: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            background-color: white;
            border-radius: 5px;
            padding: 10px;
            border: 1px solid black;
        }
        
        p {
            color: black;
        }

        .profile {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            background-image: url(img/toko.jpg);
            background-size: cover;
            background-position: center;
            border: 2px solid white;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <div class="content">
        <div class="profile"></div>
                <h2><i>Login Admin</i></h2>
            <?php if (isset($error)) : ?>
               <p>Username / Password Salah</p></h4>
            <?php endif; ?>
            <form action="" method = "post">
                <label for="username">Username :</label>
                <input type="text" name="username" id="username">
                <br>
                <label for="password">Password :</label>
                <input type="password" name="password" id="password">
                <br>
                <button type="submit" name="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>