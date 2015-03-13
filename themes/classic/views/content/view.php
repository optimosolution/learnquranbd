<?php
$this->pageTitle = $model->title . '-' . Yii::app()->name;
$this->breadcrumbs = array(
    $model->title,
);
?>
<div class="row">
    <div class="col-md-9">
        <h3 class="no-margin-top has-divider text-highlight"><?php echo $model->title; ?></h3>
        <?php
        $this->widget('application.extensions.SocialShareButton.SocialShareButton', array(
            'style' => 'horizontal',
            'networks' => array('facebook', 'googleplus', 'linkedin', 'twitter'),
            'data_via' => '', //twitter username (for twitter only, if exists else leave empty)
        ));
        ?>
        <p><?php echo $model->introtext; ?></p>
        <?php
        $this->widget('application.extensions.fb-comment.FBComment', array(
            'url' => Yii::app()->createAbsoluteUrl(Yii::app()->request->url), // required site url
            'posts' => 20, // optional no. of posts (default: 10)
            'width' => 850, // optional width of comment box (default: 470)
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

