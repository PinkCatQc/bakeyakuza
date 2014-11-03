
<div id="page-container" class="row">

	<div id="sidebar" class="col-sm-3">
		
		<div class="actions">		
			<ul class="nav nav-pills nav-stacked">
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo __('Hierarchy') ?>
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Hierarchies'), array('action' => 'index')); ?></li>
				</ul>
		    </li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#">Yakuza
				<span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li class="list-group-item"><?php echo $this->Html->link(__('List Yakuzas'), array('controller' => 'yakuzas', 'action' => 'index')); ?> </li>
					<li class="list-group-item"><?php echo $this->Html->link(__('New Yakuza'), array('controller' => 'yakuzas', 'action' => 'add')); ?> </li>
				</ul>
		    </li>	
			</ul><!-- /.list-group --> 			
		</div><!-- /.actions -->
		
	</div><!-- /#sidebar .col-sm-3 -->
	
	<div id="page-content" class="col-sm-9">

		<h2><?php echo __('Add Hierarchy'); ?></h2>

		<div class="hierarchies form">
		
			<?php echo $this->Form->create('Hierarchy', array('role' => 'form')); ?>

				<fieldset>

					<div class="form-group">
						<?php echo $this->Form->input('yakuza_id', array('class' => 'form-control')); ?>
					</div><!-- .form-group -->
					<div class="form-group">
						<?php echo $this->Form->input('level',  array('options' => array('1 - Oyabun : Family Boss' => '1 - Oyabun : Family Boss'
						, '2 - Saiko-Komom : Administration' => '2 - Saiko-Komom : Administration', '2 - Wagashira : First Lieutenant' => '2 - Wagashira : First Lieutenant'
						, '2 - Shateigashira : Second Lieutenant' => '2 - Shateigashira : Second Lieutenant', '3 - Shingiin : Law Advisor' => '3 - Shingiin : Law Advisor'
						, '3 - Kyodai : Big Brothers' => '3 - Kyodai : Big Brothers', '4 - Kaikei : Accountants' => '4 - Kaikei : Accountants'
						, '4 - Shatei : Little Brothers' => '4 - Shatei : Little Brothers'))); ?>
					</div><!-- .form-group -->
					<?php echo $this->Form->submit('Submit', array('class' => 'btn btn-large btn-primary')); ?>

				</fieldset>

			<?php echo $this->Form->end(); ?>

		</div><!-- /.form -->
			
	</div><!-- /#page-content .col-sm-9 -->

</div><!-- /#page-container .row-fluid -->