<?php
//header
include_once 'includes/header.php';
//css
include_once 'css/adicionar.php';
//mask
include_once 'includes/masks.php';
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

<div class="row">
    <div class="col s12 m6 push-m3">
    <body>
        <h3 class="light"> Cadastro de Paciente </h3>
        <form method="POST" action="php_action/create.php">
        <fieldset>
            <table>
                <div class="input-field col s12"> 
                <i class="material-icons prefix">account_circle</i>  
                <input type="text" name="nome" id="nome">
                    <label for="nome">Nome</label>
                </div>
                    
                <div class="input-field col s12">
                    <input type="text" name="endereco" id="endereco">
                    <label for="endereco">Endereço</label>
                </div>
                
                <div class="input-field col s12">
                        <input type="text" name="indicacao" id="indicacao">
                        <label for="indicacao">Indicação</label>
                </div> 

                <div class="input-field col s4">
                    <input type="text" name="telefone" id="telefone" placeholder="Ex.: (00) 00000-0000">
                    <label for="telefone">Telefone</label>
                    <script type="text/javascript">$("#telefone").mask("(00) 00000-0000");</script>
                </div>
                
                <div class="input-field col s4">
                    <input type="text" name="cep" id="cep" placeholder="Ex.: 00000-000">
                    <label for="cep">CEP</label>
                    <script type="text/javascript">$("#cep").mask("00000-000");</script>
                </div>
                
                <div class="input-field col s4">
                        <input type="text" name="cpf" id="cpf" placeholder="Ex.: 000.000.000-00">
                        <label for="cpf">CPF</label>
                        <script type="text/javascript">$("#cpf").mask("000.000.000-00");</script>
                </div>
                
                <div class="input-field col s4">
                    <select id="estadoCivil" name="estadoCivil">
                        <option value="" disabled selected>Escolha uma opção</option>
                        <option value="Solteiro(a)">Solteiro(a)</option>
                        <option value="Casado(a)">Casado(a)</option>
                        <option value="Divorciado(a)">Divorciado(a)</option>
                        <option value="Viúvo(a)">Viúvo(a)</option>
                    </select>
                        <label>Estado Civil</label>
                </div>

                <div class="input-field col s4">
                        <input type="text" name="idade" id="idade">
                        <label for="idade">Idade</label>
                        <script type="text/javascript">$("#idade").mask("00");</script>
                </div>

                <div class="input-field col s4">
                        <input type="text" name="rg" id="rg" placeholder="Ex.: 00.000.000-0">
                        <label for="rg">RG</label>
                        <script type="text/javascript">$("#rg").mask("00.000.000-0");</script>
                </div>

                <div class="input-field col s12">
                        <input type="text" name="profissao" id="profissao">
                        <label for="profissao">Profissão</label>
                </div>

            </table>
        </fieldset> <br><br>
        <fieldset>
            <legend>Histórico</legend>
            <table>
                <div class="input-field col s4">
                    <select name="pressaoAlta" id="pressaoAlta">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                        <label>Tem Pressão alta?</label>
                </div>

                <div class="input-field col s4">
                    <select name="fumante" id="fumante">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                        <label>Fuma?</label>
                </div>

                <div class="input-field col s4">
                    <select name="bebe" id="bebe">
                        <option value="Não">Não</option>
                        <option value="Sim">Sim</option>
                    </select>
                        <label>Bebe?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="alergico" id="alergico">
                    <label for="alergico">É alérgico a algum medicamento?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="tomaRemedio" id="tomaRemedio">
                    <label for="tomaRemedio">Toma algum remédio?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="fezCirurgia" id="fezCirurgia">
                    <label for="fezCirurgia">Já fez cirurgia?</label>
                </div>

                <div class="input-field col s12">
                    <input type="text" name="problemaSaude" id="problemaSaude">
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
                    <textarea id="maxSuperior" name="maxSuperior" class="materialize-textarea"></textarea>
                    <label for="maxSuperior">Liste aqui os dentes que serão tratados</label>
                </div>
            </table>
        </fieldset> <br>

        <fieldset>
            <legend>Tratamento inferior</legend>
            <table>
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="maxInferior" name="maxInferior" class="materialize-textarea"></textarea>
                    <label for="maxInferior">Liste aqui os dentes que serão tratados</label>
                </div>
            </table>
        </fieldset> <br>

        <fieldset>
            <legend>Tratamento a Realizar</legend>
            <table>
                <div class="input-field col s12">
                    <i class="material-icons prefix">mode_edit</i>
                    <textarea id="tratamento" name="tratamento" class="materialize-textarea"></textarea>
                    <label for="tratamento">Bloco de lista</label>
                </div>

                <div class="input-field col s2 push-m5">
                        <input type="text" name="orcamento" id="orcamento">
                        <label for="orcamento">Valor total:</label>
                        <script type="text/javascript">
                            $("#orcamento").maskMoney({showSymbol:true, symbol:"R$", decimal:",", thousands:"."});
                        </script>
                </div>
            </table>
        </fieldset>

            <br><button type="submit" name="btn-cadastrar" class="btn teal lighten-2">Cadastrar</button>
            <a href="index.php" class="btn black">Lista</a>
        </form>
    </body>
    </div>
</div>

<?php
//footer
include_once 'includes/footer.php';
?>