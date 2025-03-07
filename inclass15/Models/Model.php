<?php

namespace inclass15\Models;

class User
{
    public function getAllUsersByName($params)
    {
        //in future these will come from the database

        $allUsers = [
            [
                'id' => '1',
                'name' => 'mary'
            ],
            [
                'id' => '2',
                'name' => 'bob'
            ],
            [
                'id' => '3',
                'name' => 'tim'
            ],


        ];

        return $allUsers;
    }
}