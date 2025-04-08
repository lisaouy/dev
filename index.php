
<?php
  $title="WeatherApp";
  require "include/header.inc.php";
  require "include/functions.inc.php";
  setWeatherBackground();

?>


<section>
    <h1>WeatherApp</h1>
    <p>Bienvenue sur notre site dédié à la météo en France. En un clic, découvrez le temps qu’il fait dans chaque ville. En espérant que le soleil soit au rendez-vous !</p>
    <nav>
        <ul class="navIndex">
            <li><a href="#meteoJour">Consultez la méteo du jour selon votre position</a></li>
            <li><a href="#imageRandom">Découvrez nos images</a></li>
        </ul>
    </nav>
</section>



<section id="meteoJour">
  <?php echo getCurrentLocationMeteo();?>
  <?php echo getWeekLocationMeteo();?>
</section>

<aside class="random-image" id="imageRandom">
    <?php 
    $image = getRandomImage();
    if ($image !== false): ?>
        <figure>
            <img src="<?= htmlspecialchars($image['chemin']) ?>" 
                alt="Météo <?= htmlspecialchars(str_replace('-', ' ', $image['nom'])) ?>">
            <figcaption><?= htmlspecialchars(str_replace('-', ' ', $image['nom'])) ?></figcaption>
        </figure>
    <?php else: ?>
        <div class="image-error">
            <p>Aucune image disponible</p>
            <small>Veuillez ajouter des images dans le dossier</small>
        </div>
    <?php endif; ?>
</aside>




<?php

  require "include/footer.inc.php"
?>
