<?php
namespace App\Controllers;


class ArticleController extends Controller implements CRUD { 
      
    public function index()
    {
       echo "our article";

    }

    public function createForm() {
        echo "Formulaire de creation d'article";

    }

    public function storeAction() {
        echo "Enregistrement d'un nouvel article";
    }

    public function show(int $id) {
        echo "Details de l'article $id";

        
    }

    public function editForm(int $id) {
        echo "Formulaire d'edition de l'article $id";
    }

    public function updateAction(int $id) {
        echo "Mise à jour de l'article $id";
    }

    public function deleteAction(int $id) {
        echo "Suppression de l'article $id";
    }


}






   