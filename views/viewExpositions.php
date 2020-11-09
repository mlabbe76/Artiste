<?php
$this->title='Expositions @ Site Artiste';?>
<section>
    <h1>Les Expositions Picasso</h1>
    <img src="./image/HallExpo.jpg" alt="Picasso" style='width:30%'>
    
    <?php
        foreach ($AllExpo as $expos):
        echo "<h5>Nom de l'expo : ".$expos['nom']."</h5>";
        echo "<p>Lieu de l'expo : ".$expos['lieu']."</p>";
        echo "<p>Adresse : ".$expos['adresse']."</p>";
        echo "<p>Date Vernissage : ".$expos['dateVernissage']."</p>";
        endforeach; ?>
</section>