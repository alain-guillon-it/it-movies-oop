<h1><?= $data["titre"] ?> - <small><?= $data['annee'] ?></small></h1>
<section>
  <img src=<?= $data["cover"] ?> alt="info" />
  <div>
    <p><?= $data["synopsis"] ?></p>
    <h2>Genre</h2>
    <ul>
      <?php for( $i = 0; $i < count($data["genre"]); $i++ ): ?>
        <li><?= $data["genre"][$i] ?></li>
      <?php endfor; ?>
    </ul>
    <a href="/?page=film&action=list">Retour sur la liste des films</a>
  </div>
</section>

