<div class="panel panel-default">
    <div class="panel-heading">
        Введите email:
    </div>
    <div class="panel-body">
        <div class="form">
            <?php $form = $this->beginWidget('CActiveForm'); ?>

            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                <?php echo $form->label($model,'email'); ?>
                <?php echo $form->textField($model,'email') ?>
            </div>

            <div class="row submit">
                <?php echo CHtml::submitButton('Получить ссылку'); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div>
    </div>
</div>
