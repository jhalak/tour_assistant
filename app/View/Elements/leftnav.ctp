<?php if (!empty($tid)): ?>
	<li class="nav-header"><?php echo $this->Html->link('<i class="icon-circle-arrow-down"></i> ' . h($tour['Tour']['name']) . ' ' . __('Tour'), array('controller' => 'tours', 'action' => 'view', $tour['Tour']['id']), array('class' => 'tour-name', 'escape' => false)); ?></li>
  <li><?php echo $this->TaHtml->tourLink($tid, __('Members'),  array('controller' => 'members', 'action' => 'index')); ?></li>
  <li><?php echo $this->TaHtml->tourLink($tid, __('Costs'),    array('controller' => 'costs', 'action' => 'index')); ?> </li>
  <li><?php echo $this->TaHtml->tourLink($tid, __('Deposits'), array('controller' => 'deposits', 'action' => 'index')); ?> </li>
  <li><?php echo $this->TaHtml->tourLink($tid, __('Summary'),  array('controller' => 'tours', 'action' => 'summary')); ?> </li>
<?php else: ?>
  <li><?php echo $this->Html->link(__('New Tour'), array('controller' => 'tours', 'action' => 'add'), array('class' => '')); ?></li>
  <li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add'), array('class' => '')); ?></li>
<?php endif;?>