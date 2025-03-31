<?php

namespace homework9\models;

class User extends Model {

    public function getUsers($name) {
        if ($name) {
            $query = "select * from products WHERE name LIKE :name";
            return $this->fetchAllWithParams($query, ['name' => '%' . $name . '%']);
        }
        $query = "select * from products";
        return $this->fetchAll($query);
    }

    public function getUserById($id){
        $query = "select * from products where id = :id";
        return $this->fetchAllWithParams($query, ['id' => $id])[0] ?? null;
    }
}