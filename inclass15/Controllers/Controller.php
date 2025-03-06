<?php

namespace cisc3300\inclass15\Controllers;

require "../cisc3300/inclass15/Models/Model.php";

use cisc3300\inclass15\Model;

class Controller {
 $userModel = new Model();
 $users = $userModel->getAllUsersByName($params);
 echo json_encode($users);
 exit();
}

