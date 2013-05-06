<div class="groups form">
  <?php echo $this->Form->create('Group', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
  <fieldset>
    <h2><?php echo __('Edit Group'); ?></h2>
    <?php echo $this->Form->input('id', array('class' => 'span12')); ?>
    <div class="control-group">
      <?php echo $this->Form->label('name', 'name', array('class' => 'control-label'));?>
      <div class="controls">
        <?php echo $this->Form->input('name', array('class' => 'span12')); ?>
      </div>
      <!-- .controls -->
    </div>
    <!-- .control-group -->
  </fieldset>
  <?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
  <?php echo $this->Form->end(); ?>
</div>