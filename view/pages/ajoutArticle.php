    <form method="post" action="index.php?action=created">
        <fieldset>
            <legend>MON FORMULAIRE A MOI :</legend>
            <p>
                <label for="id">ID </label> :
                <input type="text" placeholder="256AB4" name="idArt" id="idArt" required/>

                <label for="name">Name</label>
                <input type="text" placeholder="souri" name="name" id="name" required/>

                <label for="IMG">Lien de l'Image</label>
                <input type="text" placeholder="Jaune" name="IMG" id="IMG" required/>

                <label for="CAT">ID de Categorie</label>
                <input type="text" placeholder="Tours" name="CAT" id="CAT" required/>

                <label for="Prix">Prix</label>
                <input type="text" placeholder="14" name="Prix" id="Prix" required/>

                <label for="Desc">Decription</label>
                <input type="text" placeholder="Jaune avec ...." name="Desc" id="Desc" required/>
            </p>
            <p>
                <input type="submit" value="Envoyer" />
            </p>
        </fieldset>
    </form>