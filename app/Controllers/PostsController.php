<?php
namespace App\Controllers;
use App\Models\User;
use App\Models\Comment;
use App\Models\Post;
use App\Core\Session;

class PostsController extends Controller
{
  public function create()
  {
    if (isGuest()){
      header('Location:/users/login');
    }
    else {

      if (isset($_POST['btn'])){
        $post = new Post();
        $data = array();
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        $data['title'] = $_POST['title'];
        $data['description'] = $_POST['description'];
        $data['category'] = $_POST['category'];
        $data['content'] = stripslashes($_POST['content']);
        $data['image'] = $target_file;
        $data['author'] = Session::get('username');
        move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
        $post->save($data);
        header('Location:/');
      }

      return view('posts.create');
    }
  }



  public function view($id)
  {
    $model = new Post();
    //get this post
    $data['post'] = $model->find($id);
    //get category of this post
    $category = $data['post']['category']; 
    //call funtion to get the related post
    $data['posts'] = $model->same($category,$id);
    $data['comments'] = $model->comment($id);
    return view('posts.view',$data);
  }

  public function edit($id)
  {
    if (isGuest()){
     header('Location:/users/login');
   }
   else {
    $model = new Post();
    $post = $model->find($id);
    if (isset($_POST['btn'])){
      $data = array();
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
      $data['title'] = $_POST['title'];
      $data['description'] = $_POST['description'];
      $data['category'] = $_POST['category'];
      $data['content'] = stripslashes($_POST['content']);
      $data['image'] = $target_file;
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      $model->edit($data,$id);
      if(isAdmin()){
        header('Location:/posts/list');
      }
      else{
        header('Location:/posts/userpost');}        
      }
      return view('posts.edit',$post);
    }
  }


  public function list()
  {
    if(isGuest()){
      header('Location:/');
    }
    else{
      $model = new Post();
      $data['posts'] = $model->orderBy('created_at','DESC');
      return view('posts.list',$data);
    }
  }



  public function index()
  {
    $model = new Post();
    $data['posts'] = $model->orderBy('created_at','DESC');
    return view('posts.index',$data);
  }


  public function delete($id)
  {
    if (isGuest()){
     header('Location:/users/login');
   }
   else {
    $model = new Post();
    $model->delete($id);
    if (isAdmin()){header('Location:/posts/list');}
      else { header('Location:/posts/userpost');} 
      }
    }

    public function category($category){
     $model = new Post();
     if($category==1){
      $data['posts'] = $model->category('Thể thao');
      view('posts.category',$data);
    }

    if($category==2){
      $data['posts'] = $model->category('Giải trí');
      view('posts.category',$data);
    }

    if($category==3){
      $data['posts'] = $model->category('Kinh tế');
      view('posts.category',$data);
    }

    if($category==4){
      $data['posts'] = $model->category('Giáo dục');
      view('posts.category',$data);
    }

    if($category==5){
      $data['posts'] = $model->category('Sức khỏe');
      view('posts.category',$data);
    }

    if($category==6) {
      $data['posts'] = $model->category('Thế giới');
      view('posts.category',$data);
    }

    else {
      $data['error'] = "Không tìm thấy yêu cầu";
      view('posts.category',$data);
    }
  }

  public function search(){
    $posts = new Post();
    if (isset($_POST['search'])){
      $key = $_POST['key'];
      $data['list'] = $posts->search($key);
      view('posts.search',$data);
    }
  }

  public function userpost(){
    $posts = new Post();
    if (isGuest()){
      header('Location:/users/login');
    } 
    else {
      $data['userpost'] = $posts->userpost($posts->getUsername());
      view('posts.userpost',$data);
    }
  }

  public function comment(){
    if(isset($_POST['comment'])){
      $comment = new Comment();
      $data= array();
      $data['username'] = $comment->getUsername();
      $data['content'] = $_POST['content'];
      $data['post_id'] = $_POST['post_id'];    
      $id = $_POST['post_id'];
      $comment->save($data);
      header("Location:/posts/view/$id");
    }
  }
}
