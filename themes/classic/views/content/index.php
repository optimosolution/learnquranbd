<?php
/* @var $this ContentController */
/* @var $dataProvider CActiveDataProvider */
$this->pageTitle = ContentCategory::getCategoryName($_GET['id']) . '-' . Yii::app()->name;
$this->breadcrumbs = array(
    ContentCategory::getCategoryName($_GET['id']),
);
?>
<header class="page-heading clearfix">
    <h1 class="heading-title pull-left"><?php echo ContentCategory::getCategoryName($_GET['id']); ?></h1>
</header> 
<div class="row">
    <div class="col-md-9">
        <?php
        $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'template' => '{items}{pager}',
            'itemView' => '_view',
            'pager' => array(
                'header' => '',
                'prevPageLabel' => '<i class="fa fa-backward"></i>',
                'nextPageLabel' => '<i class="fa fa-forward"></i>',
                'firstPageLabel' => '<i class="fa fa-fast-backward"></i>',
                'lastPageLabel' => '<i class="fa fa-fast-forward"></i>',
                'selectedPageCssClass' => 'active', //default "selected"
                'maxButtonCount' => 10, // defalut 10  
                'htmlOptions' => array(
                    'class' => 'pagination',
                    'style' => '',
                    'id' => '',
                ),
            ),
        ));
        ?>
    </div>
    <div class="col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">RECENT ARTICLE</div>
            <div class="panel-body">
                <?php Content::get_recent(); ?>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading">POPULAR ARTICLE</div>
            <div class="panel-body">
                <?php Content::get_popular(); ?>
            </div>
        </div>
        <div class="panel panel-info">
            <div class="panel-heading">EDITORIAL CHOICE</div>
            <div class="panel-body">
                <?php Content::get_feature(); ?>
            </div>
        </div>
        <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Flearnquranbd&amp;width=260&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=1449677188603569" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:290px;" allowTransparency="true"></iframe>
    </div>
</div>
