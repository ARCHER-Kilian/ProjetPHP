 
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
<<<<<<< HEAD
=======
                <form methode='GET' action='index.php?action=readDescr'>
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a
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
                
<<<<<<< HEAD
                         </p> 

=======
                </form>       </p>
                </p>         
>>>>>>> 95eaae1f7ca617f4f9ec0ed2f12e79b4b9b0858a
                    <hr class='addtocart'>
                    <div class='add_cart'>
                    <a href='index.php?action=ajoutPanier&Aid=$id' name='cart' id='cart'>
                        <input id='addCart' type='submit' value='Add to Cart' name='cart' required>
                    </a>
                    </div>

                </p>
            </button>
            ";
        }
    ?>
    </div>  