<?php include("includes/header.php"); ?>
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
<?php include("includes/footer.php"); ?>