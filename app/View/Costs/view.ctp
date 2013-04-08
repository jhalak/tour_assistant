<div class="costs view">
	<h2>
	<?php  echo __('Cost details'); ?></h2>

	<table class="table table-striped table-bordered">
		<tr>
			<td><strong><?php echo __('Id'); ?>
			</strong>
			</td>
			<td>
			<?php echo h($cost['Cost']['id']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Amount'); ?>
			</strong>
			</td>
			<td>
			<?php echo h($cost['Cost']['amount']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Description'); ?>
			</strong>
			</td>
			<td>
			<?php echo h($cost['Cost']['description']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Tour'); ?>
			</strong>
			</td>
			<td>
			<?php echo $this->Html->link($cost['Tour']['name'], array('controller' => 'tours', 'action' => 'view', $cost['Tour']['id']), array('class' => '')); ?>
				&nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Created'); ?>
			</strong>
			</td>
			<td>
			<?php echo h($cost['Cost']['created']); ?> &nbsp;</td>
		</tr>
		<tr>
			<td><strong><?php echo __('Modified'); ?>
			</strong>
			</td>
			<td>
			<?php echo h($cost['Cost']['modified']); ?> &nbsp;</td>
		</tr>
	</table>
	<!-- .table table-striped table-bordered -->
</div>