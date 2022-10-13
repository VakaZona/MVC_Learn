<?php
namespace Core;
use PDO;

abstract class Model
{
    protected static function getDB()
    {
        static $db = null;
        if($db===null){
            $host = 'localhost';
            $dbname = 'mvc_learn';
            $username = 'root';
            $password = 'root';
            try {
                $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                $stmt = $db->query('select id, title, content from posts order by created_at');
                return $stmt->fetchAll(PDO::FETCH_ASSOC);

            } catch (\PDOException $e){
                echo $e->getMessage();
            }
        }
    }
}
