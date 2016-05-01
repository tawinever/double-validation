<?php
/**
 * Created by PhpStorm.
 * User: Ertlek
 * Date: 01.05.2016
 * Time: 19:19
 */

namespace frontend\models;


use yii\base\Model;

class RevalidateForm extends Model
{
    public $email_code;
    public $sms_code;

    public function rules()
    {
        return [
            [['email_code', 'sms_code'], 'required'],
        ];
    }

    public function validateEmail($id)
    {
        return $this->email_code == "qwerty";
    }

    public function validateSms($id)
    {
        return $this->sms_code == "12345";
    }
}