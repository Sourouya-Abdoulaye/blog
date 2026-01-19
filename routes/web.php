<?php
use App\Controllers\UserController;
use App\Controllers\ArticleController;
use App\Controllers\AboutController;
use App\Controllers\ContactController;
use App\Controllers\CommentController;


$UserController = new UserController();
$ArticleController = new ArticleController();
$AboutController = new AboutController();
$ContactController = new ContactController();
$CommentController = new CommentController();





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

$router->map('POST', '/users',function($id) use ($userController) {
        $userController->storeAction($id); 
        header("Location:/users");
});

$router->map('POST', '/users/[i:id]/delete',function($id) use ($userController) {
        $userController->deleteAction($id); 
        header("Location:/users");
});

$router->map('POST', '/users/[i:id]/update',function($id) use ($userController) {
        $userController->updateAction($id); 
        header("Location:/users");
});


//Routes pour les Article
// Routes GET
$router->map('GET', '/', [$ArticleController, 'index']);
$router->map('GET', '/article/form', [$ArticleController, 'createForm']);
$router->map('GET', '/article/[i:id]', [$ArticleController, 'show']);
$router->map('GET', '/article/[i:id]/edit', [$ArticleController, 'editForm']);
// Routes POST
$router->map('POST', '/article',function($id) use ($ArticleController) {
        $ArticleController->storeAction($id); 
        header("Location:/");
});

    $router->map('POST', '/article/[i:id]/update',function($id) use ($ArticleController) {
        $ArticleController->updateAction($id); 
        header("Location:/");
});

    $router->map('POST', '/article',function($id) use ($ArticleController) {
        $ArticleController->deleteAction ($id); 
        header("Location:/");
});




//Routes pour les Commentaires
// Routes GET
$router->map('GET', '/comment', [$CommentController, 'index']);
$router->map('GET', '/comment/form', [$CommentController, 'createForm']);
$router->map('GET', '/comment/[i:id]', [$CommentController, 'show']);
$router->map('GET', '/comment/[i:id]/edit', [$CommentController, 'editForm']);
// Routes POST

$router->map('POST', '/comment',function($id) use ($CommentController) {
        $CommentController->storeAction($id); 
        header("Location:/comment");
});

    $router->map('POST', '/comment/[i:id]/update',function($id) use ($CommentController) {
        $CommentController->updateAction($id); 
        header("Location:/comment");
});

    $router->map('POST', '/comment/[i:id]/delete',function($id) use ($CommentController) {
        $CommentController->deleteAction($id); 
        header("Location:/comment");
});


//Routes pour page static
//Routes GET
$router->map('GET', '/contact', [$ContactController, 'show']);
$router->map('GET', '/about', [$AboutController, 'show']);


//Routes pour la connexion
// a terminer
$router->map('GET', '/login', [$loginController, 'show']);

$router->map('POST', '/login',function($id) use ($loginController) {
        $loginController->show($id); 
        header("Location:/");
});



















































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

