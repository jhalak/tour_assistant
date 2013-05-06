<?php echo $this->Session->flash('auth'); ?>
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
        <?php echo $this->Form->submit('Login', array('class' => 'btn btn-primary')); ?>
      </div>
    </div>
<?php echo $this->Form->end(); ?>