<?php
/* @var $this RegisterController */
/* @var $model Register */
/* @var $form TbActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
        'id' => 'register-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
    ));
    ?>

    <p class="help-block">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->textFieldControlGroup($model, 'full_name', array('span' => 10, 'maxlength' => 150, 'class' => 'form-control')); ?>

    <?php echo $form->textFieldControlGroup($model, 'email', array('span' => 10, 'maxlength' => 150, 'class' => 'form-control')); ?>

    <?php echo $form->textFieldControlGroup($model, 'city_state', array('span' => 10, 'maxlength' => 100, 'class' => 'form-control')); ?>

    <?php echo $form->textFieldControlGroup($model, 'phone_number', array('span' => 10, 'maxlength' => 100, 'class' => 'form-control')); ?>

    <?php echo $form->textFieldControlGroup($model, 'skype_id', array('span' => 10, 'maxlength' => 100, 'class' => 'form-control')); ?>

    <div class="form-actions" style="margin-top: 20px;">
        <?php
        echo TbHtml::submitButton($model->isNewRecord ? 'Register' : 'Save', array(
            'color' => TbHtml::BUTTON_COLOR_PRIMARY,
            'size' => TbHtml::BUTTON_SIZE_LARGE,
        ));
        ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->