<?php

/** @var $model \app\models\Article */
?>

<div>
    <a href="<?= \yii\helpers\Url::to(['/article/view', 'id' => $model->id]) ?>">
        <h3><?= \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?= \yii\helpers\StringHelper::truncateWords(($model->getEncodedBody()), 40)?>
    </div>
    <hr>
</div>