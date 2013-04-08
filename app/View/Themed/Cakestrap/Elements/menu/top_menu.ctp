<div class="navbar">
	<div class="navbar-inner">
		<div class="container">
			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>
			
			<h1><?php echo $this->Html->link('Tour Assistant', array('controller' => 'pages', 'action' => 'display', 'index')); ?></h1>
			<div class="nav-collapse">
				<ul class="nav">
					<li><?php echo $this->Html->link(__('My tours'), array('controller' => 'tours', 'action' => 'index')); ?> </li>
					<li><?php echo $this->Html->link(__('My members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
				</ul>
			</div>
		</div>
	</div>
</div>