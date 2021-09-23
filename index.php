<?php
//conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//Mensagem
include_once 'includes/mensagem.php';
//css
include_once 'css/index.php';
//mask
include_once 'includes/masks.php';
?>

<nav>
    <div class="nav-wrapper black" >
    <a href="#" class="brand-logo center" >
    <img src="img/dentista1.png" height=65 padding=5 min-width=108>
    </a>
    </div>
  </nav>

<div class="row">
    <div class="col s12 m6 push-m3">
        <div class="input-field">
        <h3 class="light"> Pacientes </h3>
            <form action="php_action/search.php" method="POST">
                <input id="buscar" name="buscar" type="text" class="validate" placeholder="Buscar por CPF">
                <button class="btn-floating waves-effect waves-light" type="submit" name="btn-buscar">
                    <i class="material-icons right purple darken-2">search</i>
                </button>
                <script type="text/javascript">$("#buscar").mask("000.000.000-00");</script>
            </form>
        </div>
        <table class="striped">
            <thead>
                <tr>
                    <th>Nome:</th>
                    <th>CPF:</th>
                    <th>Idade:</th>
                    <th>CEP:</th>
                    <th>Telefone:</th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $sql = "SELECT * FROM paciente";
                $resultado = mysqli_query($connect, $sql);

                if(mysqli_num_rows($resultado) > 0):

                while($dados = mysqli_fetch_array($resultado)):
                ?>
                <tr>
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['cpf']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><?php echo $dados['cep']; ?></td>
                    <td><?php echo $dados['telefone']; ?></td>
                    <td><a href="ficha.php?id=<?php echo $dados['id']; ?>" class="btn-floating  indigo accent-4"><i class="material-icons">visibility</i></a></td>
                    <td><a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating  blue darken-1"><i class="material-icons">edit</i></a></td>
                    <td><a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                    <!-- Modal Structure -->
                    <div id="modal<?php echo $dados['id']; ?>" class="modal">
                        <div class="modal-content white">
                        <style>
                        h4{
                            color: #7b1fa2;
                        }
                        p{
                            color: #7b1fa2; 
                        }
                        </style>
                        <h4>Alerta!</h4>
                        <p>Tem certeza que deseja remover este paciente?</p>
                        </div>
                        
                        <div class="modal-footer blue-grey lighten-5">
                        <form action="php_action/delete.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                            <button type= "submit" name="btn-deletar" class="btn red darken-1">Sim, deletar!</button>
                            <a href="#!" class="modal-close waves-effect waves-green btn-flat white">Cancelar</a>
                        </form>

                        </div>
                    </div>

                </tr>
                <?php endwhile;
                else: ?>
                
                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <?php
                endif;
                ?>
            </tbody>
        </table>
        <br>
        <a href="adicionar.php" class="btn purple darken-2">ADICIONAR PACIENTE</a>    
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>