<?php

$this->title = 'Accueil @ Site Artiste';
?><section style="margin:2% 10%";>

    <h1>Artiste Pablo Picasso</h1>

<section  class= "m-auto" style="width:30%">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
                  <img src="./image/Picasso.jpg" class="d-block w-100" alt="Picasso">
          </div>
          <div class="carousel-item">
                  <img src="./image/Picasso1.jpeg" class="d-block w-100" alt="Picasso1">
          </div>
          <div class="carousel-item">
                  <img src="./image/Picasso2.jpeg" class="d-block w-100" alt="Picasso2">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
  </div>
</section>

<section>

    <p>Pablo Ruiz Picasso, né à Malaga (Espagne) le 25 octobre 1881 <br>et mort le 8 avril 1973 à Mougins (Alpes-Maritimes, France)<br>, est un peintre, dessinateur, sculpteur et graveur espagnol1 ayant passé l'essentiel de sa vie en France.
    <br>Artiste utilisant tous les supports pour son travail, il est considéré comme le fondateur du cubisme avec Georges Braque et un compagnon d'art du surréalisme.<br>Il est l'un des plus importants artistes du xxe siècle, tant par ses apports techniques et formels que par ses prises de positions politiques.<br>Il a produit près de 50 000 œuvres dont 1 885 tableaux, 1 228 sculptures, 2 880 céramiques, 7 089 dessins, 342 tapisseries, 150 carnets de croquis<br> et 30 000 estampes (gravures, lithographies, etc.).<br>Parmi ses œuvres les plus célèbres figurent le proto-cubiste Les Demoiselles d'Avignon (1907) et Guernica (1937),<br> une représentation dramatique du bombardement de Guernica pendant la guerre civile espagnole.</section>
    
    <?php
        foreach ($lastExpo as $expo) :
            echo "<p><b>Nom de l'Expo</b> : ".$expo['nom']."</p>";

        endforeach; ?>

</section>
