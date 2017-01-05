<?php
namespace app\models;

use yii\base\Model;


class ShowDataForm extends Model
{
    public $countryID;
    public $cityID;
    public $hotelID;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['countryID', 'cityID', 'hotelID'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'countryID' => 'Страна',
            'cityID' => 'Город',
            'hotelID' => 'Отель',
        ];
    }

    public function getCountries()
    {
        return Country::find()->all();
    }

    public function getCities()
    {
        if($this->countryID === null)
        {
            return [];
        }
        return City::find()->where(['country_id' => $this->countryID])->all();
    }

    public function getHotels()
    {
        if($this->cityID === null)
        {
            return [];
        }
        return Hotel::find()->where(['city_id' => $this->cityID])->all();
    }
}