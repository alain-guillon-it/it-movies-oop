<h1>Liste des films </h1>
<ul>
  <?php 

  var_dump($datas["films"]);
  die;
    foreach ($datas["films"] as $data): 
  ?>
    <li>
      <a href=<?= "/?page=film&action=detail&id=" . $data['id'] ?>><?= $data["titre"] ?></a>
    </li>
  <?php endforeach; ?>
</ul>