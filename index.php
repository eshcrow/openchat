<?php
// Константы для директорий
require_once './conf/defines.php';


// Маршруты
$routes = [

    '/' => 'main',
    
    '/main' => 'main'
    
];

function getRequestPath() {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

    return '/' . ltrim(str_replace('index.php', '', $path), '/');
}


function getMethod(array $routes, $path) {
    foreach ($routes as $route => $method) {
        if ($path === $route) {
            return $method;
        }
    }

    return 'notFound';
}


// функция для корня
function index() {
    require_once './pages/main.php';
}



function main() {
     require_once './pages/main.php';
    
}




function notFound() {
    header("HTTP/1.0 404 Not Found");

    return 'Нет такой страницы';
}


$path = getRequestPath();

$method = getMethod($routes, $path);

echo $method();
?>
