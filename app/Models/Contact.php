<?php

namespace App\Models;

class Contact extends Model
{
    protected $table = 'contacts';
    public function save($data){
    	$sql = "INSERT INTO contacts(name,email,phone,content) 
    	VALUES ('{$data['name']}','{$data['email']}',{$data['phone']},'{$data['content']}')";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
    }

    

}

