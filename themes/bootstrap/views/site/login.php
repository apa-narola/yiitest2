<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle = Yii::app()->name . ' - Login';
$this->breadcrumbs = array(
    'Login',
);
?>

<h1>Login</h1>

<div class="alert alert-info">Please fill out the following form with your login credentials:</div>


<?php
$form = $this->beginWidget('CActiveForm', array(
    'id' => 'login-form',
    'htmlOptions' => array('role' => 'form'),
    'enableClientValidation' => true,
    'clientOptions' => array(
	'validateOnSubmit' => true,
    ),
	));
?>
<div class="row">
	<div class="col-md-6">
		<p class="note">Fields with <span class="required">*</span> are required.</p>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'username'); ?>
			<?php echo $form->textField($model, 'username', array("class" => "form-control")); ?>

			<?php echo $form->error($model, 'username'); ?>
		</div>

		<div class="form-group">
			<?php echo $form->labelEx($model, 'password'); ?>

			<?php echo $form->passwordField($model, 'password', array("class" => "form-control")); ?>

			<?php echo $form->error($model, 'password'); ?>
			<span class="help-block">
				Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.
			</span>
		</div>
		<div class="form-group">
			<div class="checkbox">
				<?php echo $form->checkBox($model, 'rememberMe'); ?>
				<?php echo $form->label($model, 'rememberMe'); ?>
				<?php echo $form->error($model, 'rememberMe'); ?>
			</div>
		</div>
		<div class="form-group">
			<?php echo CHtml::submitButton('Sign in', array('class' => 'btn btn-default')); ?>
		</div>

	</div>
</div>
<div class="clearfix"></div>
<?php $this->endWidget(); ?>

