<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Editar: <?php echo $dados[0]['A1_NOME']; ?></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" action="editar/?action=edit" method="post">
			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			                        <input type="text" name="nome" id="first_name" class="form-control input-sm" value="<?php echo $dados[0]['A1_NOME'] ?>">
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="text" name="cidade" id="last_name" class="form-control input-sm" value="<?php echo $dados[0]['A1_MUN'] ?>">
			    					</div>
			    				</div>
			    			</div>

			    			<div class="form-group">
			    				<input type="text" name="nreduz" id="email" class="form-control input-sm" value="<?php echo $dados[0]['A1_NREDUZ'] ?>">
                            </div>
                            <input type="hidden" name="recno" id="email" class="form-control input-sm" value="<?php echo $dados[0]['R_E_C_N_O_'] ?>">
                            
			    			<input type="submit" value="Alterar" class="btn btn-info btn-block">
			    			<a href="/" class="btn btn-success btn-block">Voltar</a>
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>