<?php

require_once "./vendor/autoload.php";

/**
 * ======================================================================
 * Variables
 * ======================================================================
 * - localhost:5000/?page=home
 * - localhost:5000/?page=home&action=list
 * - localhost:5000/?page=home&action=list&id=0
 * ======================================================================
 */
$_page = 'home' ?? "";
$_action = 'list';
$_id = false;


/**
 * ======================================================================
 * Check conditions $_GET["page"]
 * ======================================================================
 * Si le contenu de la variable $getPage qui correspond au contenu 
 * de $_GET["page"] après traitement, je check si il existe
 * dans le tableau $getPageValue.
 * 
 * si c'est le cas, je défini le résultat dans ma variable $_page.
 * sinon je défini dans $_page, "home".
 * ======================================================================
 * Dans l'URL : localhost/?page=film&action=list
 * ======================================================================
 */
if (isset($_GET['page']) && !empty($_GET['page'])) {

  $getPage = trim($_GET['page']);
  $getPageValue = ['film', 'serie', 'realisator'];

  // SOLUTION 1
  switch ($_GET['page']) {
    case "film":
      // localhost:5000/?page=film
      $_page = "film";
      break;

    case "serie":
      // localhost:5000/?page=serie
      $_page = "serie";
      break;

    case "realisator":
      // localhost:5000/?page=realisator
      $_page = "realisator";
      break;

    case "home":
    case "":
    default:
      // localhost:5000/
      // localhost:5000/?page=home
      $_page = "home";
      break;
  }

  // SOLUTION 2
  if (in_array($getPage, $getPageValue)) {
    // localhost:5000/?page=X
    $_page = $getPage;
  } else {
    // localhost:5000/
    $_page = 'home';
  }

  // SOLUTION 3
  $_page = (in_array($getPage, $getPageValue)) ? $getPage : 'home';
}

/**
 * ======================================================================
 * Check conditions $_GET["action"]
 * ======================================================================
 * à éditer
 * ======================================================================
 */
if (isset($_GET['action']) && !empty($_GET['action'])) {

  $getAction = trim(htmlspecialchars($_GET["action"]));
  switch ($getAction) {

    case 'detail':
      // localhost:5000/?page=film&action=detail
      $_action = "detail";
      break;

    case 'create':
      // localhost:5000/?page=film&action=create
      $_action = 'create';
      break;

    case 'bienvenue':
      // localhost:5000/?page=home&action=create
      $_action = 'bienvenue';
      break;
    
    case 'thanks':
      // localhost:5000/?page=home&action=thanks
      $_action = 'thanks';
      break;


    case 'list':
    default:
      // localhost:5000/?page=film&action=list
      $_action = "list";
      break;
  }
}

/**
 * ======================================================================
 * Check conditions $_GET["id"]
 * ======================================================================
 * à éditer
 * ======================================================================
 */
if (isset($_GET["id"]) && !empty($_GET["id"])) {
  // localhost:5000/?page=film&action=list&id=0
  $_id = trim(htmlspecialchars($_GET["id"]));
}

/**
 * =================================================
 * Check controller + new instance
 * =================================================
 */
$controller = "App\\controllers\\" . ucfirst(strtolower($_page)) . "Controller";
$page = new $controller;

// echo $_page . "<br /> ------------------ $_page";
// echo $_action . "<br /> ---------------- $_action";
// echo $controller . "<br /> ------------- $controller";
// $action = $page->$_action() . "<br /> -- $action";

// echo "<pre>";
// var_dump($_SERVER["REQUEST_URI"]);
// echo "</pre>";
// echo "<pre>";
// var_dump($_SERVER["QUERY_STRING"]);
// echo "</pre>";
// echo "<pre>";
// var_dump(parse_str($_SERVER["QUERY_STRING"], $paramURI));
// echo "</pre>";
// echo $paramURI['page'] . " --------- " . $paramURI['action']  . " --------- " . $paramURI['id'];


/**
 * =================================================
 * Check action if == detail
 * =================================================
 */
if ($_action == "detail") {
  $data = $page->$_action($_id);
} else {
  $datas = $page->$_action();
}

/**
 * =================================================
 * Return the page
 * =================================================
 */
include_once './views/partials/_header.php';
include_once './views/' . $_page . "/" . "$_action" . ".php";
include_once './views/partials/_footer.php';
