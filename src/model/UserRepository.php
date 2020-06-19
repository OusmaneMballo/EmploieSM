<?php


namespace src\model;

use libs\system\Model;

class UserRepository extends Model
{

    /**
     * Methods with DQL (Doctrine Query Language)
     */


    /**
     * UserRepository constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function addUser($user)
    {
        if($this->db != null)
        {
            $this->db->persist($user);
            $this->db->flush();

            return $user->getId();
        }
    }

    public function login($login, $passwd)
    {
        if($this->db != null)
        {
            return $this->db->createQuery('SELECT u FROM User u WHERE u.login = :log and u.passwd= :pass')
                ->setParameter('log', $login)->setParameter('pass', $passwd)->getSingleResult();
        }
    }
}