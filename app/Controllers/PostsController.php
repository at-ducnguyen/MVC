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
      $error['error'] = 'Vui lòng đăng nhập để thực hiện chức năng đăng bài viết !';
      view('home.error',$error);
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
    if($data['post']==NULL) {
      $error['error'] = 'Không tìm thấy bài viết !';
      view('home.error',$error);       
    } 
    else {
    //get category of this post
    $category = $data['post']['category']; 
    //call funtion to get the related post
    $data['posts'] = $model->same($category,$id);
    $data['comments'] = $model->comment($id);
    return view('posts.view',$data);
  }
}

  public function edit($id)
  {
    if (isGuest()){
     $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
   }
   else {
    $model = new Post();
    $post = $model->find($id);
    if (isset($_POST['btn'])){
      $data = array();
      $data['title'] = $_POST['title'];
      $data['description'] = $_POST['description'];
      $data['category'] = $_POST['category'];
      $data['content'] = stripslashes($_POST['content']);
      if($_FILES['image']['name'] != ""){
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["image"]["name"]);
      move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      $data['image'] = $target_file;
      $model->edit($data,$id);
        header('Location:/posts');
        } 
        else{
          $data['image'] = "";
          $model->edit($data,$id);
        header('Location:/posts');
        }
        }        
      
      return view('posts.edit',$post);
    }
  }


  public function list($currentPage=0)
  {
    if(isGuest()){
      $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
    }
    else{
    $model = new Post();
  $recordPerPage = 6; 
  $offset = $recordPerPage*$currentPage; 
  $data['posts'] = $model->pagination($offset,$recordPerPage,'created_at','DESC'); 
  $data['totalPage'] = ceil($model->count()/$recordPerPage)-1; 
  $data['currentPage'] = $currentPage;
  return view('posts.list', $data); 
}
  }


  public function index($currentPage=0)
  {
    $model = new Post();
  $recordPerPage = 5; 
  $offset = $recordPerPage*$currentPage; 
  $data['posts'] = $model->pagination($offset,$recordPerPage,'created_at','DESC'); 
  $data['totalPage'] = ceil($model->count()/$recordPerPage)-1; 
  $data['currentPage'] = $currentPage;
  return view('posts.index', $data); 
  }


  public function delete($id)
  {
    if (isGuest()){
     $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
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
    $model = new Post();
    if (isGuest()){
      $error['error'] = 'Permission denied ! Bạn không có quyền truy cập trang này !';
      view('home.error',$error);
    } 
    else {
      $data['posts'] = $model->userpost();
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