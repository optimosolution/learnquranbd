<?php
/* @var $this RegisterController */
/* @var $model Register */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5,'maxlength'=>11)); ?>

                    <?php echo $form->textFieldControlGroup($model,'full_name',array('span'=>5,'maxlength'=>150)); ?>

                    <?php echo $form->textFieldControlGroup($model,'email',array('span'=>5,'maxlength'=>150)); ?>

                    <?php echo $form->textFieldControlGroup($model,'city_state',array('span'=>5,'maxlength'=>100)); ?>

                    <?php echo $form->textFieldControlGroup($model,'phone_number',array('span'=>5,'maxlength'=>100)); ?>

                    <?php echo $form->textFieldControlGroup($model,'skype_id',array('span'=>5,'maxlength'=>100)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->