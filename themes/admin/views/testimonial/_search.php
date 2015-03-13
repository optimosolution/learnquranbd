<?php
/* @var $this TestimonialController */
/* @var $model Testimonial */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textAreaControlGroup($model,'testimonial',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'full_name',array('span'=>5,'maxlength'=>150)); ?>

                    <?php echo $form->textFieldControlGroup($model,'identity',array('span'=>5,'maxlength'=>150)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->