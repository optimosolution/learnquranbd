<?php $this->beginContent('//layouts/main'); ?>
<div class="col-md-3">
    <section class="testimonials">
        <h1 class="section-heading text-highlight"><span class="line"> <?php echo ExtraText::get_title(2); ?></span></h1>
        <div class="carousel-controls">
            <a data-slide="prev" href="#testimonials-carousel1" class="prev"><i class="fa fa-caret-left"></i></a>
            <a data-slide="next" href="#testimonials-carousel1" class="next"><i class="fa fa-caret-right"></i></a>
        </div><!--//carousel-controls-->
        <div class="section-content">
            <div class="testimonials-carousel carousel slide" id="testimonials-carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                        <blockquote class="quote">      
                            <h4><?php echo Content::get_title(7); ?></h4>
                            <p><i class="fa fa-quote-left"></i><?php echo Content::get_introtext(7); ?></p>
                        </blockquote>                              
                    </div><!--//item-->
                    <div class="item">
                        <blockquote class="quote">
                            <h4><?php echo Content::get_title(8); ?></h4>
                            <p><i class="fa fa-quote-left"></i><?php echo Content::get_introtext(8); ?></p>
                        </blockquote>                 
                    </div><!--//item-->
                    <div class="item">
                        <blockquote class="quote">
                            <h4><?php echo Content::get_title(9); ?></h4>
                            <p><i class="fa fa-quote-left"></i><?php echo Content::get_introtext(9); ?></p>
                        </blockquote>                
                    </div><!--//item-->

                </div><!--//carousel-inner-->
            </div><!--//testimonials-carousel-->
        </div><!--//section-content-->
    </section>
    <section class="links">
        <h1 class="section-heading text-highlight"><span class="line"><?php echo Content::get_title(10); ?></span></h1>
        <div class="section-content">
            <?php echo Content::get_introtext(10); ?>
        </div><!--//section-content-->
    </section><!--//links-->
    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Flearnquranbd&amp;width=260&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=1449677188603569" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:290px;" allowTransparency="true"></iframe>
</div><!--//col-md-3-->
<div class="col-md-6">
    <?php echo $content; ?>
</div>
<div class="col-md-3">
    <section class="">
        <?php $livequran = CHtml::image(Yii::app()->theme->baseUrl . '/assets/images/live_quran.jpg', 'Live Quran', array("title" => 'Live Quran', 'style' => 'width:260px;')); ?> 
        <?php echo CHtml::link($livequran, array('site/livequran'), array('class' => '')); ?>       
        <?php //echo CHtml::link('<i class="fa fa-play-circle"></i> Read Live! QURAN', array('site/livequran'), array('class' => 'btn btn-primary btn-lg btn-block')); ?>                            
    </section>                        
    <div class="panel panel-theme">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo ContentCategory::getCategoryName(2); ?></h3>
        </div>
        <div class="panel-body">
            <?php echo CHtml::image(Yii::app()->theme->baseUrl . '/assets/images/news_notice.jpg', 'News', array("title" => 'News', 'style' => 'width:240px;')); ?> 
            <?php $this->get_newses(2); ?>
        </div>
    </div>
    <div class="panel panel-theme">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo ContentCategory::getCategoryName(5); ?></h3>
        </div>
        <div class="panel-body">
            <?php $this->get_newses(5); ?>
        </div>
    </div>

    <section class="testimonials">
        <h1 class="section-heading text-highlight"><span class="line"> <?php echo ExtraText::get_title(8); ?></span></h1>
        <div class="carousel-controls">
            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fa fa-caret-left"></i></a>
            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fa fa-caret-right"></i></a>
        </div><!--//carousel-controls-->
        <div class="section-content">
            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                <div class="carousel-inner">
                    <?php $this->get_testimonial_home(); ?>
                </div><!--//carousel-inner-->
            </div><!--//testimonials-carousel-->
        </div><!--//section-content-->
    </section><!--//testimonials-->
</div><!--//col-md-3-->
<?php $this->endContent(); ?>