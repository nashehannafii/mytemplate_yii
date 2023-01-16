<?php

use app\rbac\models\AuthItem;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */

$role = AuthItem::find()->where(['type' => 1])->orderBy(['name' => SORT_ASC])->all();
$role = ArrayHelper::map($role, 'name', 'name');
?>

<div class="body">

    <?php $form = ActiveForm::begin([
        'options' => [
            'id' => 'form_validation',
        ]
    ]); ?>



    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Username</label>
        <div class="col-sm-9">
            <?= $form->field($user, 'username', ['options' => ['tag' => false]])->textInput(['class' => 'form-control', 'maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Uuid</label>
        <div class="col-sm-9">
            <?= $form->field($user, 'uuid', ['options' => ['tag' => false]])->textInput(['class' => 'form-control', 'maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Nama</label>
        <div class="col-sm-9">
            <?= $form->field($user, 'nama', ['options' => ['tag' => false]])->textInput(['class' => 'form-control', 'maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Email</label>
        <div class="col-sm-9">
            <?= $form->field($user, 'email', ['options' => ['tag' => false]])->textInput(['class' => 'form-control', 'maxlength' => true])->label(false) ?>
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Password</label>
        <div class="col-sm-9">
            <?= $form->field($user, 'password', ['options' => ['tag' => false]])->passwordInput(['class' => 'form-control', 'maxlength' => true])->label(false) ?>
        </div>
    </div>


    <div class="form-group">
        <label class="col-sm-3 control-label no-padding-right">Access role</label>
        <div class="col-sm-9">
            <?= $form->field($user, 'access_role', ['options' => ['tag' => false]])->dropDownList($role, ['prompt' => '- pilih role -'])->label(false) ?>

        </div>
    </div>

    <?= Html::submitButton('Save', ['class' => 'btn btn-primary waves-effect']) ?>

    <?php ActiveForm::end(); ?>

</div>