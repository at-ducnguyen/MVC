<?php
namespace App\Models;
use App\Core\Session;
class Post extends Model
{
    protected $table = 'posts';

    public function save($data)
    {
        $sql = "INSERT INTO posts(title,description,content,author,category,image) 
        VALUES ('{$data['title']}','{$data['description']}','{$data['content']}','{$data['author']}','{$data['category']}','{$data['image']}')";
        $stmt = static::$db->prepare($sql);   
        $stmt->execute();    
    }

    public function edit($data,$id)
    {
        $sql = "UPDATE posts SET title='{$data['title']}',description='{$data['description']}',
        content='{$data['content']}',category='{$data['category']}',image='{$data['image']}' WHERE id=$id";
        $stmt = static::$db->prepare($sql);
        $stmt->execute();     
    }

    public function delete($id)
    {
    	$sql = "DELETE FROM posts WHERE id=$id";
        $stmt = static::$db->prepare($sql);
        $stmt->execute();    
    }

    //get post of a category
    public function category($category){
        $sql = "SELECT * FROM posts WHERE category = '$category'";
        $stmt = static::$db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    //funtion seach post
    public function search($key){
        $sql = "SELECT * FROM posts WHERE title LIKE '%$key%'";
        $stmt = static::$db->prepare($sql); 
        $stmt->execute();
        return $stmt->fetchAll();
    }

    //get related post (same category)
    public function same($category,$id){
        $sql = "SELECT * FROM posts WHERE category='$category' AND id NOT IN ($id)";
        $stmt = static::$db->prepare($sql); 
        $stmt->execute();
        return $stmt->fetchAll();
    }

    //get post of user order by date time created at
    public function userpost(){
        $user = Session::get('username');
        $sql = "SELECT * FROM posts WHERE author='$user' ORDER BY created_at";
        $stmt = static::$db->prepare($sql); 
        $stmt->execute();
        return $stmt->fetchAll();
    }

    //get comment of a post
    public function comment($id){
        $sql = "SELECT * FROM comments WHERE post_id=$id";
        $stmt = static::$db->prepare($sql); 
        $stmt->execute();
        return $stmt->fetchAll();
    }

}

