<?php

namespace Model;

class SerieModel extends MediaModel
{
  protected $datas = [
    [
      'titre' => 'Le caméléon',
      'annee' => 1996,
      'synopsis' => "Jarod est un caméléon humain qui peut devenir n'importe qui, et maîtriser sa profession. Lorsqu'il réalise qu'il est en fait un prisonnier, il s'échappe. Tout en essayant de trouver sa véritable identité, Jarod aide ceux qu'il rencontre.",
      'genre' => ["drame", "Policier", "Thriller"],
      'saison' => 4,
      "episodes" => 86
    ],
    [
      'titre' => 'X-Files',
      'annee' => 1993,
      'synopsis' => "Deux agents du FBI sont chargés d'enquêter sur les dossiers non résolus, appelés 'X-files' la plupart du temps des affaires où le paranormal entre en jeu. L'agent Fox Mulder, malgré le scepticisme de sa co-équipière Dana Scully, tente de prouver sa thèse du complot gouvernement/extra-terrestres... Fox Mulder n'aura de cesse de rechercher sa soeur disparue des années auparavant lorsqu'il avait 12 ans.",
      'genre' => ["Fantastique", "Policier"],
      'saison' => 11,
      "episodes" => 218
    ],
    [
      'titre' => 'the walking dead',
      'annee' => 2010,
      'synopsis' => "Après une apocalypse ayant transformé la quasi-totalité de la population en zombies, un groupe d'hommes et de femmes mené par l'officier Rick Grimes tente de survivre... Ensemble, ils vont devoir tant bien que mal faire face à ce nouveau monde devenu méconnaissable, à travers leur périple dans le Sud profond des États-Unis.",
      'genre' => ["Drame", "Epouvante-horreur"],
      'saison' => 11,
      "episodes" => 177
    ],
    [
      'titre' => 'BlackList',
      'annee' => 2019,
      'synopsis' => "Le criminel le plus recherché du monde se rend mystérieusement à la police et offre ses services en dénonçant tous ceux avec qui il a collaboré sur ses crimes par le passé. Sa seule contrepartie : travailler avec une agent du FBI débutante avec qui il n'a semble-t-il aucune connexion...",
      'genre' => ["Drame", "Policier", "Thriller"],
      'saison' => 10,
      "episodes" => 218
    ],
    [
      'titre' => 'love death + robots',
      'annee' => 2019,
      'synopsis' => "Un yaourt susceptible, des soldats lycanthropes, des robots déchaînés, des monstres-poubelles, des chasseurs de primes cyborgs, des araignées extraterrestres et des démons de l'enfer assoiffés de sang : tout ce beau monde est réuni dans 18 courts d'animation déconseillés aux âmes sensibles.",
      'genre' => ["Fantastique", "Science-fiction", "Animation"],
      'saison' => 3,
      "episodes" => 35
    ],
    [
      'titre' => 'The Big Bang Theory',
      'annee' => 2007,
      'synopsis' => "Leonard et Sheldon pourraient vous dire tout ce que vous voudriez savoir à propos de la physique quantique. Mais ils seraient bien incapables de vous expliquer quoi que ce soit sur la vie 'réelle', le quotidien ou les relations humaines... Mais tout va changer avec l'arrivée de la superbe Penny, leur voisine. Ce petit bout de femme, actrice à ses heures et serveuse pour le beurre, va devenir leur professeur de vie !",
      'genre' => ["Comédie"],
      'saison' => 12,
      "episodes" => 279
    ]
  ];
}
