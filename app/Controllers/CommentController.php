<?php
namespace App\Controllers;
class CommentController extends Controller implements CRUD{

     public function index()
    {
       echo "our comment";

    }

    public function createForm() {
        echo "Formulaire de creation comment";

    }

    public function storeAction() {
        echo "Enregistrement d'un nouvel comment";
    }

    public function show(int $id) {
        echo "Details de l'comment $id";

        
    }

    public function editForm(int $id) {
        echo "Formulaire d'edition de l'comment $id";
    }

    public function updateAction(int $id) {
        echo "Mise à jour de l'comment $id";
    }

    public function deleteAction(int $id) {
        echo "Suppression de l'comment $id";
    }




    
    
}