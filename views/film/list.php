<h1>Liste des films </h1>
<ul>
  <?php foreach ($datas as $data): ?>
    <li>
      <a href=<?= "/?page=film&action=detail&id=" . $data['id'] ?>><?= $data["titre"] ?></a>
    </li>
  <?php endforeach; ?>
</ul>