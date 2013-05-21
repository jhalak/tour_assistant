<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<h1><?php echo $this->Html->link('Tour Assistant', array('controller' => 'pages', 'action' => 'display', 'index')); ?></h1>
      <?php if ($auth->loggedIn()):?>
			<div class="nav-collapse">
				<ul class="nav">
					<li><?php echo $this->Html->link(__('My tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('My members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
          <?php if ($user_is_admin): ?>
          <li><?php echo $this->Html->link(__('Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
          <li><?php echo $this->Html->link(__('Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
          <li><?php echo $this->Html->link(__('Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
          <?php endif; ?>
				</ul>
        <ul class="nav pull-right">
          <?php $user = $auth->user(); ?>
          <li><?php echo $this->Html->link('Howdy, <i class="icon-user"></i>' . $user['name'], array('controller' => 'users', 'action' => 'view', $user['id']), array('class' => '', 'escape' => false)); ?> </li>
          <li><?php echo $this->Html->link(__('Logout'), array('controller' => 'users', 'action' => 'logout')); ?> </li>
        </ul>
			</div>
      <?php endif;?>
		</div>
	</div>
</div>