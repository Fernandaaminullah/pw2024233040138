<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Yanone+Kaffeesatz&display=swap" rel="stylesheet">

    <style>
         * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        
        body {
            background-color: white;
        }

        .container {
            display: flex;
            justify-content: center;
            flex-direction: column;
            gap: 50px;
            align-items: center;
            height: 100vh;
            width: 100%;
            color: #EEC4DC;
            font-family: "Caveat", cursive;
            font-weight: 700;
            font-size: 50px;
            background-color: #4B0082;
            background-image: linear-gradient(to top left, #EE82EE, #8806CE)
        }

        a {
           text-decoration: none;
           color: #1C0039; 
        }

        span {
            color: white;
        }
        

        </style>
</head>
<body>
    
    <div class="container">
        <h1>Selamat Datang, Admin!</h1>   
        <span>Mo keluar lagi?<a href="login.php"> Click Here!</a></span>
</div>
    
</body>
</html>