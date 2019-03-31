<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $name 用户名
 * @property string $email 用户邮箱
 * @property int $is_admin 1是管理员|0不是管理员
 * @property int $status 1有效|0无效
 * @property int $create_time
 * @property int $update_time
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'create_time', 'update_time'], 'required'],
            [['create_time', 'update_time'], 'integer'],
            [['name'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 30],
            [['is_admin', 'status'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'is_admin' => 'Is Admin',
            'status' => 'Status',
            'create_time' => 'Create Time',
            'update_time' => 'Update Time',
        ];
    }
}
