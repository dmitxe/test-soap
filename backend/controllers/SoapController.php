<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;
use common\models\User;

/**
 * Soap controller
 */
class SoapController extends Controller
{
    public $enableCsrfValidation = false;

    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['?','@'],
                    ],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'index' => [
                'class' => 'backend\components\soap\SoapAction',
            ],
        ];
    }

    /**
     * Returns Calculate method.
     *
     * @param string $city City
     * @param string $name Name
     * @param string $date Date
     * @param string $field1 field1
     * @param string $field2 field2
     * @param string $field3 field3
     * @return mixed
     * @soap
     */
    public function calculate($city, $name, $date, $field1, $field2, $field3)
    {
        $d = \DateTime::createFromFormat('Y-m-d H:i:s', $date);
        if ($d && $d->format('Y-m-d H:i:s') == $date) {
            if (strtotime($date) < strtotime(date('Y-m-d 00:00:00'))) {
                return ['error' => 'Дата меньше текущего дня'];
            } else {
                return ['price' => rand(0,100), 'info' => Yii::$app->security->generateRandomString(40)];
            }
        } else {
            return ['error' => 'Неверный формат даты'];
        }
    }
}
