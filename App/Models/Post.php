<?php
/**
 * User: nieuk
 * Date: 19.11.2017
 * Time: 18:13
 */

namespace App\Models;

use PDO;

class Post extends \Core\Model
{

    public static function getAll()
    {


        try{
            $db = static::getDB();
            $stmt = $db->query('SELECT id, title, content FROM posts ORDER BY created_at');
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $result;
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }
    }
}