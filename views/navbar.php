<div class="navbar navbar-custom" rol="navigation">
	<div class="navbar-collapse collapse">
		<div class="container">
			<?php if(isset($_SESSION['username'])) { ?>
				<nav class="navbar default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php?controller=home">SGCC</a>
					</div>
					<ul class="nav navbar-nav">
						<!-- <li class="active"><a href="#">Home</a></li> -->
						<li><a href="index.php?controller=client">Cliente</a></li>
						<li><a href="#">Evento</a></li>
						<li><a href="#">Fornecedor</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="data-toggle">
								<i class="glyphicon glyphicon-user">
								</i> Bem Vindo: <?= $_SESSION['username'];?>
							</a>
						</li>
						<li><a href="index.php?controller=logout">
						<b class="glyphicon glyphicon-log-out"></b> Sair </a></li>
					</ul>
				</div>
				</nav>
			
			<?php } ?>
		</div>
	</div>
</div>