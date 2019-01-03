<div class="tab-pane <?php echo $active[2]; ?>" id="patients">
    <div class="fundo-content">
        <?php
            if($_GET['action'] == 'new-patient'){
        ?>
        <div class="header-patients form-horizontal">
            <form method="POST" action="<?php echo $_SERVER[PHP_SELF];?>" class="col-md-12">
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Dados pessoais:</legend>
                        <div class="form-group">
                            <label for="np-name" class="col-sm-2 control-label">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-name"  name="np-name" placeholder="" >
                            </div> <!-- required -->
                        </div>
                        <div class="form-group">
                            <label for="np-data" class="col-sm-2 control-label">Data de Nascimento</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" id="np-data" name="np-data">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-genero" class="col-sm-2 control-label">Gênero</label>
                            <div class="col-sm-10">
                                <label class="radio-inline">
                                    <input type="radio" name="radioGenero" id="np-genero-masc" value="1">Masculino
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="radioGenero" id="np-genero-fem" value="2">Feminino
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-email" class="col-sm-2 control-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="np-email" name="np-email" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-phone" class="col-sm-2 control-label">Telefone</label>
                            <div class="col-sm-10">
                                <input type="tel" class="form-control" name="np-phone" id="np-phone" placeholder="35900000000" pattern="[0-9]{2}[0-9]{5}[0-9]{4}$" required >
                            </div>
                            <!-- https://api.whatsapp.com/send?phone=55359... -->
                        </div>
                        <div class="form-group">
                            <label for="np-rg" class="col-sm-2 control-label">RG</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-rg" name="np-rg" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-cpf" class="col-sm-2 control-label">CPF</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-cpf" name="np-cpf" placeholder="111.111.111-10">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-obs" class="col-sm-2 control-label">Observação</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-obs" name="np-obs" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-howmeet" class="col-sm-2 control-label">Como conheceu</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="np-howmeet" name="np-howmeet">
                                    <option value=""></option>
                                    <?php                                    
                                        $c = new Conexao();
                                        $sql = "SELECT id, howmeet FROM howmeet ORDER BY id;";
                                        $res = $c->query($sql);
                                        while($f = $c->queryFetchObject($res)){
                                            $id = $f->id;                
                                            $howmeet = $f->howmeet;                                      
                                            echo "<option value='$id'>$howmeet</option>";
                                        }
                                    ?>
                                </select>                                
                            </div>
                        </div>
                    </legend>
                </fieldset>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Endereço:</legend>
                        <div class="form-group">
                            <label for="np-cep" class="col-sm-2 control-label">CEP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-cep" name="np-cep" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-logradouro" class="col-sm-2 control-label">Logradouro</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-logradouro" name="np-logradouro" placeholder="">
                            </div>
                        </div>                      
                        <div class="form-group">
                            <label for="np-numero" class="col-sm-2 control-label">Número</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-numero" name="np-numero" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-complemento" class="col-sm-2 control-label">Complemento</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-complemento" name="np-complemento" placeholder="">
                            </div>
                        </div>                        
                        <div class="form-group">
                            <label for="np-bairro" class="col-sm-2 control-label">Bairro</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-bairro" name="np-bairro" placeholder="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-cidade" class="col-sm-2 control-label">Cidade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-cidade" name="np-cidade" placeholder="">
                            </div>
                        </div>                       
                        <div class="form-group">
                            <label for="np-uf" class="col-sm-2 control-label">Estado</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="np-uf" name="np-uf">
                                    <option value=""></option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <script type="text/javascript">
                            $("#np-cep").focusout(function(){
                                //Início do Comando AJAX
                                $.ajax({
                                    //O campo URL diz o caminho de onde virá os dados
                                    //É importante concatenar o valor digitado no CEP
                                    url: 'https://viacep.com.br/ws/'+$(this).val()+'/json/unicode/',
                                    //Aqui você deve preencher o tipo de dados que será lido,
                                    //no caso, estamos lendo JSON.
                                    dataType: 'json',
                                    //SUCESS é referente a função que será executada caso
                                    //ele consiga ler a fonte de dados com sucesso.
                                    //O parâmetro dentro da função se refere ao nome da variável
                                    //que você vai dar para ler esse objeto.
                                    success: function(resposta){
                                        //Agora basta definir os valores que você deseja preencher
                                        //automaticamente nos campos acima.
                                        $("#np-logradouro").val(resposta.logradouro);
                                        $("#np-complemento").val(resposta.complemento);
                                        $("#np-bairro").val(resposta.bairro);
                                        $("#np-cidade").val(resposta.localidade);
                                        $("#np-uf").val(resposta.uf);
                                        //Vamos incluir para que o Número seja focado automaticamente
                                        //melhorando a experiência do usuário
                                        $("#np-numero").focus();
                                    }
                                });
                            });
                        </script>                                                                    
                    </legend>
                </fieldset>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Dados complementares:</legend>
                        <div class="form-group">
                            <label for="np-nat" class="col-sm-2 control-label">Naturalidade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-nat" name="np-nat" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-est-nat" class="col-sm-2 control-label">Estado naturalidade</label>
                            <div class="col-sm-10">                                
                                <select class="form-control" id="np-est-nat" name="np-est-nat">
                                    <option value=""></option>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-nac" class="col-sm-2 control-label">Nacionalidade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-nac" name="np-nac" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-etnia" class="col-sm-2 control-label">Etnia</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-etnia" name="np-etnia" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-rel" class="col-sm-2 control-label">Religião</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-rel" name="np-rel" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-prof" class="col-sm-2 control-label">Profissão</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-prof" name="np-prof" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-est-civil" class="col-sm-2 control-label">Estado Civil</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="np-est-civil" name="np-est-civil">
                                    <option value=""></option>
                                    <?php                                    
                                    $c = new Conexao();
                                    $sql = "SELECT id, descricao FROM estado_civil ORDER BY id;";
                                    $res = $c->query($sql);
                                    while($f = $c->queryFetchObject($res)){
                                        $id = $f->id;                
                                        $descricao = $f->descricao;                                      
                                        echo "<option value='$id'>$descricao</option>";
                                    }
                                ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-esc" class="col-sm-2 control-label">Escolaridade</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="np-esc" name="np-esc">
                                    <option value=""></option>
                                    <?php                                    
                                        $c = new Conexao();
                                        $sql = "SELECT id, descricao FROM escolaridade ORDER BY id;";
                                        $res = $c->query($sql);
                                        while($f = $c->queryFetchObject($res)){
                                            $id = $f->id;                
                                            $descricao = $f->descricao;                                      
                                            echo "<option value='$id'>$descricao</option>";
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-cns" class="col-sm-2 control-label">Cartão SUS</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-cns" name="np-cns" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-info-add" class="col-sm-2 control-label">Informação adicional</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-info-add" name="np-info-add" placeholder="" >
                            </div>
                        </div>
                    </legend>
                </fieldset>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Dados familiares:</legend>
                        <div class="form-group">
                            <label for="np-nome-mae" class="col-sm-2 control-label">Nome da mãe</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-nome-mae" name="np-nome-mae" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-prof-mae" class="col-sm-2 control-label">Profissão da mãe</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-prof-mae" name="np-prof-mae" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-nome-pai" class="col-sm-2 control-label">Nome do pai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-nome-pai" name="np-nome-pai" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-prof-pai" class="col-sm-2 control-label">Profissão do pai</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-prof-pai" name="np-prof-pai" placeholder="" >
                            </div>
                        </div>
                    </legend>
                </fieldset>
                <fieldset class="scheduler-border">
                    <legend class="scheduler-border">Convênio:</legend>
                        <div class="form-group">
                            <label for="np-convenio" class="col-sm-2 control-label">Convênio</label>
                            <div class="col-sm-10">
                                <select class="form-control" id="np-convenio" name="np-convenio">
                                    <option value=""></option>
                                    <option value="1">Unimed</option>
                                    <option value="2">IPSEMG</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-plano" class="col-sm-2 control-label">Plano/Tipo de contratação</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-plano" name="np-plano" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-n-cart" class="col-sm-2 control-label">Número da carteirinha</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-n-cart" name="np-n-cart" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-val" class="col-sm-2 control-label">Validade</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-val" name="np-val" placeholder="" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="np-acom" class="col-sm-2 control-label">Acomodação</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="np-acom" name="np-acom" placeholder="" >
                            </div>
                        </div>
                    </legend>
                </fieldset>
                <div class="col-md-12" style="text-align: center;">
                    <button type="submit" class="btn btn-primary" value="salvar" name="salvar"> Salvar </button>
                    <button type="submit" class="btn btn-danger" onClick="history.go(-1)"> Cancelar </button>
                </div>
            </form>
        </div>
        <?php
            }
            else{
        ?>
        <div class="header-patients form-inline"> 
            <form method="GET" action="<?php echo $_SERVER[PHP_SELF];?>" class="col-md-10" style="padding-right: 0px; padding-left: 0px;">
                <div class="form-group col-md-10">
                    <input style="width: 100%;" type="text" name="search-patient" class="form-control" placeholder="Digite o nome do paciente...">                    
                    <input type="hidden" name="active" value="patients">
                </div>
                <div class="col-md-2" style="padding-right: 0px; padding-left: 0px;">
                    <button style="width: 100%;" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Procurar</button>
                </div>
            </form>
            <form method="GET" action="<?php echo $_SERVER[PHP_SELF];?>" class="col-md-2" style="padding-right: 0px; padding-left: 0px;">
                <input type="hidden" name="action" value="new-patient">
                <input type="hidden" name="active" value="patients">
                <div class="col-md-12">                   
                    <button style="width: 100%;" type="submit" class="btn btn-success"><span class="glyphicon glyphicon-plus-sign"></span> Adicionar</button>
                </div>                
            </form>
        </div>
        <div class="col-md-12 table-patients">
            <table>
                <tr class="table-patients-tr">
                    <th class="table-patients-name">Nome</th>
                    <th class="table-patients-last">Última consulta</th>
                    <th class="table-patients-button">Editar</th>
                    <th class="table-patients-button">Remover</th>
                </tr>
                <tr class="table-patients-tr">
                    <td class="table-patients-name">dddvdvdvdvdvd</td>
                    <td class="table-patients-last">dddvdvdvdvdvd</td>
                    <td class="table-patients-button"><button style="" type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-cog"></span></button></td>
                    <td class="table-patients-button"><button style="" type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-ban-circle"></span></button></td>
                </tr>
            </table>
        </div>
        <?php
            }
            /*$c = new Conexao();
            $sql = "SELECT id, genero FROM genero;";
            $res = $c->query($sql);
            while($f = $c->queryFetchObject($res)){
                $id = $f->id;                
                $genero = $f->genero;             
                
                echo "$id - $genero";

            }*/
        ?>
    </div>
</div>