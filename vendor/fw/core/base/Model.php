<?php

namespace fw\core\base;

use fw\core\Db;
use Valitron\Validator;


abstract class Model
{
    protected $pdo;
    protected $table;
    protected $pk = 'id';
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        $this->pdo = Db::instance();
    }

    public function load($data)
    {
        foreach ($this->attributes as $name => $value)
        {
            if (isset($data[$name]))
            {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    public function validate($data)
    {
        $v =new Validator($data);
        $v->rules($this->rules);
        if ($v->validate())
        {
            return true;
        }
        else
        {
            $this->errors = $v->errors();
            return false;
        }
    }

    public function query($sql)  //возвращает true или false при выполнении запроса
    {
        return $this->pdo->execute($sql);
    }

    public function findAll()  //метод для получения всех данных для текущей модели
    {
        $sql = "SELECT * FROM {$this->table}";
        return $this->pdo->query($sql);
    }

    public function findOne($id, $field = '')  //метод для получения одной записи для текущей модели
    {
        $field = $field ?: $this->pk;
        $sql = "SELECT * FROM {$this->table} WHERE $field = ? LIMIT 1";
        return $this->pdo->query($sql, [$id]);
    }

    public function findBySql($sql, $params = [])  //метод для выполнения произвольного sql запроса
    {
        return $this->pdo->query($sql, $params);
    }

    public function findLike($str, $field, $table = '')  //метод для поиска по сторке, $str-что ищем $field-в каком поле $table -в какой таблице
    {
        $table = $table ?: $this->table;
        $sql = "SELECT * FROM $table WHERE $field like ?";
        return $this->pdo->query($sql, ['%'.$str.'%']);
    }

}