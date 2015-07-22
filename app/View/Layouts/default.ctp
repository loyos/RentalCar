<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Miami Beach Rental Car USA');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
	
		echo $this->Html->meta(
			'favicon.ico',
			'/favicon.ico',
			array('type' => 'icon')
		);
	
		// echo $this->Html->meta('icon');
		echo $this->Html->css('style');
		echo $this->Html->css('jquery-ui');
		echo $this->Html->script('jquery-2.1.4.min');
		echo $this->Html->script('jquery-ui');
		echo $this->Html->css('bjqs');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="container">
		<div id="header">
			<div class="black-header">
			<div class="main-menu navbar navbar-inverse" role="navigation">
				<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<div class="nav navbar-nav navbar-left">
		      		<a href="index.php">
						<!-- <img src="images/logo.png" style="width:120px; margin-top:5px;"> -->
						<?php echo $this->Html->link($this->Html->image('logo.png', array('style' => 'width:120px; margin-top:5px;')), array('controller' => 'index', 'action' => 'index'), array('escape'=> false)); ?>
						<?php // echo $this->Html->image('logo.png', array('style' => 'width:120px; margin-top:5px;')); ?>
					</a>
		      	</div>
		      	<div class="collapse navbar-collapse" id="collapse">
					<ul class="nav navbar-nav navbar-right">
						<li> <?php echo $this->Html->link('HOME',array('controller' => 'index', 'action' => 'index')); ?></li>
						<li> <?php echo $this->Html->link('VEHICLES',array('controller' => 'index', 'action' => 'vehicles')); ?></li>
						<li> <?php echo $this->Html->link('YACHT',array('controller' => 'index', 'action' => 'yacht')); ?></li>
						<li> <?php echo $this->Html->link('CONTACT',array('controller' => 'index', 'action' => 'contact')); ?></li>
					</ul>
				</div>	
			</div>
		</div>
	</div>
	<div class = "content-o">
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<div class="content container" style="margin-top:20px;">
			<div class="footer row">
				<ul>
					<div class="col-md-4">
						<li>
							<h1>About Us</h1>
							<p>
								Miami Beach Rental Car USA TFS is an innovative rental car company. We specialize in providing our clients with unmatched services.<br/><a href="#">Read more</a> 
							</p>
						</li>
					</div>
					<div class="col-md-4">
						<li>
							<h1>Main office</h1>
							<p>
								Miami Beach<br/>
								143 Collins Ave<br/>
								Miami Beach, FL 33139<br/>
								(786)617-6690
							</p>
						</li>
					</div>
					<div class="col-md-4">
						<li>
							<h1>Hours</h1>
							<p>
								Monday - Friday 9am to 5pm<br/>
								Saturday 10am to 6pm<br/>
								Sunday 10am tp 5pm
							</p>
						</li>
					</div>
				</ul>
			</div>
		</div>
	</div>
		</div>
	</div>
	<?php // echo $this->element('sql_dump'); ?>
</body>
</html>

<script>
	$( "#flashMessage" ).fadeOut( 5000 );
</script>
