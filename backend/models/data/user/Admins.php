<?php

namespace app\models\data\user;

use Yii;

/**
 * This is the model class for table "{{%admins}}".
 *
 * @property string $id
 * @property string $name
 * @property string $password
 * @property string $auto_login_token
 * @property string $phone
 * @property string $email
 * @property string $thumb
 * @property string $head
 * @property integer $role_id
 * @property string $role_name
 * @property integer $verify_status
 * @property integer $add_time
 * @property integer $edit_time
 */
class Admins extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%admins}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_id', 'verify_status', 'add_time', 'edit_time'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['password', 'auto_login_token', 'thumb', 'head', 'role_name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 22],
            [['email'], 'string', 'max' => 100],
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
            'password' => 'Password',
            'auto_login_token' => 'Auto Login Token',
            'phone' => 'Phone',
            'email' => 'Email',
            'thumb' => 'Thumb',
            'head' => 'Head',
            'role_id' => 'Role ID',
            'role_name' => 'Role Name',
            'verify_status' => 'Verify Status',
            'add_time' => 'Add Time',
            'edit_time' => 'Edit Time',
        ];
    }
}
