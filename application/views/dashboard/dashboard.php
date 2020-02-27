<div class="container">

<!-- Botão para acionar modal -->
<div class='row'>
	<div class='col-md-6'>
	  <h3>Histórico de Pontos</h3>
     	  <p></p>
	</div>
	<div class='col-md-6'>
		<div class='row'>
			<div class='col-md-6'>
				<button type="button" class="btn btn-success col-12" data-toggle="modal" data-target="#modalExemplo">
				  Apurar ponto
				</button>
			</div>	
			<div class='col-md-6'>
                <a href="<?= base_url('logout') ?>" class="text-info">
					<button type="button" class="btn btn-danger col-12" data-toggle="modal" data-target="#modalExemplo">
					  Sair
					</button>              
                </a>
			</div>	
		</div>	
	</div>
</div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Data</th>
        <th>Entrada</th>
        <th>Saida Almoço</th>
        <th>Entrada Almoço</th>
        <th>Saida</th>
      </tr>
      <?php foreach ($pontos as $ponto): ?>
      	<tr>
	        <th><?= $ponto['data'] ?></th>
	        <th><?= $ponto['hr_entrada'] ?></th>
	        <th><?= $ponto['ini_almoco'] ?></th>
	        <th><?= $ponto['fim_almoco'] ?></th>
	        <th><?= $ponto['saida'] ?></th>
	    </tr>
      <?php endforeach ?>
    </thead>
  </table>
</div>

<!-- Modal -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Apurar Ponto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
	        <label for="data" class="text-info">Data:</label><br>
            <input type="date" name="data" id="data" class="form-control">
            <span id="error-email"></span>
        </div>
        <div class="form-group">
	        <label for="entrada" class="text-info">Entrada:</label><br>
            <input type="time" name="entrada" id="entrada" class="form-control">
            <span id="error-email"></span>
        </div>
        <div class="form-group">
	        <label for="saidaAlmoco" class="text-info">Saida Almoço:</label><br>
            <input type="time" name="saidaAlmoco" id="saidaAlmoco" class="form-control">
            <span id="error-email"></span>
        </div>
        <div class="form-group">
	        <label for="entradaAlmoco" class="text-info">Entrada Almoço:</label><br>
            <input type="time" name="entradaAlmoco" id="entradaAlmoco" class="form-control">
            <span id="error-email"></span>
        </div>
        <div class="form-group">
	        <label for="saida" class="text-info">Saida:</label><br>
            <input type="time" name="saida" id="saida" class="form-control">
            <span id="error-email"></span>
        </div>
	  </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary btn-ponto">Salvar Ponto</button>
      </div>
    </div>
  </div>
</div>