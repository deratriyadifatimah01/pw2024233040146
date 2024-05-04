<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bagian admin</title>
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
            height: 50vh;
            width: 50%;
            color: black;
            margin: auto;
            
        }
        
        .content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 20px;
            text-align: center;
            background-color: cornsilk;
            width: 75%;
            height: 85%;
            font-size: 1.5rem;
            font-family: "Teko", sans-serif;
            border-radius: 30px;
        }

        button {
            font-size: 1rem;
            background-color: white;
            border-radius: 50px;
            padding: 10px;
            border: 1px solid black;
            width: 100px;
            cursor: pointer;
        }

        a {
            text-decoration: none;
            color: black;
        }  

    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <h2>Selamat datang Admin</h2>        
            <button><a href="login.php">Logout</a></button>
        </div>
    </div>
</body>
</html>