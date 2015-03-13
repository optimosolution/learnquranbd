<?php
/* @var $this TestimonialController */
/* @var $model Testimonial */
?>

<?php
$this->pageTitle = 'Testimonial details - ' . Yii::app()->name;
$this->breadcrumbs = array(
    'Testimonials' => array('admin'),
    $model->full_name,
);
?>
<div class="widget-box">
    <div class="widget-header">
        <h5>Details Testimonial (<?php echo $model->full_name; ?>)</h5>
        <div class="widget-toolbar">
            <a data-action="settings" href="#"><i class="icon-cog"></i></a>
            <a data-action="reload" href="#"><i class="icon-refresh"></i></a>
            <a data-action="collapse" href="#"><i class="icon-chevron-up"></i></a>
            <a data-action="close" href="#"><i class="icon-remove"></i></a>
        </div>
        <div class="widget-toolbar">
            <?php echo CHtml::link('<i class="icon-pencil"></i>', array('update', 'id' => $model->id), array('data-rel' => 'tooltip', 'title' => 'Edit', 'data-placement' => 'bottom')); ?>
        </div>
        <div class="widget-toolbar">
            <?php echo CHtml::link('<i class="icon-plus"></i>', array('create'), array('data-rel' => 'tooltip', 'title' => 'Add', 'data-placement' => 'bottom')); ?>
        </div>
    </div><!--/.widget-header -->
    <div class="widget-body">
        <div class="widget-main">
            <?php
            $this->widget('zii.widgets.CDetailView', array(
                'htmlOptions' => array(
                    'class' => 'table table-striped table-condensed table-hover',
                ),
                'data' => $model,
                'attributes' => array(
                    'id',
                    'testimonial',
                    'full_name',
                    'identity',
                ),
            ));
            ?>
        </div>
    </div><!--/.widget-body -->
</div><!--/.widget-box -->