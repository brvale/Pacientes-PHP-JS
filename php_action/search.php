<?php
//Conexão
require_once 'db_connect.php';
//header
include_once '../includes/header.php';
//Mensagem
include_once '../includes/mensagem.php';
//css
include_once '../css/index.php';
?>
<nav>
    <div class="nav-wrapper black" >
    <a href="#" class="brand-logo center" >
    <img src="../img/dentista1.png" height=65 padding=5 min-width=108>
    </a>
    </div>
  </nav>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Pacientes </h3>
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
<?php
if (isset($_POST['btn-buscar'])):
    $buscar = $_POST['buscar'];

    $sql_buscar = "SELECT * FROM paciente WHERE cpf LIKE '%$buscar%'";

    $resultado_buscar = mysqli_query($connect, $sql_buscar);

    while($rows_buscar = mysqli_fetch_array($resultado_buscar)):
        ?>
        <tr>
                <td><?php echo $rows_buscar['nome']; ?></td>
                <td><?php echo $rows_buscar['cpf']; ?></td>
                <td><?php echo $rows_buscar['idade']; ?></td>
                <td><?php echo $rows_buscar['cep']; ?></td>
                <td><?php echo $rows_buscar['telefone']; ?></td>
                <td><a href="../ficha.php?id=<?php echo $rows_buscar['id']; ?>" class="btn-floating  indigo accent-4"><i class="material-icons">visibility</i></a></td>
                <td><a href="../editar.php?id=<?php echo $rows_buscar['id']; ?>" class="btn-floating  blue darken-1"><i class="material-icons">edit</i></a></td>
                <td><a href="#modal<?php echo $rows_buscar['id']; ?>" class="btn-floating red modal-trigger"><i class="material-icons">delete</i></a></td>

                <!-- Modal Structure -->
                <div id="modal<?php echo $rows_buscar['id']; ?>" class="modal">
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
                    <form action="../php_action/delete.php" method="POST">
                        <input type="hidden" name="id" value="<?php echo $rows_buscar['id']; ?>">
                        <button type= "submit" name="btn-deletar" class="btn red darken-1">Sim, deletar!</button>
                        <a href="#!" class="modal-close waves-effect waves-green btn-flat white">Cancelar</a>
                    </form>
                    </div>
                </div>
            </tr>
            <?php endwhile;?>
        </table>
        <br>
        <a href="../index.php" class="btn black">Lista</a>    
    </div>
</div>
<?php
endif;
//footer
include_once '../includes/footer.php';
?>