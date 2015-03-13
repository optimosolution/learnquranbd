<?php $this->beginContent('//layouts/main'); ?>
<div class="col-md-9">
    <?php echo $content; ?>
</div>
<div class="col-md-3">
    <section class="">
        <?php echo CHtml::link('<i class="fa fa-play-circle"></i> Read Live! QURAN', array('site/livequran'), array('class' => 'btn btn-primary btn-lg btn-block')); ?>                            
    </section>                        
    <div class="panel panel-theme">
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo ContentCategory::getCategoryName(2); ?></h3>
        </div>
        <div class="panel-body">
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