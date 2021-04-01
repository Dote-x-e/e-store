<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "listing".
 *
 * @property int $listingId
 * @property string $listingName
 * @property string $listingDesc
 * @property string $videoUrl
 * @property string $size
 * @property float $price
 * @property int $status
 * @property string $createdAt
 *
 * @property Location[] $locations
 */
class Listing extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listing';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingName', 'listingDesc', 'videoUrl', 'size', 'price', 'status'], 'required'],
            [['listingDesc'], 'string'],
            [['price'], 'number'],
            [['status'], 'integer'],
            [['createdAt'], 'safe'],
            [['listingName', 'size'], 'string', 'max' => 255],
            [['videoUrl'], 'string', 'max' => 300],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listingId' => 'Listing ID',
            'listingName' => 'Listing Name',
            'listingDesc' => 'Listing Desc',
            'videoUrl' => 'Video Url',
            'size' => 'Size',
            'price' => 'Price',
            'status' => 'Status',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Locations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Location::className(), ['listingId' => 'listingId']);
    }
}
