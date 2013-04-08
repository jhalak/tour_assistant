<?php if (!empty($tid)): ?>
	<?php echo $tid;?>
  <li><?php echo $this->TaHtml->tourLink($tid, __('All Members'),  array('controller' => 'members', 'action' => 'index')); ?></li>
  <li><?php echo $this->TaHtml->tourLink($tid, __('All Costs'),    array('controller' => 'costs', 'action' => 'index')); ?> </li>
  <li><?php echo $this->TaHtml->tourLink($tid, __('All Deposits'), array('controller' => 'deposits', 'action' => 'index')); ?> </li>
<?php else: ?>
  <li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => '')); ?></li>
  <li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => '')); ?></li>
<?php endif;?>