<!DOCTYPE html>
<html lang="sv">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>SAJO WebDev - Home</title>
</head>

<body>
    <div class="header">
        <!--Navigationsmeny-->
        <?php include("topnav.php") ?>
        <!--bild mellan meny och innehåll-->
        <div class="headerpic"></div>
    </div>
    <br>
    <hr>
    <!--Sektion för erbjudande och kontaktformulär-->
    <div class="contactbox">
        <h1>Få en gratis konsultation</h1>
        <p>Kontakta oss via formuläret nedan!</p>
        <div class="contactform">
            <form id="form" name="form" method="post">
                <fieldset>
                    <legend>Kontaktformulär</legend>
                    <label for="name">Namn / Företag:</label>
                    <input type="text" name="name" id="name" placeholder="e.g. John Doe">
                    <br>
                    <br>
                    <label for="email">E-postadress:</label>
                    <input type="text" name="email" id="email" placeholder="johndoe@whatnot.com">
                    <br>
                    <br>
                    <label for="phone">Telefonnummer: </label>
                    <input type="text" name="phone" id="phone" placeholder=" +46">
                    <br>
                    <br>
                    <label for="meddelande">Meddelande:</label><br>
                    <textarea name="meddelande" id="meddelande" cols="30" rows="5" placeholder="Lämna ett meddelande..."></textarea>
                    <br>
                    <input type="submit" name="skicka" id="skicka" value="Skicka">
                    <input type="reset" name="nollstall" id="nollstall" value="Nollställ">
                </fieldset>
            </form>
        </div>
    </div>
    <br>
    <hr><br>
    <!--Presentation av arbetande på företaget-->
    <div class="presentationbox">
        <div class="ourjob">
            <h2>Vi gör vårt jobb, så att du får mer tid för ditt.</h2>
        </div>
        <h3>Det här är vi:</h3><br>
        <div class="profilebox">
            <div class="developer1">
                <p>
                    <img class="profilepic" src="images/profilbild.jpg" alt="profilbild johan"><br>
                    <br>Johan Hasserot - VD and other cool stuff
                </p>
            </div>
            <br>
            <div id="streck">
                <h2>---</h2>>
            </div><br>
            <div class="developer2">
                <p>
                    <img class="profilepic" src="images/julgran.jpg" alt="profilbild julgran"><br>
                    <br>Mr Christmas Tree - Subdeveloped
                </p>
            </div>
        </div>
    </div>
    <br>
    <hr><br>
    <!--Box med kontaktinfo-->
    <div class="visitinfobox">
        <div class="visitinfo">
            <b>Besök oss:</b><br><br>
            Fantasivägen 13<br>
            12 345, Fiktivryda<br><br>
            developers@sajowebdev.com<br>
            070 - 123 456 78<br>
        </div>
    </div>
    <br>
    <hr>
    <div>
        <footer>Copyright © 2022
            <address>
                SaJo WebDev <br>
            </address>
        </footer>
    </div>
    <!--JavaScript för att visa/dölja hamburgarmenyn-->
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