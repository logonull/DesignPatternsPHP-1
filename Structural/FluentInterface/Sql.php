<?php

namespace DesignPatterns\Structural\FluentInterface;

/**
 *  SQL类
 */
class Sql
{
    /**
     * @var array
     */
    protected $fields = array();

    /**
     * @var array
     */
    protected $from = array();

    /**
     * @var array
     */
    protected $where = array();

    /**
     * 增加查询字段
     *
     * @param array $fields
     * @return  SQL
     */
    public function select(array $fields = array())
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * 增加from从句
     * @param string $table
     * @param string $alias
     * @return SQL
     */
    public function from($table,$alias)
    {
        $this->from[] = $table.' AS '.$alias;
        return $this;
    }

    /**
     * 增加一个where条件
     *
     * @param string $condition
     *
     * @return SQL
     */
    public function where($condition)
    {
        $this->where[]=$condition;
        return $this;
    }

    /**
     * 获取到查询，是一个构造好的查询,没有检查一致性
     * @return string
     */
    public function getQuery()
    {
        return 'SELECT '.implode(',', $this->fields)
        .' FROM '.implode(',', $this->from)
        .' WHERE '.implode(' AND ', $this->where);
    }
}
