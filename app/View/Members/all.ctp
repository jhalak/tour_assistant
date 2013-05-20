<div class="members index">
	<h2><?php echo __('Members'); ?></h2>
	<?php echo $this->TaHtml->themeAddLink(__('Add member'), array('action' => 'add')); ?>
	<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
		<tr>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
	  <?php foreach ($members as $member): ?>
  	<tr>
  		<td><?php echo h($member['Member']['name']); ?>&nbsp;</td>
  		<td class="actions">
  			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id']), array('class' => 'btn btn-mini')); ?>
  			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id']), array('class' => 'btn btn-mini')); ?>
  			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
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



