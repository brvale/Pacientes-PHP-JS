<?php
//Conexão
include_once 'php_action/db_connect.php';
//header
include_once 'includes/header.php';
//mask
include_once 'includes/masks.php';
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
        <div class="nav-wrapper teal lighten-2" >
        <a href="#" class="brand-logo center" >
        <img src="img/dentista.png" height=50 padding=5 min-width=108>
        </a>
        </ul>
        </div>
    </nav>
</div>

<style>
    h3{
        text-align: center;
        color: #29a3a3;
    }
    fieldset{
        border-color: #A9A9A9;
        border-radius: 5px;
    }legend{
        text-align: center;
        font-size: 25px;
        color: #248f8f;
    }
</style>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="light"> Editar Usuario </h3>
        <form method="POST" action="php_action/update.php" >
        <fieldset>
            <table>
            <input type="hidden" name="id" value='<?php echo $dados['id'];?>'>
                <div class="input-field col s12"> 
                <i class="material-icons prefix">account_circle</i>  
                <input type="text" name="nome" id="nome" value='<?php echo $dados['nome'];?>'>
                    <label for="nome">Nome</label>
                </div>
                    
                <div class="input-field col s12">
                    <input type="text" name="endereco" id="endereco" value='<?php echo $dados['endereco'];?>'>
                    <label for="endereco">Endereço</label>
                </div>
                
                <div class="input-field col s12">
                        <input type="text" name="indicacao" id="indicacao" value='<?php echo $dados['indicacao'];?>'>
                        <label for="indicacao">Indicação</label>
                </div> 

                <div class="input-field col s4">
                    <input type="text" name="telefone" id="telefone" value='<?php echo $dados['telefone'];?>'>
                    <label for="telefone">Telefone</label>
                    <script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
                </div>
                
                <div class="input-field col s4">
                    <input type="text" name="cep" id="cep" value='<?php echo $dados['cep'];?>'>
                    <label for="cep">CEP</label>
                    <script type="text/javascript">$("#cep").mask("00000-000");</script>
                </div>
                
                <div class="input-field col s4">
                        <input type="text" name="cpf" id="cpf" value='<?php echo $dados['cpf'];?>'>
                        <label for="cpf">CPF</label>
                        <script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>
                </div>

                <div class="input-field col s4">
                    <select id="estadoCivil" name="estadoCivil">
                        <option value="<?php echo $dados['estadoCivil'];?>"><?php echo $dados['estadoCivil'];?></option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viuvo(a)">Viúvo(a)</option>
                    </select>
                        <label>Estado Civil</label>
                </div>

                <div class="input-field col s4">
                        <input type="text" name="idade" id="idade" value='<?php echo $dados['idade'];?>'>
                        <label for="idade">Idade</label>
                        <script type="text/javascript">$("#idade").mask("00");</script>
                </div>

                <div class="input-field col s4">
                        <input type="text" name="rg" id="rg" value='<?php echo $dados['rg'];?>'>
                        <label for="rg">RG</label>
                        <script type="text/javascript">$("#rg").mask("00.000.000-0");</script>
                </div>

                <div class="input-field col s12">
                        <input type="text" name="profissao" id="profissao" value='<?php echo $dados['profissao'];?>'>
                        <label for="profissao">Profissão</label>
                </div>

            </table>
        </fieldset> <br><br>

        <fieldset>
            <legend>Histórico</legend>
            <table>
                <div class="input-field col s4">
                    <select name="pressaoAlta" id="pressaoAlta">
                        <option value="<?php echo $dados['pressaoAlta'];?>"><?php echo $dados['pressaoAlta'];?></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                        <label>Tem Pressão alta?</label>
                </div>

                <div class="input-field col s4">
                    <select name="fumante" id="fumante">
                        <option value="<?php echo $dados['fumante'];?>"><?php echo $dados['fumante'];?></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                        <label>Fuma?</label>
                </div>

                <div class="input-field col s4">
                    <select name="bebe" id="bebe">
                        <option value="<?php echo $dados['bebe'];?>"><?php echo $dados['bebe'];?></option>
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                        <label>Bebe?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="alergico" id="alergico" value='<?php echo $dados['alergico'];?>'>
                    <label for="alergico">É alérgico a algum medicamento?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="tomaRemedio" id="tomaRemedio" value='<?php echo $dados['tomaRemedio'];?>'>
                    <label for="tomaRemedio">Toma algum remédio?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="fezCirurgia" id="fezCirurgia" value='<?php echo $dados['fezCirurgia'];?>'>
                    <label for="fezCirurgia">Já fez cirurgia?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="problemaSaude" id="problemaSaude" value='<?php echo $dados['problemaSaude'];?>'>
                    <label for="problemaSaude">Tem algum problema de saúde?</label>
                </div>
            </table>
        </fieldset> <br><br>

        <img src="img/mapa_dental.png"> <br><br>

        <fieldset>
            <legend>Tratamento superior</legend>
            <table>
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="maxSuperior" name="maxSuperior" class="materialize-textarea"><?php echo $dados['maxSuperior'];?></textarea>
                    <label for="maxSuperior">Liste aqui os dentes que serão tratados</label>
                </div>
            </table>
        </fieldset> <br>

        <fieldset>
            <legend>Tratamento inferior</legend>
            <table>
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="maxInferior" name="maxInferior" class="materialize-textarea"><?php echo $dados['maxInferior'];?></textarea>
                    <label for="maxInferior">Liste aqui os dentes que serão tratados</label>
                </div>
            </table>
        </fieldset> <br>

        <fieldset>
            <legend>Tratamento a Realizar</legend>
            <table>
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea name="tratamento" id="tratamento" class="materialize-textarea"><?php echo $dados['tratamento'];?></textarea>
                    <label for="tratamento">Bloco de lista</label>
                </div>

                <div class="input-field col s2 push-m5">
                        <input type="text" name="orcamento" id="orcamento" value='<?php echo $dados['orcamento'];?>'>
                        <label for="orcamento">Valor total:</label>
                        <script type="text/javascript">
                            $("#orcamento").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
                        </script>
                </div>
            </table>
        </fieldset>

            <br><button type="submit" name="btn-editar" class="btn teal lighten-2">Atualizar</button>
            <a href="index.php" class="btn black">Listar</a>
        </form>  
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>