<?php

namespace App\Models;



class UserModel extends BaseModel{
    protected $name ="UserModel";
    public $tableName = 'users';

    public function getAllUser(){
        return $this->getAll()->get();
    }

    public function checkUserExist($email){
        return $this->select()->where('email', '=', $email)->first();
    }

    public function getAllWithPaginate(int $limit = 10,int  $offset = 0){
        // return $this->select()->where('email', '=', $email)->first();
    }

    public function registerUser($data){
        $user = $this->table($this->tableName)->insert($data);
    }

    public function create($data){

    }
}