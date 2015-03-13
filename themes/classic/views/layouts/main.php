<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
    <head>
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="S.M. Saidur Rahman">
        <meta name="generator" content="Optimo Solution" />    
        <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/images/favicon.ico">  
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>   
        <!-- Global CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/css/bootstrap.min.css">   
        <!-- Plugins CSS -->    
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/flexslider/flexslider.css">
        <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/pretty-photo/css/prettyPhoto.css"> 
        <!-- Theme CSS -->  
        <link id="theme-style" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/assets/css/styles.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head> 
    <body class="home-page">
        <div class="wrapper">
            <!-- ******HEADER****** --> 
            <header class="header">  
                <div class="top-bar">
                    <div class="container">              
                        <ul class="social-icons col-md-6 col-sm-6 col-xs-12 hidden-xs">
                            <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/learnquranbd" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>         
                            <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>             
                        </ul><!--//social-icons-->
                        <form class="pull-right search-form" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search the site...">
                            </div>
                            <button type="submit" class="btn btn-theme">Go</button>
                        </form>         
                    </div>      
                </div><!--//to-bar-->
                <div class="header-main container">
                    <h1 class="logo col-md-4 col-sm-4">
                        <?php $banner = CHtml::image(Yii::app()->theme->baseUrl . '/assets/images/logo.png', Yii::app()->name, array("title" => Yii::app()->name, 'id' => 'logo')); ?> 
                        <?php echo CHtml::link($banner, array('site/index'), array('class' => '')); ?>                        
                    </h1><!--//logo-->           
                    <div class="info col-md-8 col-sm-8">
                        <ul class="menu-top navbar-right hidden-xs">
                            <li><?php echo CHtml::link(ExtraText::get_title(1), array('site/index'), array('class' => 'divider', 'style' => 'font-size:16px;')); ?></li>
                            <li><?php echo CHtml::link(ExtraText::get_title(4), array('register/create'), array('class' => '', 'style' => 'font-size:16px;')); ?></li>
                        </ul><!--//menu-top-->
                        <br />
                        <div class="contact pull-right">
                            <p class="phone"><i class="fa fa-phone"></i>Call us today +88-0155-2687-555<br /><span style="margin-left:105px;">+88-011-9534-2003</span></p> 
                            <p class="email"><i class="fa fa-envelope"></i><a href="mailto:learnquranbd@gmail.com">learnquranbd@gmail.com</a><br /><i class="fa fa-skype"></i> learnquranbd</p>
                        </div><!--//contact-->
                    </div><!--//info-->
                </div><!--//header-main-->
            </header><!--//header-->

            <!-- ******NAV****** -->
            <nav class="main-nav" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button><!--//nav-toggle-->
                    </div><!--//navbar-header-->            
                    <div class="navbar-collapse collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li class="active nav-item">
                                <?php echo CHtml::link(ExtraText::get_title(1), array('site/index'), array('class' => '', 'style' => 'font-size:18px;')); ?>
                            </li>                            
                            <li class="nav-item">
                                <?php echo CHtml::link(ExtraText::get_title(2), array('content/view', 'id' => 5), array('class' => '', 'style' => 'font-size:18px;')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo CHtml::link(ExtraText::get_title(3), array('content/view', 'id' => 6), array('class' => '', 'style' => 'font-size:18px;')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo CHtml::link(ExtraText::get_title(6), array('content/view', 'id' => 3), array('class' => '', 'style' => 'font-size:18px;')); ?>
                            </li>
                            <li class="nav-item">
                                <?php echo CHtml::link(ExtraText::get_title(9), array('content/view', 'id' => 4), array('class' => '', 'style' => 'font-size:18px;')); ?>
                            </li>
                            <li class="nav-item dropdown">
                                <?php echo CHtml::link(ContentCategory::getCategoryName(7) . '<i class="fa fa-angle-down"></i>', array('content/view', 'id' => 4), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'data-hover' => 'dropdown', 'data-delay' => '0', 'data-close-others' => 'false', 'style' => 'font-size:18px;')); ?>                                
                                <ul class="dropdown-menu">
                                    <?php echo $this->get_sub_menu(7); ?>         
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <?php echo CHtml::link(ContentCategory::getCategoryName(10) . '<i class="fa fa-angle-down"></i>', array('content/view', 'id' => 4), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'data-hover' => 'dropdown', 'data-delay' => '0', 'data-close-others' => 'false', 'style' => 'font-size:18px;')); ?>                                
                                <ul class="dropdown-menu">
                                    <?php echo $this->get_sub_menu(10); ?>         
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <?php echo CHtml::link(ContentCategory::getCategoryName(14) . '<i class="fa fa-angle-down"></i>', array('content/view', 'id' => 4), array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'data-hover' => 'dropdown', 'data-delay' => '0', 'data-close-others' => 'false', 'style' => 'font-size:18px;')); ?>                                
                                <ul class="dropdown-menu">
                                    <?php echo $this->get_sub_menu(14); ?>         
                                </ul>
                            </li>
                            <li class="nav-item">
                                <?php echo CHtml::link(ExtraText::get_title(4), array('register/create'), array('class' => '', 'style' => 'font-size:18px;')); ?>
                            </li>
                        </ul><!--//nav-->
                    </div><!--//navabr-collapse-->
                </div><!--//container-->
            </nav><!--//main-nav-->

            <!-- ******CONTENT****** --> 
            <div class="content container">
                <section class="promo box box-dark">        
                    <div class="col-md-9">
                        <h1 class="section-heading">Free! 3 Trial Classes</h1>
                        <p>Please fill in the Registration form for LIVE 1 to 1 online Quran classes and InshaAllah we will give you call back by Mobile/Skype to setup FREE TRIAL to start classes.</p>   
                    </div>  
                    <div class="col-md-3">
                        <?php echo CHtml::link('<i class="fa fa-play-circle"></i> Register Now', array('register/create'), array('class' => 'btn btn-cta')); ?>                            
                    </div>
                </section><!--//promo-->
                <div class="row cols-wrapper">
                    <?php
                    $this->widget('bootstrap.widgets.TbAlert', array(
                        'block' => true,
                        'fade' => true,
                        'closeText' => '&times;',
                    ));
                    ?>
                    <?php echo $content; ?>
                </div><!--//cols-wrapper-->
            </div><!--//content-->
        </div><!--//wrapper-->
        <!-- ******FOOTER****** --> 
        <footer class="footer">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="footer-col col-md-3 col-sm-12 contact">
                            <div class="footer-col-inner">
                                <h3>Contact us</h3>
                                <div class="row">
                                    <p class="tel col-md-12 col-sm-4"><i class="fa fa-user"></i><b>Sakil Alam</b></p>
                                    <p class="tel col-md-12 col-sm-4"><i class="fa fa-phone"></i>+88-0155-2687-555</p>
                                    <p class="tel col-md-12 col-sm-4"><i class="fa fa-mobile"></i>+88-011-9534-2003</p>
                                </div> 
                            </div><!--//footer-col-inner-->            
                        </div><!--//foooter-col-->  
                        <div class="footer-col col-md-3 col-sm-12 contact">
                            <div class="footer-col-inner">
                                <h3>&nbsp;</h3>
                                <div class="row">
                                    <p>&nbsp;</p>
                                    <p class="email col-md-12 col-sm-4"><i class="fa fa-envelope"></i><a href="mailto:learnquranbd@gmail.com">learnquranbd@gmail.com</a></p>  
                                    <p class="email col-md-12 col-sm-4"><i class="fa fa-skype"></i>learnquranbd</p>  
                                </div> 
                            </div><!--//footer-col-inner-->            
                        </div><!--//foooter-col-->  
                        <div class="footer-col col-md-6 col-sm-12 contact">
                            <div class="footer-col-inner">
                                <h4>EDITORIAL CHOICE</h4>
                                <?php Content::get_feature_home(); ?>
                            </div><!--//footer-col-inner-->            
                        </div><!--//foooter-col-->  
                    </div>   
                </div>        
            </div><!--//footer-content-->
            <div class="bottom-bar">
                <div class="container">
                    <div class="row">
                        <small class="copyright col-md-6 col-sm-12 col-xs-12">Copyright &copy; 2010 - <?php echo date('Y'); ?> <?php echo Yii::app()->name; ?> | Website developed by <?php echo CHtml::link('Optimo Solution', 'http://www.optimosolution.com', array('target' => '_blank')); ?></small>
                        <ul class="social pull-right col-md-6 col-sm-12 col-xs-12">
                            <li><a href="#" ><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/learnquranbd" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" ><i class="fa fa-youtube"></i></a></li>
                            <li><a href="#" ><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#" ><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" ><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#" ><i class="fa fa-skype"></i></a></li> 
                            <li class="row-end"><a href="#" ><i class="fa fa-rss"></i></a></li>
                        </ul><!--//social-->
                    </div><!--//row-->
                </div><!--//container-->
            </div><!--//bottom-bar-->
        </footer><!--//footer-->
        <!-- Javascript -->          
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery-1.10.2.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/bootstrap-hover-dropdown.min.js"></script> 
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/back-to-top.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jquery-placeholder/jquery.placeholder.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/pretty-photo/js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/flexslider/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/plugins/jflickrfeed/jflickrfeed.min.js"></script> 
        <script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/assets/js/main.js"></script>            
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-39621594-3', 'learnquranbd.com');
            ga('send', 'pageview');

        </script>
    </body>
</html> 
