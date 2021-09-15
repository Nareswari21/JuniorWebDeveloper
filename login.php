<html>

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Lembaga Sertifikasi Profesi</title>
    <link rel="stylesheet" href="assets/stylelogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>

<body>
    <div class="wrapper fadeInDown">
        <div id="formContent">

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="assets/image/logo2.png" id="icon" alt="User Icon" />
            </div>

            <!-- Login Form -->
            <form method="post" action="loginProses.php" autocomplete="off">
                <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
                <input type="text" id="password" class="fadeIn third" name="password" placeholder="password">
                <div class="g-recaptcha" data-sitekey="6LchzuIbAAAAALe_rXlImym6wEZv9yMqVyyd3kHR"></div>
                <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
            </form>

        </div>
    </div>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>