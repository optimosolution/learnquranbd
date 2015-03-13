<?php
/* @var $this RegisterController */
/* @var $model Register */
?>

<?php
$this->breadcrumbs=array(
	'Registers'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Register', 'url'=>array('index')),
	array('label'=>'Create Register', 'url'=>array('create')),
	array('label'=>'Update Register', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Register', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Register', 'url'=>array('admin')),
);
?>

<h1>View Register #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'full_name',
		'email',
		'city_state',
		'phone_number',
		'skype_id',
	),
)); ?>