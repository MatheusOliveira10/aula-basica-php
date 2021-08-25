<?php
require "controller/AdocaoController.php";
require_once "model/query.php";

$pagina = explode('/', $_SERVER['REQUEST_URI']);

if(isset($pagina[2])) {
  $url = $pagina[1] . '/' . $pagina[2];
} else {
  $url = $pagina[1];
}

$adocao = new AdocaoController();

switch ($url) {
  case "":
  $adocao->index();
  break;

  default:
  $adocao->index();
  break;
}
