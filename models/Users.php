<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $userId
 * @property integer $firstName
 * @property integer $lastName
 * @property integer $age
 * @property integer $mail
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstName', 'lastName', 'age', 'mail'], 'required'],
            [['firstName', 'lastName'], 'string'],
             ['mail', 'email'], //agrego la regla para que valide el mail
            [['age'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'userId' => 'ID',
            'firstName' => 'Nombre',
            'lastName' => 'Apellido',
            'age' => 'Edad',
            'mail' => 'Mail',
        ];
    }
}
