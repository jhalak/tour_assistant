
<div id="page-container" class="row-fluid">

	<div id="sidebar" class="span3">
		
		<div class="actions">
			
			<ul class="nav nav-list bs-docs-sidenav">			
						<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id']), array('class' => '')); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tours'), array('controller' => 'tours', 'action' => 'index'), array('class' => '')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => '')); ?> </li>
				
			</ul><!-- .nav nav-list bs-docs-sidenav -->
			
		</div><!-- .actions -->
		
	</div><!-- #sidebar .span3 -->
	
	<div id="page-content" class="span9">
		
		<div class="users view">

			<h2><?php  echo __('User'); ?></h2>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($user['User']['name']); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

					
			<div class="related">

				<h3><?php echo __('Related Members'); ?></h3>
				
				<?php if (!empty($user['Member'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($user['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['name']; ?></td>
			<td><?php echo $member['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'members', 'action' => 'view', $member['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'members', 'action' => 'edit', $member['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

					
			<div class="related">

				<h3><?php echo __('Related Tours'); ?></h3>
				
				<?php if (!empty($user['Tour'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($user['Tour'] as $tour): ?>
		<tr>
			<td><?php echo $tour['id']; ?></td>
			<td><?php echo $tour['name']; ?></td>
			<td><?php echo $tour['description']; ?></td>
			<td><?php echo $tour['user_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tours', 'action' => 'view', $tour['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tours', 'action' => 'edit', $tour['id']), array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tours', 'action' => 'delete', $tour['id']), array('class' => 'btn btn-mini'), __('Are you sure you want to delete # %s?', $tour['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->Html->link('<i class="icon-plus icon-white"></i> '.__('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->

			
	</div><!-- #page-content .span9 -->

</div><!-- #page-container .row-fluid -->
