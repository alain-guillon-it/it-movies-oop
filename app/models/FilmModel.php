<?php

namespace Model;

class FilmModel extends MediaModel
{
  protected $datas = [
    [
      "id" => 0,
      'titre' => 'Autant en emporte le vent',
      'annee' => 1950,
      'synopsis' => "En Georgie, en 1861, Scarlett O'Hara est une jeune femme fière et volontaire de la haute société sudiste. Courtisée par tous les bons partis du pays, elle n'a d'yeux que pour Ashley Wilkes malgré ses fiançailles avec sa douce et timide cousine, Melanie Hamilton. Scarlett est pourtant bien décidée à le faire changer d'avis, mais à la réception des Douze Chênes c'est du cynique Rhett Butler qu'elle retient l'attention...",
      'genre' => ["Drame", "Romance"],
      "duree" => 238 // 3h58min
    ],
    [
      "id" => 1,
      'titre' => 'braveheart',
      'annee' => 1995,
      'synopsis' => "Evocation de la vie tumultueuse de William Wallace, héros et symbole de l'indépendance écossaise, qui à la fin du XIIIe siècle affronta les troupes du roi d'Angleterre Edward I qui venaient d'envahir son pays.",
      'genre' => ["Biopic", "Drame"],
      "duree" => 165 // 2h45min
    ],
    [
      "id" => 2,
      'titre' => 'le dernier samaritain',
      'annee' => 1992,
      'synopsis' => "Après avoir cassé la figure d'un sénateur pervers, le séduisant agent de la CIA Joe Hallenbeck a été remercié et s'est reconverti en détective privé. Après l'assassinat de son meilleur ami, il prend sa place pour protéger la strip-teaseuse Cory. Mais, malgré ses efforts, elle est assassinée devant les yeux de son petit ami Jimmy Dix, un ancien champion de football qui a été limogé pour usage de stupéfiants. Bien qu'ils se détestent, les deux hommes font cause commune pour trouver l'assassin. .",
      'genre' => ["Drame", "Romance"],
      "duree" => 106 // 1h46min
    ],
    [
      "id" => 3,
      'titre' => 'Ace ventura, détective chiens et chats',
      'annee' => 1995,
      'synopsis' => "Ace Ventura, un jeune homme décontracté à la banane arrogante et à la démarche élastique, est le Sherlock Holmes de la gent canine. Le voici à nouveau sur les dents quand le dauphin Flocon de neige, la mascotte de l'équipe de football americain de Miami, manque à l'appel.",
      'genre' => ["Commédie"],
      "duree" => 90 // 1h30min
    ],
    [
      "id" => 4,
      'titre' => 'Demolition Man',
      'annee' => 1994,
      'synopsis' => "En 2032, à San Angeles, une mégalopole californienne où toute violence a été éradiquée, Simon Phoenix, un tueur psychopathe condamné à une longue peine d'hibernation et de rééducation, profite d'une visite médicale pour s'évader. Seul recours pour le neutraliser  : réanimer son ennemi de toujours : John Spartan, un policier surnommé 'Demolition Man', cryogénisé à titre de punition pour homicide par imprudence en 1996.",
      'genre' => ["Action", "Science-fiction"],
      "duree" => 115 // 3h58min
    ],
    [
      "id" => 5,
      'titre' => 'Minority report',
      'annee' => 2002,
      'synopsis' => "A Washington, en 2054, la société du futur a éradiqué le meurtre en se dotant du système de prévention / détection / répression le plus sophistiqué du monde. Dissimulés au coeur du Ministère de la Justice, trois extra-lucides captent les signes précurseurs des violences homicides et en adressent les images à leur contrôleur, John Anderton, le chef de la Précrime' devenu justicier après la disparition tragique de son fils. Celui-ci n'a alors plus qu'à lancer son escouade aux trousses du 'coupable'...
      Mais un jour se produit l'impensable : l'ordinateur lui renvoie sa propre image. D'ici 36 heures, Anderton aura assassiné un parfait étranger. Devenu la cible de ses propres troupes, Anderton prend la fuite. Son seul espoir pour déjouer le complot : dénicher sa future victime ; sa seule arme : les visions parcellaires, énigmatiques, de la plus fragile des Pré-Cogs : Agatha.",
      'genre' => ["Science-fiction"],
      "duree" => 145 // 2h25min
    ]
  ];
}