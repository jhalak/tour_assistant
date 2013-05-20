<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <?php echo $this->Html->charset(); ?>
  <title>
    <?php echo __('Tour Assistant'); ?>:
    <?php echo $title_for_layout; ?>
  </title>
  <?php
  echo $this->Html->meta('icon');

  echo $this->fetch('meta');

  echo $this->Html->css('bootstrap.min');
  echo $this->Html->css('bootstrap-responsive.min');
  echo $this->Html->css('core');

  echo $this->Html->css('stylesheets/screen');

  echo $this->Html->css(array("http://fonts.googleapis.com/css?family=Domine|Life+Savers|Elsie+Swash+Caps:400,900"));

  echo $this->fetch('css');

  echo $this->Html->script('libs/jquery');
  echo $this->Html->script('libs/bootstrap.min');

  echo $this->fetch('script');
  ?>
</head>

<body>

<div id="main-container" class="container">

  <div id="header" class="container">
    <?php echo $this->element('menu/top_menu'); ?>
  </div>
  <!-- #header .container -->

  <div id="content" class="container">
    <div id="page-container" class="row-fluid">

      <?php if ($left_sidebar):?>
      <div id="sidebar" class="span3">
        <div class="actions well">
          <ul class="nav nav-list">
            <?php echo $this->element('leftnav'); ?>
          </ul>
          <!-- .nav nav-list bs-docs-sidenav -->
        </div>
      </div>
      <?php endif;?>
      <!-- #sidebar .span3 -->

      <?php $class = $left_sidebar ? 'span9 has-left-sidebar' : 'container'; ?>

      <div id="page-content" class="<?php echo $class;?>">
        <?php if (CakeSession::check('Message.')): ?>
          <div class="alert">
            <?php echo $this->Session->flash(); ?>
          </div>
        <?php endif;?>
        <?php echo $this->fetch('content'); ?>
      </div>
      <!-- #page-content .span9 -->

    </div>
    <!-- #page-container .row-fluid -->


  </div>
  <!-- #header .container -->

  <div id="footer" class="container">


    <?php //Silence is golden ?>
  </div>
  <!-- #footer .container -->

</div>
<!-- #main-container -->
<?php if ($sql_debug): ?>
<div class="container">
  <div class="well">
    <small>
      <?php echo $this->element('sql_dump'); ?>
    </small>
  </div>
</div>
<?php endif; ?>
<!-- .container -->

</body>

</html>