<?php


namespace app\models;

use Yii;
use yii\base\Model;

class FormMailTo extends Model
{
    public $firstName;
    public $mail;
    public $phone;
    public $comment;

    public function rules()
    {
        return [
            [['firstName', 'mail', 'phone', 'comment'], 'safe'],
            [['phone'], 'number'],
            [['mail'], 'email'],
            [['firstName', 'mail', 'phone', 'comment'], 'required'],
        ];
    }
}