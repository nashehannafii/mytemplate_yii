<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\users\UserSearch $user */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($user, 'id') ?>

    <?= $form->field($user, 'username') ?>

    <?= $form->field($user, 'uuid') ?>

    <?= $form->field($user, 'nama') ?>

    <?= $form->field($user, 'email') ?>

    <?php // echo $form->field($user, 'auth_key') ?>

    <?php // echo $form->field($user, 'password_hash') ?>

    <?php // echo $form->field($user, 'password_reset_token') ?>

    <?php // echo $form->field($user, 'account_activation_token') ?>

    <?php // echo $form->field($user, 'otp') ?>

    <?php // echo $form->field($user, 'status') ?>

    <?php // echo $form->field($user, 'access_role') ?>

    <?php // echo $form->field($user, 'created_at') ?>

    <?php // echo $form->field($user, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
