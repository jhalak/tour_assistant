<div class="tours form">
<?php echo $this->Form->create('Tour', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
	<fieldset>
		<h2><?php echo $this->fetch('page_title'); ?></h2>
		<?php echo $this->Form->input('id'); ?>
		<div class="control-group">
		<?php echo $this->Form->label('name', 'name', array('class' => 'control-label'));?>
			<div class="controls">
			<?php echo $this->Form->input('name', array('class' => 'span12')); ?>
			</div>
			<!-- .controls -->
		</div>
		<!-- .control-group -->

		<div class="control-group">
		<?php echo $this->Form->label('description', 'description', array('class' => 'control-label'));?>
			<div class="controls">
			<?php echo $this->Form->input('description', array('class' => 'span12')); ?>
			</div>
			<!-- .controls -->
		</div>
		<!-- .control-group -->

		<div class="control-group">
		<?php echo $this->Form->label('user_id', 'user_id', array('class' => 'control-label'));?>
			<div class="controls">
			<?php echo $this->Form->input('user_id', array('class' => 'span12')); ?>
			</div>
			<!-- .controls -->
		</div>
		<!-- .control-group -->

		<div class="control-group">
		<?php echo $this->Form->label('Member', 'Member', array('class' => 'control-label'));?>
			<div class="controls">
			<?php echo $this->Form->input('Member');?>
			</div>
			<!-- .controls -->
		</div>
		<!-- .control-group -->
	</fieldset>
	<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
  <?php echo $this->Form->end(); ?>
		</div>
