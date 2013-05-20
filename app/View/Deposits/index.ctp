<div class="deposits index">
	<h2><?php echo __('Deposits'); ?></h2>
	<?php echo $this->TaHtml->getAddLink($tid, __('Add Deposit'), array('action' => 'add')); ?>
	<table cellpadding="0" cellspacing="0"
		class="table table-striped table-bordered">
		<tr>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('member_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($deposits as $deposit): ?>
  	<tr>
  		<td><?php echo h($deposit['Deposit']['amount']); ?>&nbsp;</td>
  		<td>
  			<?php echo $this->Html->link($deposit['Member']['name'], array('controller' => 'members', 'action' => 'view', $deposit['Member']['id'])); ?>
  		</td>
  		<td class="actions">
  			<?php echo $this->TaHtml->tourLink($tid, __('View'), array('action' => 'view', $deposit['Deposit']['id']), array('class' => 'btn btn-mini')); ?>
  			<?php echo $this->TaHtml->tourLink($tid, __('Edit'), array('action' => 'edit', $deposit['Deposit']['id']), array('class' => 'btn btn-mini')); ?>
  			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deposit['Deposit']['id']), array('class' => 'btn btn-mini', 'data' => array('tour_id' => $tid)), __('Are you sure you want to delete # %s?', $deposit['Deposit']['id'])); ?>
  		</td>
  	</tr>
<?php endforeach; ?>
	</table>
	<p>
		<small>
		<?php
		echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?> </small>
	</p>

	<div class="pagination">
		<ul>
		<?php
		echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '</li><li>', 'currentClass' => 'disabled', 'before' => '<li>', 'after' => '</li>'));
		echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		?>
		</ul>
	</div>
	<!-- .pagination -->
</div>
<!-- .index -->
