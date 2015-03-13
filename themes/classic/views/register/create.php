<?php
/* @var $this RegisterController */
/* @var $model Register */
?>

<?php
$this->pageTitle = 'Student Registration -' . Yii::app()->name;
$this->breadcrumbs = array(
    'Registers' => array('create'),
    'Create',
);
?>
<h3 class="no-margin-top has-divider text-highlight">Student Registration</h3>
<?php $this->renderPartial('_form', array('model' => $model)); ?>