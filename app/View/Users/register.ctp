<div class="register-container row">
  <div class="span4 offset1">
    <h3>
      <?php echo __("You are just ONE step behind of making your TOURS \"hakuna mutata\" (no worries)"); ?>
      <?php echo $this->Html->link(__('Login'), array('controller' => 'users', 'action' => 'add')); ?>
      <?php echo __("OR Join here ----->"); ?>
    </h3>
  </div>
  <div class="span6 login-form clearfix">
    <?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
    <fieldset>
      <h2><?php echo __('Create an account'); ?></h2>

      <?php echo $this->Form->input('id', array('class' => '')); ?>

      <div class="control-group">
        <?php echo $this->Form->label('name', 'Name', array('class' => 'control-label'));?>
        <div class="controls">
          <?php echo $this->Form->input('name', array('class' => '')); ?>
        </div>
        <!-- .controls -->
      </div>
      <!-- .control-group -->
      <?php if ($action != 'edit'): ?>

      <?php endif; ?>
      <?php $class = $action == 'edit' ? 'hidden' : ''; ?>
      <div class="control-group <?php echo $class; ?>">
        <?php echo $this->Form->label('email', 'Email', array('class' => 'control-label'));?>
        <div class="controls">
          <?php echo $this->Form->input('email', array('class' => '')); ?>
        </div>
        <!-- .controls -->
      </div>
      <!-- .control-group -->

      <div class="control-group <?php echo $class; ?>">
        <?php echo $this->Form->label('username', 'Username', array('class' => 'control-label'));?>
        <div class="controls">
          <?php echo $this->Form->input('username', array('class' => '')); ?>
        </div>
        <!-- .controls -->
      </div>
      <!-- .control-group -->


      <div class="control-group">
        <?php echo $this->Form->label('password', 'Password', array('class' => 'control-label'));?>
        <div class="controls">
          <?php echo $this->Form->input('password', array('value' => '', 'class' => '')); ?>
        </div>
        <!-- .controls -->
      </div>
      <!-- .control-group -->

      <div class="control-group hidden">
        <?php echo $this->Form->label('group_id', 'group_id', array('class' => 'control-label'));?>
        <div class="controls">
          <?php echo $this->Form->input('group_id', array('class' => '', 'default' => 2)); ?>
        </div>
        <!-- .controls -->
      </div>
      <!-- .control-group -->
    </fieldset>
    <?php echo $this->Form->submit('Please create one', array('class' => 'btn btn-primary')); ?>
    <?php echo $this->Form->end(); ?>
  </div>