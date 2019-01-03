<?php
    if($_POST['salvar'] == 'salvar'){
        $np_name = $_POST['np-name'];
        $np_data = $_POST['np-data'];
        $np_genero = $_POST['radioGenero'];
        $np_email = $_POST['np-email'];
        $np_phone = $_POST['np-phone'];
        $np_rg = $_POST['np-rg'];
        $np_cpf = $_POST['np-cpf'];
        $np_obs = $_POST['np-obs'];
        $np_howmeet = $_POST['np-howmeet'];
        $np_cep = $_POST['np-cep'];
        $np_logradouro = $_POST['np-logradouro'];
        $np_numero = $_POST['np-numero'];
        $np_complemento = $_POST['np-complemento'];
        $np_bairro = $_POST['np-bairro'];
        $np_cidade = $_POST['np-cidade'];
        $np_uf = $_POST['np-uf'];
        $np_nat = $_POST['np-nat'];
        $np_est_nat = $_POST['np-est-nat'];
        $np_nac = $_POST['np-nac'];
        $np_etnia = $_POST['np-etnia'];
        $np_rel = $_POST['np-rel'];
        $np_prof = $_POST['np-prof'];
        $np_est_civil = $_POST['np-est-civil'];
        $np_esc = $_POST['np-esc'];
        $np_cns = $_POST['np-cns'];
        $np_info_add = $_POST['np-info-add'];
        $np_nome_mae = $_POST['np-nome-mae'];
        $np_prof_mae = $_POST['np-prof-mae'];
        $np_nome_pai = $_POST['np-nome-pai'];
        $np_prof_pai = $_POST['np-prof-pai'];
        $np_convenio = $_POST['np-convenio'];
        $np_plano = $_POST['np-plano'];
        $np_n_cart = $_POST['np-n-cart'];
        $np_val = $_POST['np-val'];
        $np_acom = $_POST['np-acom'];

        //$np_nat, $np_est_nat, $np_nac, $np_etnia, $np_rel, $np_prof, $np_est_civil, $np_esc, $np_cns, $np_info_add, $np_nome_mae, $np_prof_mae, $np_nome_pai, $np_prof_pai, $np_convenio, $np_plano, $np_n_cart, $np_val, $np_acom 
        
        $c = new Conexao();

        $sql_insert_address = "INSERT INTO enderecos (logradouro, numero, bairro, complemento, cep, cidade, estado) VALUES ('$np_logradouro', $np_numero, '$np_bairro', '$np_complemento', $np_cep, '$np_cidade', '$np_uf');";
        $res_insert_address = $c->query($sql_insert_address);
        
        echo $res_insert_address;

        //$sql_insert_patient = "INSERT INTO pacientes (name, data_nascimento, genero_fk, email, cel, obs, howmeet_fk, endereco_fk, RG, CPF, convenio_fk, naturalidade, estado_naturalidade, nacionalidade, etnia, religiao, profissao, estado_civil_fk, escolaridade_fk, parentesco_fk, cns, info_adicional)
        //VALUES ('$np_name', '$np_data', $np_genero, '$np_email', '$np_phone', '$np_obs', $np_howmeet, '$np_rg', '$np_cpf', '', '', '', '', '')";
        //$res_insert_patient = $c->query($sql_insert_patient);
    }

?>