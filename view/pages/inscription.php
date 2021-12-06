<<<<<<< HEAD
<form method ="POST" action="index.php?action=createdU" style="border:1px solid #ccc">
   <fieldset>
      <div class="container">
        <br>
        <h1>Sign Up</h1>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <div>
            <label for="psw"><b>Identifiant</b></label>
            <input type="text" placeholder="Identifiant" name="id" id="id" required>
        </div>
        <br>
        <div>
            <label for="email"><b>Nom</b></label>
            <input type="text" placeholder="Jack" name="nom" id="nom" required>
        </div>
        <br>
        <div>
            <label for="email"><b>Prenom</b></label>
            <input type="text" placeholder="Frost" name="prenom" id="prenom" required>
        </div>
        <br>
        <div>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
        </div>
        <br>
        <div>
            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="badzvjnvo" name="mdp" id="mdp" required>
        </div>
        <br>
        <div>
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="mdp-repeat" id="mdp-repeat" required>
        </div>
        <br>
        <div>
            <label for="psw"><b>Numero de tel</b></label>
            <input type="text" placeholder="0766789880" name="numtel" id="numtel" required>
        </div>
        <br>
        <div>
            <label for="psw"><b>Adresse Postale</b></label>
            <input type="text" placeholder="NY 22 ave" name="adpo" id="adpo" required>
        </div>
        <br>
        <div>
            <input type="checkbox" name="remember" 

        <?php if (isset($_COOKIE["id"]) && isset($_COOKIE["password"])){echo "checked";}?>>
          Remember me
        </div>
        <br>
        <p>Vous accepter nos conditions quand vous vous creez un compte<a href="index.php?action=TOC" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <br>
        <div class="clearfix">

          <input type="submit" value="Signe In" class="block" />
          <br>
          <a href="index.php?action=readAllArticle" class="block"type="button" class="cancelbtn">Cancel</a>
        </div>
      </div>
      <br>
   </fieldset>
</form>
=======
<form method ="POST" action="index.php?action=createdU" style="border:1px solid #ccc">
   <fieldset>
      <div class="container">
        <br>
        <h1>Sign Up</h1>
        <br>
        <br>
        <hr>
        <br>
        <br>
        <div>
            <label for="psw"><b>Identifiant</b></label>
            <input type="text" placeholder="Identifiant" name="id" id="id" required>
        </div>
        <br>
        <div>
            <label for="email"><b>Nom</b></label>
            <input type="text" placeholder="Jack" name="nom" id="nom" required>
        </div>
        <br>
        <div>
            <label for="email"><b>Prenom</b></label>
            <input type="text" placeholder="Frost" name="prenom" id="prenom" required>
        </div>
        <br>
        <div>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" id="email" required>
        </div>
        <br>
        <div>
            <label for="psw"><b>Mot de passe</b></label>
            <input type="password" placeholder="badzvjnvo" name="mdp" id="mdp" required>
        </div>
        <br>
        <div>
            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="mdp-repeat" id="mdp-repeat" required>
        </div>
        <br>
        <div>
            <label for="psw"><b>Numero de tel</b></label>
            <input type="text" placeholder="0766789880" name="numtel" id="numtel" required>
        </div>
        <br>
        <div>
            <label for="psw"><b>Adresse Postale</b></label>
            <input type="text" placeholder="NY 22 ave" name="adpo" id="adpo" required>
        </div>
        <br>
        <div>
            <input type="checkbox" name="remember" 

        <?php if (isset($_COOKIE["id"]) && isset($_COOKIE["password"])){echo "checked";}?>>
          Remember me
        </div>
        <br>
        <p>Vous accepter nos conditions quand vous vous creez un compte<a href="index.php?action=TOC" style="color:dodgerblue">Terms & Privacy</a>.</p>
        <br>
        <div class="clearfix">

          <input type="submit" value="Signe In" class="block" />
          <br>
          <a href="index.php?action=readAllArticle" class="block"type="button" class="cancelbtn">Cancel</a>
        </div>
      </div>
      <br>
   </fieldset>
</form>
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a
