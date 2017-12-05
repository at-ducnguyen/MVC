<?php
namespace App\Controllers;
use App\Models\Post;
use App\Models\Contact;


class HomeController extends Controller
{
  public function index()
  {
    $posts = new Post();
    $data['list'] = $posts->order();
    return view('home.index',$data);
  }


  public function about()
  {
    view('home.about');
  }

  public function contact()
  {
    if(isset($_POST['btn'])){
      $contact = new Contact();
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $content = $_POST['content'];
      $contact->save($name,$email,$phone,$content);
      view('home.contact');
    }
    view('home.contact');
  }

}