<?php

namespace homework9\controllers;

use homework9\models\User;

class UserController
{
    public function getUsers()
    {
        $userModel = new User();
        $query = !empty($_GET['name']) ? $_GET['name'] : null;

        $users = $userModel->getUsers($query);

        if (empty($users)) {
            echo json_encode([
                'message' => 'No products found with the name "' . $query . '"'
            ]);
        } else {
            echo json_encode($users);
            exit();
        }
    }

    public function getUserByID($id) {
        $userModel = new User();
        $user = $userModel->getUserById($id);
        echo json_encode($user);
        exit();
    }

    public function usersView() {
        include '../homework9/users.html';
        exit();
    }
}