<?php
// echo '<pre>';print_r('tes');die;

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

?>

<div class="page-wrapper">
    <div class="page-content--bge5">
        <div class="container">
            <div class="login-wrap">
                <div class="login-content">
                    <div class="login-logo">
                        <a href="#">
                            <img src="images/icon/logo.png" alt="CoolAdmin">
                        </a>
                    </div>
                    <div class="login-form">
                        <?php $form = ActiveForm::begin([
                            'options' => [
                                'id' => 'form_validation',
                            ]
                        ]); ?>



                        <div class="form-group">
                            <?= $form->field($model, 'username', ['options' => ['tag' => false]])->textInput(['class' => 'au-input au-input--full', 'maxlength' => true, 'placeholder' => 'Username'])->label('Username') ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'email', ['options' => ['tag' => false]])->textInput(['class' => 'au-input au-input--full', 'maxlength' => true, 'placeholder' => 'Email'])->label('Email Address') ?>
                        </div>

                        <div class="form-group">
                            <?= $form->field($model, 'password', ['options' => ['tag' => false]])->passwordInput(['class' => 'au-input au-input--full', 'maxlength' => true, 'placeholder' => 'Enter new password again', 'onkeyup' => 'checkPassword()'])->label('Password') ?>
                        </div>

                        <code><p id="invalid"></p></code>

                        <div class="form-group">
                            <?= $form->field($model, 'otp', ['options' => ['tag' => false]])->passwordInput(['class' => 'au-input au-input--full', 'maxlength' => true, 'placeholder' => 'Enter your password again', 'onkeyup' => 'checkPassword()'])->label('Password Validation') ?>
                        </div>
                        

                        <?= Html::submitButton('register', ['class' => 'au-btn au-btn--block au-btn--green m-b-20 btn btn-success btn-register', 'disabled'=>true]) ?>

                        <?php ActiveForm::end(); ?>

                        <div class="register-link">
                            <p>
                                Already have account?
                                <!-- <a href="#">Sign In</a> -->
                                <?= Html::a('Sign In', ['site/login']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

function checkPassword() {

    if ($('#user-otp').val() != null && $('#user-password').val() != null && $('#user-password').val() == $('#user-otp').val()) {
        $(':button[type="submit"]').prop('disabled', false)
        $('#invalid').text('')
    }else{
        $(':button[type="submit"]').prop('disabled', true)
        $('#invalid').text('Invalid Password')
    }
}


</script>