<?php
$this->title ='Oeuvres Exposees @ Site Artiste';?>
<section>
          <h1>Expo Picasso :</h1>

            <a href='?action=oeuvre&id=<?=$oeuvre['id']?>'><img src="<?=$oeuvre['petiteImage']?>" alt="<?=$oeuvre['titre']?>"></a> 
            <?php
            echo "<h6>Titre : ".$oeuvre['id_oeuvre']."</h6>";
            echo "<p>Année : ".$oeuvre['prix']."</p>";
       ?>
</section>