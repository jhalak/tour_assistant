<div class="deposits view">
	<h2><?php  echo __('Deposit'); ?></h2>
	<table class="table table-striped table-bordered">
		<tr>
			<td><strong><?php echo __('Id'); ?> </strong></td>
			<td>
			<?php echo h($deposit['Deposit']['id']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Amount'); ?> </strong></td>
			<td>
			<?php echo h($deposit['Deposit']['amount']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Description'); ?> </strong></td>
			<td>
			<?php echo h($deposit['Deposit']['description']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Tour'); ?> </strong></td>
			<td>
			<?php echo $this->Html->link($deposit['Tour']['name'], array('controller' => 'tours', 'action' => 'view', $deposit['Tour']['id']), array('class' => '')); ?>
				&nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Member'); ?> </strong></td>
			<td>
			<?php echo $this->Html->link($deposit['Member']['name'], array('controller' => 'members', 'action' => 'view', $deposit['Member']['id']), array('class' => '')); ?>
				&nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Created'); ?> </strong></td>
			<td>
			<?php echo h($deposit['Deposit']['created']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Modified'); ?> </strong></td>
			<td>
			<?php echo h($deposit['Deposit']['modified']); ?> &nbsp;</td>
		</tr>
	</table>
	<!-- .table table-striped table-bordered -->

</div>
<!-- .view -->
