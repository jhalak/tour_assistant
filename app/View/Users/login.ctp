<?php echo $this->Session->flash(); ?>
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
        <?php echo $this->Html->link(__('Register'), array('controller' => 'users', 'action' => 'add')); ?>
      </div>
    </div>
<?php echo $this->Form->end(); ?>