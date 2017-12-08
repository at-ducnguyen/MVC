<?php

use App\Core\Session;
use App\Models\Model;

if (!function_exists('dd')) {
  
  function dd($data = null)
  {
    echo "<pre>";
    print_r($data); die;
  }
}

if (!function_exists('view')) {
        /**
         * View Helper function
         *
         * @param string $view view path
         *
         */
        function view($view, array $params = [])
        {
          $view = str_replace('.', '/', $view);
          ob_start();
          extract($params, EXTR_SKIP);
          require_once APP_PATH . "Views/{$view}.php";
          ob_end_flush();
        }
      }

      if (!function_exists('isGuest')) {
        /**
         * View Helper function
         *
         * @param string $view view path
         *
         */
        function isGuest()
        {
          if(Session::get('username')==NULL) {
            return true;
          }
          else 
            return false;
        }
      }

      

      if (!function_exists('isAdmin')) {
        /**
         * View Helper function
         *
         * @param string $view view path
         *
         */
        function isAdmin()
        {
          if(Session::get('username')=='Admin') {
            return true;
          }
          else 
            return false;
        }
      }

      


      if (!function_exists('template')) {
        /**
         * View Helper function
         *
         * @param string $view view path
         *
         */
        function template($link)
        {
         $path = '../app/Views/layouts/'.$link;
         $path =  require_once $path;
         return $path;
       }
     }


     
     if (!function_exists('config')) {
        /**
         * Debug helper function
         *
         */
        function config($key)
        {
          return \App\Core\Config::get($key);
        }
      }

      if (!function_exists('display_errors')) {
        /**
         * Debug helper function
         *
         */
        function display_errors()
        {
          error_reporting(E_ALL | E_STRICT);
          ini_set('display_errors', 'On');
        }
      }
      