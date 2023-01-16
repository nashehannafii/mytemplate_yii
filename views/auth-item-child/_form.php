<?php

use app\rbac\models\AuthItem;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\AuthItemChild $model */
/** @var yii\widgets\ActiveForm $form */


$listAuth1 = AuthItem::find()->where(['type' => 1])->orderBy(['name' => SORT_ASC])->all();
$listAuth = ArrayHelper::map($listAuth1, 'name', 'name');
?>

<div class="auth-item-child-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Parent</label>
        <div class="col-sm-9">
            <?= $form->field($model, 'parent', ['options' => ['tag' => false]])->dropDownList($listAuth, ['prompt' => '- pilih parent -'])->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Child</label>
        <div class="col-sm-9">
            <?= $form->field($model, 'child', ['options' => ['tag' => false]])->dropDownList($listAuth, ['prompt' => '- pilih child -'])->label(false) ?>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>