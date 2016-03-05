<?php

namespace DesignPatterns\Structural\DataMapper;

/**
 * 数据映射器模式
 * 这是我们的数据基本记录在内存中的表示（实体）
 * 有效性验证也需要在对象中进行
 */
class User
{
    /**
     * @var int
     */
    protected $userId;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    public function __construct($id = null, $username = null, $email = null)
    {
        $this->userId=$id;
        $this->username=$username;
        $this->email=$email;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserID($userId)
    {
        $this->userId=$userId;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username=$username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email=$email;
    }
}
