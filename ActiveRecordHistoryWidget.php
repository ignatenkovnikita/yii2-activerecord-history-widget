<?php
/**
 * Created by PhpStorm.
 * User: nikitaignatenkov
 * Date: 03/08/2018
 * Time: 18:20
 */

namespace ignatenkovnikita\arh;


use yii\base\Widget;

class ActiveRecordHistoryWidget extends Widget
{

    public $model;
    
    
    public function run()
    {
        $tableName = $this->model::tableName();
        $query = (new \yii\db\Query())
            ->from('{{%modelhistory}}')
            ->where(['table' => $tableName])
            ->andWhere(['field_id' => $this->model->id])
            ->andWhere('field_name != \'created_at\'')
            ->andWhere('field_name != "updated_at"')
            ->orderBy('date DESC');
        $dataProvider = new \yii\data\ActiveDataProvider([
            'query' => $query
        ]);
        
        return $this->render('index',['dataProvider' => $dataProvider, 'model' => $this->model]);
    }
}