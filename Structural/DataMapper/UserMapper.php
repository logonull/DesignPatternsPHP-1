<?php

namespace DesignPatterns\Structural\DataMapper;

/**
 * UserMapper类
 */

class UserMapper
{

    /**
     * @var DBAL
     */
    protected $adapter;

    /**
     * UserMapper constructor.
     * @param DBAL $dbLayer
     */
    public function __construct(DBAL $dbLayer)
    {
        $this->adapter=$dbLayer;
    }

    /**
     * 保存一个用户的对象从内存到数据库
     * @param User $user
     * @return bool
     */
    public function save(User $user)
    {
        // $data的keys应该是对应有效的数据库字段。
        $data = array(
            'userid' => $user->getUserId(),
            'username' => $user->getUsername(),
            'email' => $user->getEmail()
        );
        //如果没有id将产生一个新的用户 否则更新在数据库中这条数据
        if (null === ($id = $user->getUserId())) {
            unset($data['userid']);
            $this->adapter->insert($data);
            return true;
        } else {
            $this->adapter->update($data, array('userid=>?' => $id));
            return true;
        }
    }

    /**
     * 通过ID在数据库中找出一个用户 并且 返回一个用户的对象放在内存中
     * @param int $id
     *
     * @throws \InvalidArgumentException
     *
     * @return User
     **/
    public function findById($id)
    {
        $result=$this->adapter->find($id);
        if (0==count($result)) {
            throw new \InvalidArgumentException("User #$id not found");
        }
        $row=$result->current();
        return $this->mapObject($row);
    }

    /**
     * 获取一个数组从数据库，返回一个用户对象的数组在内存中.
     *
     * @return array
     */
    public function findAll()
    {
        $resultSet = $this->adapter->findAll();
        $entries = array();

        foreach ($resultSet as $row) {
            $entries[] = $this->mapObject($row);
        }

        return $entries;
    }

    /**
     * 映射一条表记录给对象
     * @param array $row
     *
     * @return User
     */
    protected function mapObject(array $row)
    {
        $entry = new User();
        $entry->setUserID($row['userid']);
        $entry->setUsername($row['username']);
        $entry->setEmail($row['email']);

        return $entry;
    }
}
