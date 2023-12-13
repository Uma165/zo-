<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var app\models\Applications $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;
use yii\widgets\MaskedInput;
;

$this->title = 'Отправка заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Пожалуйста заполните все поля:</p>

    <div class="row">
        <div class="col-lg-5">

            <?php $form = ActiveForm::begin([
                'id' => 'login-form',
                'fieldConfig' => [
                    'template' => "{label}\n{input}\n{error}",
                    'labelOptions' => ['class' => 'col-lg-1 col-form-label mr-lg-3'],
                    'inputOptions' => ['class' => 'col-lg-3 form-control'],
                    'errorOptions' => ['class' => 'col-lg-7 invalid-feedback'],
                ],
            ]); ?>

            <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'surname')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'email')->textInput(['autofocus' => true]) ?>

            <?= $form->field($model, 'phone')->widget(MaskedInput::class, ['mask' => '+7(999)-999-99-99']) ?>

            <?= $form->field($model, 'date')->textInput(['type' => 'date']); ?>



            <div class="form-group">
                <div>
                    <?= Html::submitButton('Отправить', ['class' => 'text-white btn btn-info', 'name' => 'login-button']) ?>
                </div>
            </div>

            <?php ActiveForm::end(); ?>


        </div>
    </div>
</div>
