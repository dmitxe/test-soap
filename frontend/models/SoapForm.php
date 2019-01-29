<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class SoapForm extends Model
{
    public $username;
    public $password;
    public $city;
    public $name;
    public $date;
    public $field1;
    public $field2;
    public $field3;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'city', 'name', 'date', 'field1', 'field2', 'field3'], 'required'],
            [['username', 'password', 'city', 'name', 'field1', 'field2', 'field3'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'username' => 'Логин SOAP',
            'password' => 'Пароль SOAP',
            'city' => 'Город',
            'name' => 'Наименование',
            'date' => 'Дата',
            'field1' => 'Поле1',
            'field2' => 'Поле2',
            'field3' => 'Поле3',
        ];
    }

}
