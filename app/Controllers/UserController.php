<?php
namespace App\Controllers;
use App\Models\User;

class Usercontroller extends Controller implements CRUD { 
      
    public function index()
    {
       echo "User page";

    }

    public function createForm() {
        echo "Formulaire de creation d'utilisateur";

    }

    public function storeAction() {
        echo "Enregistrement d'un nouvel utilisateur";
    }

    public function show(int $id) {
        echo "Details de l'utilisateur $id";

        
    }

    public function editForm(int $id) {
        echo "Formulaire d'edition de l'utilisateur $id";
    }

    public function updateAction(int $id) {
        echo "Mise à jour de l'utilisateur $id";
    }

    public function deleteAction(int $id) {
        echo "Suppression de l'utilisateur $id";
    }





}



   