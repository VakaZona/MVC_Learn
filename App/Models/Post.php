<?php

namespace App\Models;

use Core\Errors;
use PDO;

class Post extends \Core\Model
{
    public static function getAll()
    {
        try {
            $db = static::getDB();
            $stmt = $db->query('select id, title, content from posts order by created_at');
            return $stmt->fetchAll(PDO::FETCH_ASSOC);

        } catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

}