<?php
$this->title ='Oeuvres @ Site Artiste';?>
<section>
    <h1>Les Oeuvres Picasso :</h1>
    <?php
        foreach ($AllOeuvres as $oeuvre) :?>
            <a href='?action=oeuvre&id=<?=$oeuvre['id']?>'><img src="<?=$oeuvre['petiteImage']?>" alt="<?=$oeuvre['titre']?>"></a> 
            <?php
            echo "<h6>Titre : ".$oeuvre['titre']."</h6>";
            echo "<p>Année : ".$oeuvre['annee']."</p>";
            echo "<p>Prix : ".$oeuvre['prix']."€</p>";
        endforeach; ?>
</section>