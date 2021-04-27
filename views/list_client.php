<?php 
include_once('head.php');
include_once('navbar.php');
?>
<div class="container">
		<div class="row">

    	<!-- Nav tabs -->
		<ul class="nav nav-tabs" role="tablist">
  			<li class="active"><a href="#list" role="tab" data-toggle="tab">Lista de Clientes</a></li>
  			<li><a href="#add" role="tab" data-toggle="tab">Adcionar Cliente</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
  			<div class="tab-pane active" id="list">
				<!-- Alert message-->
				<?php if (isset($msg)){ ?>
					<div <?php echo $class_stat;?> role="alert"> <span class=<?php echo $icon;?>></span> <?php echo $msg; ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
				<?php } ?>
				<div class="table-responsive">
  					<table class="table table-hover">
    						<thead>
    							<tr>
    								<th>Usuário</th>
    								<th>Email</th>
    								<th>Telefone</th>
    							</tr>
    						</thead>
    						<tbody>
						<?php foreach($users as $user) { ?>
    							<tr>
    								<td><?php echo $user['username']; ?></td>
    								<td><?php echo $user['email']; ?></td>
    								<td><?php echo $user['fone']; ?></td>

    								<td>
   										<a href="index.php?controller=client&edit=<?php echo $user['id']; ?>">
										   <span class="glyphicon glyphicon-edit"></span> editar </a>
   										<a href="index.php?controller=client&del=<?php echo $user['id']; ?>"
										   onclick="return confirm('Você tem certeza que deseja excluir este cliente?')">
										   <span class="glyphicon glyphicon-trash"></span> apagar </a>
    								</td>
    							</tr>
    						
						<?php } ?>
    						</tbody>
  					</table>
				</div>
				<ul class="pagination">
  				<?php for ($i=1; $i<=$numberOfPages; $i++) { ?>  
				<?php $class_active = ($page==$i)?"class='active'":$class_active="";?>
		             	<li <?php echo $class_active; ?>><a href="index.php?controller=client&page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
				<?php }; ?>
				</ul>

  			</div>
  			<div class="tab-pane" id="add">
				<!-- Alert message-->
				<?php if (isset($msg)){ ?>
					<div <?php echo $class_stat;?> role="alert"> <span class=<?php echo $icon;?>></span> <?php echo $msg; ?><button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
				<?php } ?>
  				<form role="form">
  					<div class="form-group">
    						<label for="username">Nome do cliente</label>
    						<input type="text" class="form-control" id="username" placeholder="Nome">
  					</div>
  					<div class="form-group">
    						<label for="cpf">CPF</label>
    						<input type="text" class="form-control" id="address" placeholder="Endereço">
  					</div>
  					<div class="form-group">
    						<label for="exampleInputtxt1">Text</label>
    						<input type="text" class="form-control" id="exampleInputtxt1" placeholder="Text">
  					</div>
  					<div class="form-group">
    						<label for="exampleInputurl1">Site</label>
    						<input type="url" class="form-control" id="exampleInputurl1" placeholder="http://">
  					</div>
  					<button type="submit" class="btn btn-primary">Submit</button>
  					<button type="button" class="btn btn-success">Back</button>
				</form>
				<br/>
  			</div>
		</div>
    </div>


<?php 
include_once('footer.php');
?>
