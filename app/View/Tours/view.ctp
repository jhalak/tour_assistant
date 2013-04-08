		<div class="tours view">

			<h2><?php  echo __('Tour'); ?></h2>
		  <?php echo $this->Html->link(__('Edit Tour'), array('action' => 'edit', $tour['Tour']['id']), array('class' => '')); ?>
      <?php echo $this->Form->postLink(__('Delete Tour'), array('action' => 'delete', $tour['Tour']['id']), array('class' => ''), __('Are you sure you want to delete # %s?', $tour['Tour']['id'])); ?>

			<table class="table table-striped table-bordered">
				<tr>		<td><strong><?php echo __('Id'); ?></strong></td>
		<td>
			<?php echo h($tour['Tour']['id']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Name'); ?></strong></td>
		<td>
			<?php echo h($tour['Tour']['name']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('Description'); ?></strong></td>
		<td>
			<?php echo h($tour['Tour']['description']); ?>
			&nbsp;
		</td>
</tr><tr>		<td><strong><?php echo __('User'); ?></strong></td>
		<td>
			<?php echo $this->Html->link($tour['User']['name'], array('controller' => 'users', 'action' => 'view', $tour['User']['id']), array('class' => '')); ?>
			&nbsp;
		</td>
</tr>			</table><!-- .table table-striped table-bordered -->
			
		</div><!-- .view -->

					
			<div class="related">

				<h3><?php echo __('Tour Members'); ?></h3>
				
				<?php if (!empty($tour['Member'])): ?>
				
					<table class="table table-striped table-bordered">
						<tr>
									<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('User Id'); ?></th>
							<th class="actions"><?php echo __('Actions'); ?></th>
						</tr>
							<?php
								$i = 0;
								foreach ($tour['Member'] as $member): ?>
		<tr>
			<td><?php echo $member['id']; ?></td>
			<td><?php echo $member['name']; ?></td>
			<td><?php echo $member['user_id']; ?></td>
			<td class="actions">

				<?php echo $this->TaHtml->tourLink($tid, __('View'), '/members/view/' . $member['id'], array('class' => 'btn btn-mini')); ?>
				<?php echo $this->TaHtml->tourLink($tid, __('Edit'), '/members/edit/' . $member['id'], array('class' => 'btn btn-mini')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'members', 'action' => 'delete', $member['id']), array('class' => 'btn btn-mini', 'data' => array('tour_id' => $tid)), __('Are you sure you want to delete # %s?', $member['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
					</table><!-- .table table-striped table-bordered -->
					
				<?php endif; ?>

				
				<div class="actions">
					<?php echo $this->TaHtml->tourLink($tid, '<i class="icon-plus icon-white"></i> '.__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => 'btn btn-primary', 'escape' => false)); ?>				</div><!-- .actions -->
				
			</div><!-- .related -->