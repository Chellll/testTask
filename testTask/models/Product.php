<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string|null $title
 * @property int|null $categoryId
 * @property float|null $price
 * @property string|null $description
 * @property string|null $image
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['categoryId'], 'default', 'value' => null],
            [['categoryId'], 'integer'],
            [['price'], 'number'],
            [['description'], 'string'],
            [['title', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'categoryId' => 'Category ID',
            'price' => 'Price',
            'description' => 'Description',
            'image' => 'Image',
        ];
    }
}
