<h1><?= $data["titre"] ?> - <small><?= $data['annee'] ?></small></h1>
<img src="https://via.placeholder.com/250" alt="info" />
<p><?= $data["synopsis"] ?></p>
<h2>Genre</h2>
<ul>
  <?php for( $i = 0; $i < count($data["genre"]); $i++ ): ?>
    <li><?= $data["genre"][$i] ?></li>
  <?php endfor; ?>
</ul>
