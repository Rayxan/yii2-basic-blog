<?php

/** @var $model \app\models\Article */
?>

<div>
    <a href="<?= \yii\helpers\Url::to(['/article/view', 'slug' => $model->slug]) ?>">
        <h3><?= \yii\helpers\Html::encode($model->title) ?></h3>
    </a>
    <div>
        <?= \yii\helpers\StringHelper::truncateWords(($model->getEncodedBody()), 40)?>
    </div>
    <p class="text-muted text-right">
        <small> <b><?=Yii::$app->formatter->asRelativetime($model->created_at) ?></b> 
                          <!--Yii::$app->formatter->asDatetime($model->created_at)-->
    
            <b>| By: <?php echo $model->createdBy->username ?></b>
        </small>
    </p>
    <hr>
</div>