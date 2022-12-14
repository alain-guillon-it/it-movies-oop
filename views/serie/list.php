<h1>Liste des séries</h1>
<dl>
    <?php foreach($datas as $value ): ?>
        <dt><?= $value["titre"]; ?> - <small><?= $value["annee"]; ?></small></dt>
        <dd>
            <ul>
                <li>Saison: <?= $value["saison"]; ?></li>
                <li>Episodes: <?= $value["episodes"]; ?></li>
                <ol>
                    <?php for($i = 0; $i < count($value["genre"]); $i++): ?>
                        <li><?= $value["genre"][$i] ?></li>
                    <?php endfor; ?>
                </ol>
            </ul>
        </dd>
    <?php endforeach; ?>
</dl>
