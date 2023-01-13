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

                        <?php $form = ActiveForm::begin(); ?>
                        <div class="form-group">

                            <?= $form->field($model, 'username')->textInput(['class' => "au-input au-input--full", 'placeholder'=>"Email"]) ?>
                        </div>

                        <div class="form-group">

                            <?= $form->field($model, 'password')->passwordInput(['class' => "au-input au-input--full", 'placeholder'=>"Password"]) ?>
                        </div>



                        <div class="login-checkbox">
                            <label>
                                <?= $form->field($model, 'rememberMe')->checkbox() ?>
                            </label>
                            <label>
                                <?= Html::a('Forgotten Password?', ['site/forgot-password']) ?>
                            </label>
                        </div>

                        <?= Html::submitButton('sign in', ['class' => 'au-btn au-btn--block au-btn--green m-b-20', 'name' => 'login-button']) ?>

                        <?php ActiveForm::end(); ?>

                        <!-- <div class="social-login-content">
                            <div class="social-button">
                                <button class="au-btn au-btn--block au-btn--blue m-b-20">sign in with facebook</button>
                                <button class="au-btn au-btn--block au-btn--blue2">sign in with twitter</button>
                            </div>
                        </div> -->

                        <div class="register-link">
                            <p>
                                Don't you have account?
                                <?= Html::a('Sign Up Here', ['site/signup']) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>