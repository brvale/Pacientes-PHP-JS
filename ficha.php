<?php
//Conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//css
include_once 'css/ficha.php';
//Select
if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);

    $sql = "SELECT * FROM paciente WHERE id = '$id'";
    $resultado = mysqli_query($connect, $sql);
    $dados = mysqli_fetch_array($resultado);
endif;
?>



<div class="navbar-fixed">
    <nav>
        <div class="nav-wrapper black" >
        <a href="#" class="brand-logo center" >
        <img src="img/form.png" height=50 padding=5 min-width=108>
        </a>
    </nav>
</div>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large amber darken-1">
        <i class="material-icons">dehaze</i>
    </a>
    <ul>
        <li>
            <a href="editar.php?id=<?php echo $dados['id']; ?>" class="btn-floating teal darken-3">
                <i class="material-icons">edit</i>
            </a>
        </li>

        <li>
            <a href="#modal<?php echo $dados['id']; ?>" class="btn-floating red modal-trigger">
                <i class="material-icons">delete</i>
            </a>
        </li>

        <li>
            <a href="index.php" class="btn-floating blue darken-2">
                <i class="material-icons">contacts</i>
            </a>
        </li>
    </ul>
</div>

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

<script src="js/main.js"></script>

<div class="row deep-purple darken-4">
    <div class="col s12 m6 push-m3">
        <h3 class="light center">Ficha do Paciente</h3><br>
            <fieldset>
            <table class="striped">
            <tbody>
                <tr class="deep-purple darken-4">
                    <th>Nome:</th>
                    <th>CPF:</th>
                    <th>Idade:</th>
                    <th>CEP:</th>
                    <th>Telefone:</th>
                </tr>
                
                <tr class="white">
                    <td><?php echo $dados['nome']; ?></td>
                    <td><?php echo $dados['cpf']; ?></td>
                    <td><?php echo $dados['idade']; ?></td>
                    <td><?php echo $dados['cep']; ?></td>
                    <td><?php echo $dados['telefone']; ?></td>
                </tr>

                <tr class="deep-purple darken-4">
                    <th>Endereço:</th>
                    <th>Indicação:</th>
                    <th>Estado Civil:</th>
                    <th>RG:</th>
                    <th>Profissão:</th>
                </tr>

                <tr class="white">
                    <td><?php echo $dados['endereco']; ?></td>
                    <td><?php echo $dados['indicacao']; ?></td>
                    <td><?php echo $dados['estadoCivil']; ?></td>
                    <td><?php echo $dados['rg']; ?></td>
                    <td><?php echo $dados['profissao']; ?></td>
                </tr>
            </tbody>
            </table>
            </fieldset><br><br>
        </div>

        <div class="col s12 m8 push-m2">
            <fieldset>
            <legend>Histórico</legend>
            <table class="striped">
            <tbody>  
                <tr class="deep-purple darken-4">
                    <th>Pressão alta:</th>
                    <th>Fumante:</th>
                    <th>Bebe:</th>
                    <th>Alérgico a medicamento:</th>
                    <th>Toma rémedio:</th>
                    <th>Problema de saúde:</th>
                    <th>Fez cirurgia:</th>
                </tr>

                <tr class="white">
                    <td><?php echo $dados['pressaoAlta']; ?></td>
                    <td><?php echo $dados['fumante']; ?></td>
                    <td><?php echo $dados['bebe']; ?></td>
                    <td><?php echo $dados['alergico']; ?></td>
                    <td><?php echo $dados['tomaRemedio']; ?></td>
                    <td><?php echo $dados['problemaSaude']; ?></td>
                    <td><?php echo $dados['fezCirurgia']; ?></td>
                </tr>
            </tbody>
            </table>
            </fieldset><br><br>
        </div>

        <div class="col s12 m6 push-m3">
            <img src="img/mapa_dental.png"> <br><br>
        </div>

        <div class="col s12 m8 push-m2">
            <fieldset>
            <legend>Dentes que foram tratados</legend>
            <table class="striped">
            <tbody>
                <tr class="deep-purple darken-4">
                    <th>Superior:</th>
                    <th>Inferior:</th>
                </tr>
                <td class="white"><?php echo $dados['maxSuperior']; ?></td>
                <td class="white"><?php echo $dados['maxInferior']; ?></td>
            </tbody>
            </table>
            </fieldset><br>
        </div>

        <div class="col s12 m8 push-m2">
            <fieldset>
            <legend>Tratamento realizado</legend>
            <table class="striped">
            <tbody>
                <tr class="deep-purple darken-4">
                    <th>Descrição:</th>
                    <th>Orçamento:</th>
                </tr>
                <td class="white"><?php echo $dados['tratamento']; ?></td>
                <td class="white"><?php echo $dados['orcamento']; ?></td>
            </tbody>
            </table>
            </fieldset><br>
        </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>