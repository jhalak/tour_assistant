
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Deposit'), array('action' => 'edit', $deposit['Deposit']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Deposit'), array('action' => 'delete', $deposit['Deposit']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $deposit['Deposit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Deposits'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Deposit'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="deposits view">

			<h2><?php  echo __('Deposit'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($deposit['Deposit']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Amount'); ?></strong></td>
		<td>
			<?php echo h($deposit['Deposit']['amount']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($deposit['Deposit']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tour'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($deposit['Tour']['name'], array('controller' => 'tours', 'action' => 'view', $deposit['Tour']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Member'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($deposit['Member']['name'], array('controller' => 'members', 'action' => 'view', $deposit['Member']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($deposit['Deposit']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($deposit['Deposit']['modified']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
