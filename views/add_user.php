<?php 
include_once('head.php');
include_once('navbar.php');
?>
<script>
$(document).ready(function(){
  
});

</script>
 <!-- edit Section -->
<section id="page_add" class="page_add">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                 <h2>Adicionar usuário</h2>
		<hr>
		
		<?php if (isset($msg)){ ?>
		<div <?php echo $class_stat;?> role="alert"> <?php echo $msg;?> <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button></div>
	<?php } ?>
	
		<form role="form" action="index.php?controller=client&add" method="POST">

  					
		<div class="form-group">
    		<label for="username">Usuário</label>
	    		<input type="text" class="form-control" name ="username" id="username" placeholder="Usuário" required value="">
  		</div>
  		<div class="form-group">
    		<label for="password">Senha</label>
			<input type="password" class="form-control" name="password" id="password" placeholder="Senha" required value="">
  		</div>

<div class="form-group">
    		<label for="password">Confirmar Senha</label>
			<input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirmar Senha" required value="">
  		</div>

  					<div class="form-group">
    						<label for="email">Email</label>
    						<input type="email"  required 	class="form-control" name="email" id="email" placeholder="Email" value="">
  					</div>
  					<div class="form-group">
    						<label for="type">Tipo</label>
    						<input type="text" class="form-control" maxlength="15" size="15" name="type" id="type" placeholder="Tipo" value="">
  					</div>
  					
  					<button type="submit" class="btn btn-primary" id="submit">Salvar</button>
  					<a href="index.php?controller=client"><button type="button" class="btn btn-success">Voltar</button></a>
				</form>
                </div>
            </div>
        </div>
</section>
<br/>
<?php 
include_once('footer.php');
?>
