<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form TbActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>
<?php if (Yii::app()->user->hasFlash('contact')): ?>

    <?php
    $this->widget('bootstrap.widgets.TbAlert', array(
        'alerts' => array('contact'),
    ));
    ?>
<?php else: ?>
    <article class="contact-form page-row">                            
        <h3>Get in touch with us by filling <strong>contact form below</strong></h3>
        <p> If you have business inquiries or other questions, please fill out the following form to contact us. Thank you. </p>
        <?php
        $form = $this->beginWidget('CActiveForm', array(
            'id' => 'contact-form',
            'enableClientValidation' => true,
            'clientOptions' => array(
                'validateOnSubmit' => true,
            ),
            'htmlOptions' => array('class' => 'validateform'),
        ));
        ?>
        <?php echo $form->errorSummary($model); ?>
        <div class="form-group name">
            <label for="name">Name<span class="required">*</span></label>
            <?php echo $form->textField($model, 'name', array('placeholder' => 'Enter your name', 'class' => 'form-control')); ?>
        </div><!--//form-group-->
        <div class="form-group email">
            <label for="email">Email<span class="required">*</span></label>
            <?php echo $form->textField($model, 'email', array('placeholder' => 'Enter your email', 'class' => 'form-control')); ?>
        </div><!--//form-group-->
        <div class="form-group phone">
            <label for="phone">Phone</label>
            <?php echo $form->textField($model, 'phone', array('placeholder' => 'Enter your phone number', 'class' => 'form-control')); ?>
        </div><!--//form-group-->
        <div class="form-group mobile">
            <label for="phone">Mobile</label>
            <?php echo $form->textField($model, 'mobile', array('placeholder' => 'Enter your mobile number', 'class' => 'form-control')); ?>
        </div><!--//form-group-->
        <div class="form-group skype">
            <label for="phone">Skype</label>
            <?php echo $form->textField($model, 'skype', array('placeholder' => 'Enter your skype id', 'class' => 'form-control')); ?>
        </div><!--//form-group-->
        <div class="form-group skype">
            <label for="phone">Subject</label>
            <?php echo $form->textField($model, 'subject', array('placeholder' => 'Enter message subject', 'class' => 'form-control')); ?>
        </div><!--//form-group-->
        <div class="form-group message">
            <label for="message">Message<span class="required">*</span></label>
            <?php echo $form->textArea($model, 'body', array('rows' => 6, 'class' => 'form-control', 'placeholder' => 'Enter your message here...')); ?>
        </div><!--//form-group-->
        <div class="form-group capcha">
            <?php if (CCaptcha::checkRequirements()): ?>
                <div class="row">
                    <?php //echo $form->labelEx($model, 'verifyCode'); ?>
                    <div>
                        <?php $this->widget('CCaptcha'); ?>
                        <?php echo $form->textField($model, 'verifyCode'); ?>
                    </div>
                    <div class="hint">Please enter the letters as they are shown in the image above. Letters are not case-sensitive.</div>
                    <?php echo $form->error($model, 'verifyCode'); ?>
                </div>
            <?php endif; ?>
        </div>
        <?php echo CHtml::submitButton('Send message', array('class' => 'btn btn-theme')); ?>
        <?php $this->endWidget(); ?>             
    </article>
<?php endif; ?>
<br /><br />