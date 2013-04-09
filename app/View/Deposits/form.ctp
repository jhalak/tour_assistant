<div class="deposits form">
<?php echo $this->Form->create('Deposit', array('inputDefaults' => array('label' => false), 'class' => 'form form-horizontal')); ?>
	<fieldset>
		<h2><?php echo $this->fetch('page_title'); ?></h2>
		<?php echo $this->Form->input('id'); ?>
		<div class="control-group">
		<?php echo $this->Form->label('member_id', 'Member', array('class' => 'control-label'));?>
			<div class="controls">
			<?php echo $this->Form->input('member_id', array('class' => 'span12')); ?>
			</div>
			<!-- .controls -->
		</div>
		
		<div class="control-group">
		<?php echo $this->Form->label('amount', 'amount', array('class' => 'control-label'));?>
			<div class="controls">
			<?php echo $this->Form->input('amount', array('class' => 'span12')); ?>
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

		<div class="control-group hidden">
		<?php echo $this->Form->label('tour_id', 'tour_id', array('class' => 'control-label'));?>
			<div class="controls">
			<?php echo $this->Form->input('tour_id', array('default' => $tid, 'class' => 'span12')); ?>
			</div>
			<!-- .controls -->
		</div>
		<!-- .control-group -->

		<!-- .control-group -->
	</fieldset>
		<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>
    <?php echo $this->Form->end(); ?>
</div>
