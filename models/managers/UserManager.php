<?php

namespace Models\Managers;

use App\Manager;
use App\DAO;

class UserManager extends Manager
{

    protected $className = "Models\Entities\User";
    protected $tableName = "user";

    public function __construct()
    {
        parent::connect();
    }

    public function findOneByEmail($data, $order = null)
    {
        $orderQuery = ($order) ?
            "ORDER BY " . $order[0] . " " . $order[1] :
            "";
        $sql = "SELECT *
        FROM " . $this->tableName . " u
        WHERE u.email = :email
        " . $orderQuery;;

        return $this->getOneOrNullResult(
            DAO::select($sql, ['email' => $data], false),
            $this->className
        );
    }

    public function updateUser($sql, $params)
    {
        DAO::update($sql, $params);
    }
}
