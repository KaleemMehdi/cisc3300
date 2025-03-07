<?php

namespace inclass15\Controllers;

require "../inclass15/Models/Model.php";

use inclass15\Models\User;

class UserController
{
    public function getUsers()
    {
        $params = [
            'name' => $_GET['name'] ?? null,
        ];
        $userModel = new User();
        $users = $userModel->getAllUsersByName($params);
        echo json_encode($users);
        exit();
    }
}