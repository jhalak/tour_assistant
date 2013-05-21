<div class="users form">
  <?php echo $this->Form->create('User', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
  <fieldset>
    <h2><?php echo $this->fetch('page_title'); ?></h2>

    <?php echo $this->Form->input('id', array('class' => '')); ?>

    <div class="control-group">
      <?php echo $this->Form->label('name', 'name', array('class' => 'control-label'));?>
      <div class="controls">
        <?php echo $this->Form->input('name', array('class' => '')); ?>
      </div>
    </div>

    <?php $class = $action == 'edit' ? 'hidden' : ''; ?>
    <div class="control-group <?php echo $class; ?>">
      <?php echo $this->Form->label('email', 'email', array('class' => 'control-label'));?>
      <div class="controls">
        <?php echo $this->Form->input('email', array('class' => '')); ?>
      </div>
    </div>

    <div class="control-group <?php echo $class; ?>">
      <?php echo $this->Form->label('username', 'username', array('class' => 'control-label'));?>
      <div class="controls">
        <?php echo $this->Form->input('username', array('class' => '')); ?>
      </div>
    </div>

    <div class="control-group">
      <?php echo $this->Form->label('password', 'password', array('class' => 'control-label'));?>
      <div class="controls">
        <?php echo $this->Form->input('password', array('value' => '', 'class' => '')); ?>
      </div>
    </div>

    <div class="control-group <?php print $user_is_admin ? '' : 'hidden' ?>">
      <?php echo $this->Form->label('group_id', 'group_id', array('class' => 'control-label'));?>
      <div class="controls">
        <?php echo $this->Form->input('group_id', array('class' => '', 'default' => 2)); ?>
      </div>
    </div>

  </fieldset>
  <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-primary')); ?>
  <?php echo $this->Form->end(); ?>
</div>