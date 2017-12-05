<?php

namespace App\Models;

class Comment extends Model
{
    protected $table = 'comments';

    public function save($data){
    	$sql = "INSERT INTO comments(username,content,post_id) 
    	VALUES ('{$data['username']}','{$data['content']}',{$data['post_id']})";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
    }

    

}

