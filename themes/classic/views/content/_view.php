<?php
/* @var $this ContentController */
/* @var $data Content */
?>
<h3><?php echo CHtml::link($data->title, array('view', 'id' => $data->id)); ?></h3>
<p><?php echo $this->text_cut(htmlspecialchars_decode(CHtml::encode($data->introtext)), 500); ?></p>
<?php echo CHtml::link('Read more<i class="fa fa-chevron-right"></i>', array('view', 'id' => $data->id), array('class' => 'btn btn-theme read-more', 'style' => 'width:120px;')); ?>
<hr />