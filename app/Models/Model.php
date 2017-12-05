<?php
    namespace App\Models;
    use App\Core\Database;
    use App\Core\Session;
    
    class Model
    {
        public static $db;
        protected $table;
        protected $primaryKey = 'id';

        public function __construct()
        {
            if (!isset($this->table)) {
                throw \Exception("table must be defined");
            }

            static::$db = new Database();
        }

        public function db()
        {
            static::$db;
        }

        public function close()
        {
            static::$db = null;
        }

        public function find($id)
        {
            $sql = "SELECT * FROM {$this->table} WHERE {$this->primaryKey}=:{$this->primaryKey}";
            $stmt = static::$db->prepare($sql);
            $stmt->execute([$this->primaryKey => $id]);

            return $stmt->fetch();
        }

        public function all($fields = ['*'])
        {
            $fields = implode(',', $fields);
            $sql = "SELECT {$fields} FROM {$this->table}";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();

            return $stmt->fetchAll();
        }


        public function order()
        {
            $sql = "SELECT * FROM {$this->table} ORDER BY created_at DESC";
            $stmt = static::$db->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function getUser()
        {
            if(Session::get('username')) {
            $user = Session::get('username');
            $sql = "SELECT * FROM users WHERE username='$user'";
             $stmt = static::$db->prepare($sql); 
             $stmt->execute();
             $result = $stmt->fetch();
             return $result;
            }      
        }


    public function getUsername()
        {
            return Session::get('username');
             
            }
    }