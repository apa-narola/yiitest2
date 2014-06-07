<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle = Yii::app()->name . ' - Contact Us';
$this->breadcrumbs = array(
    'Contact',
);
?>

<h1>Contact Us</h1>

<?php if (Yii::app()->user->hasFlash('contact')): ?>

	<div class="flash-success">
		<?php echo Yii::app()->user->getFlash('contact'); ?>
	</div>

<?php else: ?>

	<span class="help-block">
		If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
	</span>

	<div class="container">

		<?php
		$form = $this->beginWidget('BsActiveForm', array(
		    'id' => 'contact-form',
		    'htmlOptions' => array('role' => 'form', 'class' => 'form-horizontal'),
		    'enableClientValidation' => true,
		    'clientOptions' => array(
			'validateOnSubmit' => true,
		    ),
		));
		?>

															<!--	<p class="note">Fields with <span class="required">*</span> are required.</p>-->
		<span class="help-block">Fields with <span class="required">*</span> are required.</span>
		<?php echo $form->errorSummary($model); ?>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'name', array('class' => 'col-sm-2 control-label')); ?>
			<div class="col-sm-5">
				<?php echo $form->textField($model, 'name', array("class" => "form-control")); ?>
			</div>
			<?php echo $form->error($model, 'name'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'email', array('class' => 'col-sm-2 control-label')); ?>
			<div class="col-sm-5">
				<?php echo $form->textField($model, 'email', array("class" => "form-control")); ?>
			</div>
			<?php echo $form->error($model, 'email'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'subject', array('class' => 'col-sm-2 control-label')); ?>
			<div class="col-sm-5">
				<?php echo $form->textField($model, 'subject', array('size' => 60, 'maxlength' => 128, "class" => "form-control")); ?>
			</div>
			<?php echo $form->error($model, 'subject'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'body', array('class' => 'col-sm-2 control-label')); ?>
			<div class="col-sm-5">
				<?php echo $form->textArea($model, 'body', array('rows' => 6, 'cols' => 50, "class" => "form-control")); ?>
			</div>
			<?php echo $form->error($model, 'body'); ?>
		</div>

		<?php if (CCaptcha::checkRequirements()): ?>
			<div class="form-group">

				<?php echo $form->labelEx($model, 'verifyCode', array('class' => 'col-sm-2 control-label')); ?>

				<div class="col-sm-5">
					<?php $this->widget('CCaptcha'); ?>

					<?php echo $form->textField($model, 'verifyCode', array("class" => "form-control")); ?>
					<span class="help-block">Please enter the letters as they are shown in the image above.
						<br/>Letters are not case-sensitive.</span>
				</div>


				<?php echo $form->error($model, 'verifyCode'); ?>
			</div>
		<?php endif; ?>
		<div class="form-group">
			<?php echo $form->labelEx($model, 'tss', array('class' => 'col-sm-2 control-label sr-only')); ?>
			<div class="col-sm-5">
				<?php echo CHtml::submitButton('Submit', array('class' => 'btn btn-primary')); ?>
			</div>
		</div>
		<?php $this->endWidget(); ?>

	</div><!-- form -->

<?php endif; ?>