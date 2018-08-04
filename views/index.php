<?php
/**
 * Created by PhpStorm.
 * User: nikitaignatenkov
 * Date: 03/08/2018
 * Time: 18:20
 */

use \ignatenkovnikita\arh\helpers\ModelHistoryHelper;

?>


<h3>История изменений</h3>
<?php echo \yii\grid\GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        [
            'attribute' => 'date',
            'header' => 'Дата'
        ],
        [
            'attribute' => 'field_name',
            'header' => 'Описание',
            'value' => function ($data) {
                return 'Отредатикровано ' . ModelHistoryHelper::formatLabel($data);
            }
        ],
        [
            'attribute' => 'old_value',
            'header' => 'Старое значение',
            'value' => function ($data) {
                return ModelHistoryHelper::formatValue($data, $data['old_value']);
            }
        ],
        [
            'attribute' => 'new_value',
            'header' => 'Новое значение',
            'value' => function ($data) {
                return ModelHistoryHelper::formatValue($data, $data['new_value']);
            }
        ],
        [
            'attribute' => 'user_id',
            'header' => 'Пользователь',
            'format' => 'html',
            'value' => function ($data) {
                return ModelHistoryHelper::getAuthor($data);
            }
        ]
    ],
]);
?>
