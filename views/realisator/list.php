<h1>Réalisateur</h1>
<ul>
    <?php foreach ($datas as $data): ?>
    <li>
        <?= $data['fullname']; ?>
        <ol>
            <?php foreach($data['films'] as $film_id): ?>
                <li><?= $film_id; ?></li>
            <?php endforeach; ?>
        </ol>
    </li>
    <?php endforeach; ?>
</ul>