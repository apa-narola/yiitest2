<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />
		<!--<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.0.min.js"></script>-->
		<title><?php echo CHtml::encode($this->pageTitle); ?></title>
		<?php
		$cs = Yii::app()->clientScript;
		$themePath = Yii::app()->theme->baseUrl;

		/**
		 * StyleSHeets
		 */
		$cs->registerCssFile($themePath . '/assets/css/bootstrap.css');
		$cs->registerCssFile($themePath . '/assets/css/bootstrap-theme.css');

		/**
		 * JavaScripts
		 */
		$cs->registerCoreScript('jquery', CClientScript::POS_END);
		$cs->registerCoreScript('jquery.ui', CClientScript::POS_END);
		$cs->registerScriptFile($themePath . '/assets/js/bootstrap.min.js', CClientScript::POS_END);
		$cs->registerScript('tooltip', "$('[data-toggle=\"tooltip\"]').tooltip();$('[data-toggle=\"popover\"]').tooltip()", CClientScript::POS_READY);
		?>
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		    <script src="<?php
		echo Yii::app()->theme->baseUrl . '/assets/js/html5shiv.min.js';
		?>"></script>
		    <script src="<?php
		echo Yii::app()->theme->baseUrl . '/assets/js/respond.min.js';
		?>"></script>
		<![endif]-->

		<style type="text/css">
			body {
				padding-top: 20px;
				padding-bottom: 60px;
			}

			/* Custom container */
			.container {
				margin: 0 auto;
				max-width: 1000px;
			}
			.container > hr {
				margin: 60px 0;
			}

			/* Main marketing message and sign up button */
			.jumbotron {
				margin: 80px 0;
				text-align: center;
			}
			.jumbotron h1 {
				font-size: 100px;
				line-height: 1;
			}
			.jumbotron .lead {
				font-size: 24px;
				line-height: 1.25;
			}
			.jumbotron .btn {
				font-size: 21px;
				padding: 14px 24px;
			}

			/* Supporting marketing content */
			.marketing {
				margin: 60px 0;
			}
			.marketing p + h4 {
				margin-top: 28px;
			}


		</style>
	</head>

	<body>
		<div class="container">

			<div class="masthead">
				<h3 class="muted"><?php echo CHtml::encode(Yii::app()->name); ?></h3>
				<div class="navbar">
					<div class="navbar-inner">
						<div class="container">
							<?php
							$this->widget('bootstrap.widgets.BsNav', array(
							    'htmlOptions' => array('class' => 'nav-tabs'),
							    'items' => array(
								array('label' => 'Home', 'url' => array('/site/index')),
								array('label' => 'About', 'url' => array('/site/page', 'view' => 'about')),
								array('label' => 'Contact', 'url' => array('/site/contact')),
								array('url' => Yii::app()->getModule('user')->loginUrl, 'label' => Yii::app()->getModule('user')->t("Login"), 'visible' => Yii::app()->user->isGuest),
								array('url' => Yii::app()->getModule('user')->registrationUrl, 'label' => Yii::app()->getModule('user')->t("Register"), 'visible' => Yii::app()->user->isGuest),
								array('url' => Yii::app()->getModule('user')->profileUrl, 'label' => Yii::app()->getModule('user')->t("Profile"), 'visible' => !Yii::app()->user->isGuest),
								array('url' => Yii::app()->getModule('user')->logoutUrl, 'label' => Yii::app()->getModule('user')->t("Logout") . ' (' . Yii::app()->user->name . ')', 'visible' => !Yii::app()->user->isGuest),
							    ),
							));
							?>
						</div>
					</div>
				</div><!-- /.navbar -->
				<?php if (isset($this->breadcrumbs)): ?>

					<?php
					$this->widget('bootstrap.widgets.BsBreadcrumb', array(
					    'links' => $this->breadcrumbs,
					));
					?><!-- breadcrumbs -->
				<?php endif ?>
			</div>
			<?php echo $content; ?>

			<div class="clear"></div>



			<div class="footer">
				<p>Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
					All Rights Reserved.<br/>
					<?php echo Yii::powered(); ?></p>
			</div>

		</div> <!-- /container -->



	</body>
</html>
