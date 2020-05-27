<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "url".
 *
 * @property int $id
 * @property string $org_url
 * @property int $gen
 * @property int|null $click
 * @property string $short_link
 * @property string $analitic
 */
class Url extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'url';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['org_url', 'gen', 'short_link'], 'required','message'=>"To'ldirmadingiz!"],
            [['gen', 'click'], 'integer'],
            [['org_url', 'short_link', 'analitic'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'org_url' => 'Org Url',
            'gen' => 'Gen',
            'click' => 'Click',
            'short_link' => 'Short Link',
            'analitic' => 'Analitic',
        ];
    }

    public static function checkLink($url)
    {
        if (substr($url,0,4)!="http") $url="http://".$url;

// Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
        if (filter_var($url, FILTER_VALIDATE_URL) !== false) {
            return true;
        } else {
            return false;
        }
    }

//    public function beforeSave($insert)
//    {
//        if ($insert) {
//            $this->gen = time();
//        }
//    }
}
