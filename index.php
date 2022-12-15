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
$_action = 'welcome' ?? "";
$_id = false;


/**
 * ======================================================================
 * Check conditions $_GET["page"]
 * ======================================================================
 * PAGES possible : film, serie, anime, manga, realisator, author
 * 
 *    localhost/?page=film
 *    localhost/?page=serie
 *    localhost/?page=anime
 *    localhost/?page=manga
 *    localhost/?page=realisator
 *    localhost/?page=author
 * 
 * SINON redirection vers error404
 * 
 * ======================================================================
 */
if (isset($_GET['page']) && !empty($_GET['page'])) {

  $getPage = trim($_GET['page']);
  $getPageValue = ['film', 'serie', 'anime', 'manga', 'realisator'];

  // SOLUTION 1
  switch ($getPage) {

    // localhost:5000/?page=film
    case "film":
      $_page = "film";
      break;

    // localhost:5000/?page=serie
    case "serie":
      $_page = "serie";
      break;

    // localhost:5000/?page=anime
    case "anime":
      $_page = "anime";
      break;

    // localhost:5000/?page=manga
    case "manga";
      $_page = "manga";
      break;

    // localhost:5000/?page=realisator
    case "realisator":
      $_page = "realisator";
      break;

    // localhost:5000/
    // localhost:5000/?page=home
    case "home":
    case "":
    default:
      $_page = "home";
      break;
  }

  // // SOLUTION 2
  // if (in_array($getPage, $getPageValue)) {
  //   // localhost:5000/?page=X
  //   $_page = $getPage;
  // } else {
  //   // localhost:5000/
  //   $_page = 'home';
  // }

  // SOLUTION 3
  // $_page = (in_array($getPage, $getPageValue)) ? $getPage : 'home';
} else {
  header("Location : /");
}

/**
 * ======================================================================
 * Check conditions $_GET["action"]
 * ======================================================================
 * ACTIONS possible : welcome, detail, thanks, list
 * ======================================================================
 */
if (isset($_GET['action']) && !empty($_GET['action'])) {

  $getAction = trim(htmlspecialchars($_GET["action"]));
  $checkAction = ["welcome", "detail", "thanks", "list"];

  /**
   * ======================================================================
   * 
   * ACTION (detail) Routes possible : 
   * 
   *    localhost/?page=film&action=detail
   *    localhost/?page=serie&action=detail
   *    localhost/?page=anime&action=detail
   *    localhost/?page=manga&action=detail
   *    localhost/?page=realisator&action=detail
   *    localhost/?page=author&action=detail
   * 
   * ACTION (thanks) Routes possible : 
   * 
   *    localhost/?page=film&action=thanks
   *    localhost/?page=serie&action=thanks
   *    localhost/?page=anime&action=thanks
   *    localhost/?page=manga&action=thanks
   *    localhost/?page=realisator&action=thanks
   *    localhost/?page=author&action=thanks
   *
   * ACTION (list) Routes possible : 
   * 
   *    localhost/?page=film&action=list
   *    localhost/?page=serie&action=list
   *    localhost/?page=anime&action=list
   *    localhost/?page=manga&action=list
   *    localhost/?page=realisator&action=list
   * 
   * ACTION (welcome) Routes possible : DEFAULT
   * 
   *    localhost/?page=film&action=welcome
   *    localhost/?page=serie&action=welcome
   *    localhost/?page=anime&action=welcome
   *    localhost/?page=manga&action=welcome
   *    localhost/?page=realisator&action=welcome
   *    localhost/?page=author&action=welcome
   * 
   * ======================================================================
   */
  $_action = (in_array($getAction, $checkAction)) ? $getAction : 'welcome';
}

/**
 * ======================================================================
 * Check conditions $_GET["id"]
 * ======================================================================
 * 
 * ACTION (id) Routes possible : (par défaut false === 0)
 * 
 *    localhost/?page=film&action=list&id=0
 *    localhost/?page=serie&action=list&id=0
 *    localhost/?page=anime&action=list&id=0
 *    localhost/?page=manga&action=list&id=0
 *    localhost/?page=realisator&action=list&id=0
 * 
 *    localhost/?page=film&action=detail&id=0
 *    localhost/?page=serie&action=detail&id=0
 *    localhost/?page=anime&action=detail&id=0
 *    localhost/?page=manga&action=detail&id=0
 *    localhost/?page=realisator&action=detail&id=0
 * 
 * ======================================================================
 */
if (isset($_GET["id"]) && !empty($_GET["id"])) {
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
