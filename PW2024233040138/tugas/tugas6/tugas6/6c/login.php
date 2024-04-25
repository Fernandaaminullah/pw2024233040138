<?php
// cek apakah tombol submit sudah tekan atau belum
if( isset($_POST["submit"]) ) {


    // cek username $ password
    if( $_POST["username"] == "admin" && $_POST["password"] ==
        "12345678" ) {
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    // jika salah, tampilkan pesan kesalahan
        $error = true;
    }
}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

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
            height: 100vh;
            width: 100%;
            color: white;
            background-color: #4B0082;
            background-image: linear-gradient(to top left, #EE82EE, #8806CE)

        }

        .content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: auto;
            background-image: linear-gradient(to bottom left, #4B0082, #9400D3);
            width: 30%;
            height: 80%;
            border-radius: 20px;
        }

        h1 {
            color: white;
            margin-bottom: 50%;
            font-family: "Yanone Kaffeesatz", sans-serif;
            font-size: 60px;
            
        }

        svg {
            scale: 8;
            position: absolute;
            margin-top: -50px;
            margin-right: 6px;
            fill: #330066;
            justify-content: center;
            align-items: center;
        }

        input {
            margin-top: 10px;
            border: 2px solid black;
            width: 220px;
            height: 25px;
        }

        button {
                
            position: relative;
            display: inline-flex;
            font-size: 15px;
            color: rgb(241, 221, 197);
            align-items: center;
            justify-content: center;
            font-weight: 600;
            text-decoration: none;
            width: 100px;
            height: 40px;
            background-color: #330066;
            border-radius: 7px;
            margin-top: 10px;
            transition: .2s;
            cursor: pointer;
            font-family: "Yanone Kaffeesatz", sans-serif;
            font-size: 23px;

        }

        button:hover {
            background-color: #1C0039;
        }

        p {
            color: red;
        }

        form li {
            list-style-type: none;
            font-family: "Yanone Kaffeesatz", sans-serif;
            font-size: 30px;
        }

        form input {
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
    <h1>Login Admin</h1>
    <!-- <img src="img/profile_picture.png" alt=""> -->
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 22c-3.123 0-5.914-1.441-7.749-3.69.259-.588.783-.995 1.867-1.246 2.244-.518 4.459-.981 3.393-2.945-3.155-5.82-.899-9.119 2.489-9.119 3.322 0 5.634 3.177 2.489 9.119-1.035 1.952 1.1 2.416 3.393 2.945 1.082.25 1.61.655 1.871 1.241-1.836 2.253-4.628 3.695-7.753 3.695z"/></svg>
    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah!</p>
    <?php endif; ?>
    <ul>
    <form action="" method="post">


    <li>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </li>
    <li>
        <label for="password">Password  :</label>
        <input type="password" name="password" id="password"> 
    </li>
    <li>
        <button type="submit" name="submit">Login</button>
    </li>

    </form>
    </ul>
        </div>
    </div>

</body>
</html>