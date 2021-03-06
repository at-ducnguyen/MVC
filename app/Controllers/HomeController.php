<?php
namespace App\Controllers;
use App\Models\Contact;


class HomeController extends Controller
{
  
  public function error()
  {
    
    return view('home.error');
  }


  public function about()
  {
    view('home.about');
  }

  public function contact()
  {
    if(isset($_POST['btn'])){
      $contact = new Contact(); 
      $data = array();
      $data['name'] = $_POST['name'];
      $data['email'] = $_POST['email'];
      $data['phone'] = $_POST['phone'];
      $data['content'] = $_POST['content'];
      if($contact->save($data)){
       $error['error'] = "Đã gửi thành công !";
      view('home.contact',$error);
      }
    
    }
    view('home.contact');
  }

}