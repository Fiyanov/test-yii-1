<?php
/**
 * Created by PhpStorm.
 * User: IF
 * Date: 20.10.2017
 * Time: 23:35
 */
?>

<div class="panel panel-default">
    <div class="panel-heading">Кабинет</div>
    <div class="panel-body">
        <div class="row">
            <h4>Сменить имя</h4>
            <div class="form">
                <?php $form = $this->beginWidget('CActiveForm'); ?>

                <?php echo $form->errorSummary($model); ?>

                <div class="row">
                    <?php echo $form->label($model,'name'); ?>
                    <?php echo $form->textField($model,'name') ?>
                </div>

                <div class="row submit">
                    <?php echo CHtml::submitButton('изменить имя'); ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
        <hr>
        <div class="row">
            <h4>Баланс:</h4>
            <p>
                <?=$model->balance?>
            </p>
        </div>
        <hr>
        <div class="row">
            <h4>API ключ:</h4>
            <div class="message done">
                <?=$key?>
            </div>
        </div>
        <hr>
        <div class="row">
            <?php $form = $this->beginWidget('CActiveForm'); ?>
                <?php echo CHtml::submitButton('выйти', ['class' => 'btn btn-danger', 'name'=>'exit']); ?>
            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>