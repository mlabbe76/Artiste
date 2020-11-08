<?php
$this->title ='Oeuvres @ Site Artiste';?>
<section>
          <h1>Oeuvre Picasso :</h1>

            <a href='?action=oeuvre&id=<?=$oeuvre['id']?>'><img src="<?=$oeuvre['grandeImage']?>" alt="<?=$oeuvre['titre']?>"></a> 
            <?php
            echo "<h6>Titre : ".$oeuvre['titre']."</h6>";
            echo "<p>Année : ".$oeuvre['annee']."</p>";
            echo "<p>Prix : ".$oeuvre['prix']."€</p>";
       ?>
</section>