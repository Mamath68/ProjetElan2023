<?php

namespace Models\Managers;

use App\Manager;
use App\DAO;

class CommentManager extends Manager
{

    protected $className = "Models\Entities\Comment";
    protected $tableName = "comment";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneById($id)
    {
        $sql = "SELECT c.id_comment, c.body, c.image, c.commentDate
                FROM " . $this->tableName . " c
                INNER JOIN user u 
                ON u.id_user = c.user_id
                WHERE c.id_comment = :id
                ";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }

    public function findCommentByPublication($id)
    {
        $sql = "SELECT c.id_comment, c.body, c.image, c.commentDate
        FROM " . $this->tableName . " c
        INNER JOIN publication p 
        ON p.id_publication = c.publication_id
        INNER JOIN user u 
        ON u.id_user = c.user_id
        WHERE p.id_publication = :id
        ";

        return $this->getMultipleResults(
            DAO::select($sql, ['id' => $id], true),
            $this->className
        );
    }
}
