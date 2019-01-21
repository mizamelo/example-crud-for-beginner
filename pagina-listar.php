    <header>
        <div>
            <a data-toggle="modal" data-target="#adicionar">
                <img src="/assets/img/add.svg" alt="Adicionar">
                <p>Adicionar Clientes</p>
            </a>
        </div>
    </header>
    <div class="listar">
        <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Nome Resumido</th>
                <th scope="col">Cidade</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $dado): ?>
            <tr>
                <th scope="row"><?php echo $dado['A1_FILIAL'];?></th>
                <td><?php echo $dado['A1_NOME'];?></td>
                <td><?php echo $dado['A1_NREDUZ'];?></td>
                <td><?php echo $dado['A1_MUN'];?></td>
                <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="./assets//img/settings.svg" alt="Configuração">
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" id="edit" href="/editar?recno=<?php echo $dado['R_E_C_N_O_']; ?>">Alterar</a>
                            <a class="dropdown-item" href="/?action=excluir&id=<?php echo $dado['R_E_C_N_O_']; ?>">Excluir</a>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>

<!-- Modal Adicionar-->
<div class="modal fade" id="adicionar" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">ADICIONAR</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="/?action=add" method="post">
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome</span>
                    </div>
                    <input type="text" name="nome" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Nome Reduzido</span>
                    </div>
                    <input type="text" name="nreduz" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="inputGroup-sizing-default">Cidade</span>
                    </div>
                    <input type="text" name="cidade" class="form-control" aria-label="Sizing example input" required aria-describedby="inputGroup-sizing-default">
                </div>
            </div>
      
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </form>
    </div>
  </div>
</div>