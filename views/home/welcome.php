<h1>IT-Movie</h1>

<p>
    Présentation d'une mediathèque personnel.
</p>

<!-- LES 3 DERNIERS FILMS -->
<article>
    <h2>Les 3 derniers films</h2>


    <pre>
        <?php // var_dump($datas["films"]) ?>
    </pre>
    <pre>
        <?php // var_dump($datas["series"]) ?>
    </pre>
    <pre>
        <?php // var_dump($datas["realisators"]) ?>
    </pre>

    <section>
        <?php 
            $lastThreeMovies = array_reverse(array_slice($datas["films"], 3));
            for( $i = 0; $i < count($lastThreeMovies); $i++ ): 
        ?>
            <a href=<?= "/?page=film&action=detail&id=". $lastThreeMovies[$i]["id"] ?>>
                <figure>
                    <img src=<?= $lastThreeMovies[$i]["cover"]; ?> alt=<?= "representation du film: " . $lastThreeMovies[$i]["titre"]; ?> />
                    <figcaption><?= $lastThreeMovies[$i]["titre"]; ?></figcaption>
                </figure>
            </a>
        <?php endfor; ?>
    </section>

    <footer>
        <a href="">Découvre vite les X films en ma possession</a>
    </footer>
</article>

<!-- LES 3 DERNIERES SERIES -->
<article>
    <h2>Les 3 dernières séries</h2>

    <section>
        <?php
            $lastThreeSeries = array_reverse(array_slice($datas["series"], 3));
            for ($i = 0; $i < count($lastThreeMovies); $i++):
        ?>
        
        <a href=<?= "/?page=serie&action=detail&id=". $lastThreeSeries[$i]["id"] ?>>
            <figure>
                <img src=<?= $lastThreeSeries[$i]["cover"] ?> alt=<?= "representation de la série: " . $lastThreeSeries[$i]["titre"]; ?> />
                <figcaption><?= $lastThreeSeries[$i]["titre"]; ?></figcaption>
                <span class="bull bull--saisons"><?= $lastThreeSeries[$i]["saisons"]; ?> Saisons</span>
                <span class="bull bull--episodes"><?= $lastThreeSeries[$i]["episodes"]; ?> Eps</span>
            </figure>
        </a>

        <?php endfor; ?>
    </section>

    <footer>
        <a href="">Découvre vite les X séries en ma possession</a>
    </footer>
</article>

<!-- LES 3 DERNIERS ANIMES -->
<article>
    <h2>Les 3 derniers animes</h2>

    <section>
        <figure>
            <img src="" alt="" />
            <figcaption>Titre 1</figcaption>
            <span class="bull bull--saisons">4 Saisons</span>
            <span class="bull bull--episodes">85 Eps</span>
        </figure>

        <figure>
            <img src="" alt="" />
            <figcaption>Titre 2</figcaption>
            <span class="bull bull--saisons">4 Saisons</span>
            <span class="bull bull--episodes">85 Eps</span>
        </figure>

        <figure>
            <img src="" alt="" />
            <figcaption>Titre 3</figcaption>
            <span class="bull bull--saisons">4 Saisons</span>
            <span class="bull bull--episodes">85 Eps</span>
        </figure>
    </section>

    <footer>
        <a href="">Découvre vite les X animes en ma possession</a>
    </footer>
</article>

<!-- LES 3 DERNIERS MANGAS -->
<article>
    <h2>Les 3 derniers mangas</h2>

    <section>
        <figure>
            <img src="" alt="" />
            <figcaption>Titre 1</figcaption>
            <span class="bull bull--tomes">26 tomes</span>
        </figure>

        <figure>
            <img src="" alt="" />
            <figcaption>Titre 2</figcaption>
            <span class="bull bull--tomes">26 tomes</span>
        </figure>

        <figure>
            <img src="" alt="" />
            <figcaption>Titre 3</figcaption>
            <span class="bull bull--tomes">26 tomes</span>
        </figure>
    </section>

    <footer>
        <a href="">Découvre vite les X mangas en ma possession</a>
    </footer>
</article>

<!-- LES 3 DERNIERS REALISATEURS -->
<article>
    <h2>Les 3 derniers realisateurs</h2>

    <section class="gallery gallery--realisator">
        <figure>
            <img src="" alt="" />
            <figcaption>Titre 1</figcaption>
        </figure>

        <figure>
            <img src="" alt="" />
            <figcaption>Titre 2</figcaption>
        </figure>

        <figure>
            <img src="" alt="" />
            <figcaption>Titre 3</figcaption>
        </figure>
    </section>

    <footer>
        <a href="">Découvre vite les X mangas en ma possession</a>
    </footer>
</article>