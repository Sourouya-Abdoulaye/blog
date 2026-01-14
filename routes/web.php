<?php
use App\Controllers\Usercontroller;

$router = new AltoRouter();
//pour vider (ca nous permet d'eviter des erreurs innatandit)
$router->setBasePath('');


// creation des routes
$router->map('GET', '/', function() { 
    echo "Welcome Page to blog abdoulaye and agouda"; });


// je vais matcher pour voi les correspondante
$match = $router->match();
//print_r($match);


if($match && is_callable($match['target'])) {
    call_user_func_array($match['target'], $match['params']);
} else {
    header($_SERVER["SERVER_PROTOCOL"] . ' 404 Not Found');
    echo "Page Not found";
}






























































































































// ssh-ed25519 AAAAC3NzaC1lZDI1NTE5AAAAIKtVO2gDYsyNUHybnlR1MySzPbsPR05PJHL1WQS+LNO3 akisourouyaabdoulaye@gmail.com

