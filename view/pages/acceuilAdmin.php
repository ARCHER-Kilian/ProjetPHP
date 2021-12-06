<div class="admin">
	<a href="index.php?action=deleteArticle" class="block">Enlever un article</a>
	<br>
	<br>
	<a href="index.php?action=ajoutArticle" class="block">Ajouter un article</a>
</div>
    <style>
        <?php
            include'CSS/main.css';
            include'CSS/footer.css';
            include'CSS/header.css';
        ?>
    </style>
    <?php
        echo "<p> Liste des Articles : </p>";
    ?>
    <div class="listeArticle">
    <?php
        foreach ($tab_a as $a){
        $n = htmlspecialchars($a -> getName());
        $i = htmlspecialchars($a -> getImage());
        $d = htmlspecialchars($a -> getDescr());
        $p = htmlspecialchars($a -> getPrix());
        $id = htmlspecialchars($a -> getID());
        echo "
            <button class='btn'>
                <p>
                    <a href='index.php?action=readDescr&id=$id' id='detail' name='detail'>
                        <img class=imageArticle src='$i'>
                        <div class='name'>
                            $n
                        </div>
                    </a>
                        <div class='prix'>
                            $p €
                        </div>
                    <p>
                        $d
                    </p>
                </p>         
                    <hr class='addtocart'>
                    <div class='add_cart'>
                    <a href='index.php?action=ajoutPanier'>
                        <input id='addCart' type='submit' value='Add to Cart' required>
                    </a>
                    </div>
            </button>
            ";
        }
    ?>
    </div>