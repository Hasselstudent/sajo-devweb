<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SAJO WebDev - About us</title>
</head>

<body>
    <div class="header">
        <!--Navigationsmeny-->
        <?php include("topnav.php") ?>
    </div>
    <!--bild mellan meny och innehåll-->
    <div class="headerpic"></div>

    <br>

    <div class="contentbox">
        <h1>Denna sida är under konstruktion...</h1><br>
    </div>

    <hr>

    <div>
        <footer>Copyright © 2022
            <address>
                SaJo WebDev <br>
            </address>
        </footer>
    </div>
    <script>
        function toggleNavLinks() {
            var x = document.getElementById("myDropdownLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
        }
    </script>
</body>

</html>