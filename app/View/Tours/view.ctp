<div class="tours view">
	<h2><?php  echo __('Tour details'); ?></h2>
	<table class="table table-striped table-bordered">
		<tr>
			<td><strong><?php echo __('Name'); ?> </strong></td>
			<td>
			<?php echo h($tour['Tour']['name']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Description'); ?> </strong></td>
			<td>
			<?php echo h($tour['Tour']['description']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('User'); ?> </strong></td>
			<td>
			<?php echo $this->Html->link($tour['User']['name'], array('controller' => 'users', 'action' => 'view', $tour['User']['id']), array('class' => '')); ?>
				&nbsp;</td>
		</tr>
	</table>
	<!-- .table table-striped table-bordered -->
</div>
<!-- .view -->
