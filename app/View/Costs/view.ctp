
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit Cost'), array('action' => 'edit', $cost['Cost']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Cost'), array('action' => 'delete', $cost['Cost']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $cost['Cost']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Costs'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cost'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="costs view">

			<h2><?php  echo __('Cost'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($cost['Cost']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Amount'); ?></strong></td>
		<td>
			<?php echo h($cost['Cost']['amount']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($cost['Cost']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Tour'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($cost['Tour']['name'], array('controller' => 'tours', 'action' => 'view', $cost['Tour']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Created'); ?></strong></td>
		<td>
			<?php echo h($cost['Cost']['created']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Modified'); ?></strong></td>
		<td>
			<?php echo h($cost['Cost']['modified']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
