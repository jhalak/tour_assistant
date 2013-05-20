<div class="login-container row">
  <div class="span6 offset1">
    <h3>
      <?php echo __("Wanna make your tour cost calculation automated?"); ?>
      <?php echo $this->Html->link(__('Join'), array('controller' => 'users', 'action' => 'register')); ?>
      <?php echo __("OR LogIn here -------->"); ?>
    </h3>
  </div>
  <div class="span4 login-form clearfix">
  <?php echo $this->Session->flash(); ?>
    <h2><?php echo __("Login"); ?></h2>
  <?php echo $this->Form->create('User', array('class' => 'form-horizontal')); ?>
      <div class="control-group">
        <div class="controls">
          <?php echo $this->Form->input('username', array('class' => '')); ?>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <?php echo $this->Form->input('password', array('class' => '')); ?>
        </div>
      </div>
      <div class="control-group">
        <div class="controls">
          <?php echo $this->Form->submit(__('Login'), array('class' => 'btn btn-primary')); ?>
        </div>
      </div>
  <?php echo $this->Form->end(); ?>
  </div>
</div>