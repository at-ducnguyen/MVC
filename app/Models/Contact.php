<?php

namespace App\Models;

class Contact extends Model
{
    protected $table = 'contacts';
    public function save($name,$email,$phone,$content){
    	$sql = "INSERT INTO contacts(name,email,phone,content) 
    	VALUES ('$name','$email',$phone,'$content')";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
    }

    

}

