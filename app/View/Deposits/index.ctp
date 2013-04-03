
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
		
			<ul class="nav nav-list bs-docs-sidenav">
				<li><?php echo $this->Html->link(__('New Deposit'), array('action' => 'add'), array('class' => '')); ?></li>						<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index'), array('class' => '')); ?></li> 
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => '')); ?></li> 
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">

		<div class="deposits index">
		
			<h2><?php echo __('Deposits'); ?></h2>
			
			<table cellpadding="0" cellspacing="0" class="table table-striped table-bordered">
				<tr>
											<th><?php echo $this->Paginator->sort('id'); ?></th>
											<th><?php echo $this->Paginator->sort('amount'); ?></th>
											<th><?php echo $this->Paginator->sort('description'); ?></th>
											<th><?php echo $this->Paginator->sort('tour_id'); ?></th>
											<th><?php echo $this->Paginator->sort('member_id'); ?></th>
											<th><?php echo $this->Paginator->sort('created'); ?></th>
											<th><?php echo $this->Paginator->sort('modified'); ?></th>
											<th class="actions"><?php echo __('Actions'); ?></th>
				</tr>
				<?php
				foreach ($deposits as $deposit): ?>
	<tr>
		<td><?php echo h($deposit['Deposit']['id']); ?>&nbsp;</td>
		<td><?php echo h($deposit['Deposit']['amount']); ?>&nbsp;</td>
		<td><?php echo h($deposit['Deposit']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($deposit['Tour']['name'], array('controller' => 'tours', 'action' => 'view', $deposit['Tour']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($deposit['Member']['name'], array('controller' => 'members', 'action' => 'view', $deposit['Member']['id'])); ?>
		</td>
		<td><?php echo h($deposit['Deposit']['created']); ?>&nbsp;</td>
		<td><?php echo h($deposit['Deposit']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $deposit['Deposit']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $deposit['Deposit']['id']), array('class' => 'btn btn-mini')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $deposit['Deposit']['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $deposit['Deposit']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
			</table>
			
			<p><small>
				<?php
				echo $this->Paginator->counter(array(
				'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
				));
				?>			</small></p>

			<div class="pagination">
				<ul>
					<?php
		echo $this->Paginator->prev('< ' . __('Previous'), array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
		echo $this->Paginator->numbers(array('separator' => '</li><li>', 'currentClass' => 'disabled', 'before' => '<li>', 'after' => '</li>'));
		echo $this->Paginator->next(__('Next') . ' >', array('tag' => 'li'), null, array('class' => 'disabled', 'tag' => 'li', 'disabledTag' => 'a'));
	?>
				</ul>
			</div><!-- .pagination -->
			
		</div><!-- .index -->
	
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
