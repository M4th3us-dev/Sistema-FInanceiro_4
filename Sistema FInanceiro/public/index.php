<?php
require_once '../config/db.php';
require_once '../Controllers/Categoriacotroller.php';
require_once '../ProdutoController.php';
require_once './Router.php';

header("Content-type: application/json; charset=UTF-8");

$router = new Router();
$categoria_controller = new CategoriaController($pdo);
$produto_controller = new ProdutoController($pdo);

$router->add('GET', '/categoria', [$categoria_controller, 'listar']);
$router->add('GET', '/produto', [$produto_controller, 'listar']);
$router->add('POST', '/categoria', [$categoria_controller, 'criar']);
$router->add('POST', '/produto', [$produto_controller, 'criar']);
$router->add('POST', '/categoria', [$categoria_controller, 'atualizar']);
$router->add('POST', '/produto', [$produto_controller, 'deletar']);
$router->add('POST', '/produto', [$produto_controller, 'deletar']);



$requestedPath = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$pathItems = explode("/", $requestedPath);
$requestedPath = "/" . $pathItems[3] . ($pathItems[4] ? "/" . $pathItems[4] : "");

$router->dispatch($requestedPath);
