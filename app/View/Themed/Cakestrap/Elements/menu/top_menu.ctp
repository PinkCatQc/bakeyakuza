<nav class="navbar navbar-default" role="navigation">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button><!-- /.navbar-toggle -->
		<?php echo $this->Html->Link('Bake Yakuza', array('controller' => 'yakuzas', 'action' => 'index'), array('class' => 'navbar-brand')); ?>
	</div><!-- /.navbar-header -->
	<div class="collapse navbar-collapse navbar-ex1-collapse">
		<ul class="nav navbar-nav">
			<li class="active">
                        <?php if ($this->Session->check('Auth.User')) {
                            $username = $this->Session->read('Auth.User.username');
                            $userid = $this->Session->read('Auth.User.id');
                            $userrole = $this->Session->read('Auth.User.role');
                            echo $this->Html->link($username . ' (' . $userrole . ')', array('controller' => 'users' ,'action' => 'view', $userid));
                            echo '</li> <li>';
                            echo $this->Html->link(__('logout'), array('controller' => 'users', 'action' => 'logout'));
                        }else {
                            echo $this->Html->link(__('login'), array('controller' => 'users' ,'action' => 'login'));
                            echo '</li> <li>';
                            echo $this->Html->link(__('sign in'), array('controller' => 'users', 'action' => 'add'));
                        }
                        ?>
			<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('Language') ?> <b class="caret"></b></a>
				<ul class="dropdown-menu">
					<?php echo $this->I18n->flagSwitcher(array(
                                            'class' => 'languages',
                                            'id' => 'language-switcher'
                                        )); ?>
				</ul>
			</li>
		</ul><!-- /.nav navbar-nav -->
	</div><!-- /.navbar-collapse -->
</nav><!-- /.navbar navbar-default -->