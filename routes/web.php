<?php
use App\Controllers\UserController;

$router = new AltoRouter();
//pour vider (ca nous permet d'eviter des erreurs innatandit)
$router->setBasePath('');


// creation des routes

//Routes pour les users
//Routes GET
$router->map('GET', '/users', [$UserController, 'index']);
$router->map('GET', '/users/form', [$UserController, 'createForm']);
$router->map('GET', '/users/[i:id]', [$UserController, 'show']);
$router->map('GET', '/users/[i:id]/edit', [$UserController, 'editForm']);
// Routes POST
$router->map('POST', '/users', [$UserController, 'storeAction']);
$router->map('POST', '/users/[i:id]/update', [$UserController, 'updateAction']);
$router->map('POST', '/users/[i:id]/delete', [$UserController, 'deleteAction']);




//Routes pour les Article
// Routes GET
$router->map('GET', '/', [$ArticleController, 'index']);
$router->map('GET', '/article/form', [$ArticleController, 'createForm']);
$router->map('GET', '/article/[i:id]', [$ArticleController, 'show']);
$router->map('GET', '/article/[i:id]/edit', [$ArticleController, 'editForm']);
// Routes POST
$router->map('POST', '/article', [$ArticleController, 'storeAction']);
$router->map('POST', '/article/[i:id]/update', [$ArticleController, 'updateAction']);
$router->map('POST', '/article/[i:id]/delete', [$ArticleController, 'deleteAction']);




//Routes pour les Commentaires
// Routes GET
$router->map('GET', '/comment', [$CommentController, 'index']);
$router->map('GET', '/comment/form', [$CommentController, 'createForm']);
$router->map('GET', '/comment/[i:id]', [$CommentController, 'show']);
$router->map('GET', '/comment/[i:id]/edit', [$CommentController, 'editForm']);
// Routes POST
$router->map('POST', '/comment', [$CommentController, 'storeAction']);
$router->map('POST', '/comment/[i:id]/update', [$CommentController, 'updateAction']);
$router->map('POST', '/comment/[i:id]/delete', [$CommentController, 'deleteAction']);
























































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

