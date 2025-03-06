<?php

namespace cisc3300\inclass15\Models;

class Model {
    public function getAllUsersByName($params)
    {
        //in future these will come from the database

        $allUsers = [
            [
                'id' => '1',
                'name' => 'pinecone'
            ],
            [
                'id' => '2',
                'name' => 'nathan'
            ],
        ];

        return $allUsers;

      }
    }