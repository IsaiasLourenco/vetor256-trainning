<?php
require_once('conexao.php');
$id = $_POST['id'];
$nome = $_POST['nome_sistema'];
$email = $_POST['email_sistema'];
$telefone = $_POST['telefone_sistema'];
$telefone_fixo = $_POST['telefone_fixo'];
$cnpj = $_POST['cnpj_sistema'];
$cep = $_POST['cep-sistema'];
$rua = $_POST['rua-sistema'];
$numero = $_POST['numero-sistema'];
$bairro = $_POST['bairro-sistema'];
$cidade = $_POST['cidade-sistema'];
$estado = $_POST['estado-sistema'];
$tipo_rel = $_POST['tipoRel'];
$dev = $_POST['dev'];
$site = $_POST['site'];
$linkedin = $_POST['linkedin'];
$youtube = $_POST['youtube'];
$instagram = $_POST['instagram'];
$url_sistema = $_POST['url_sistema'];

//validar troca das fotos
$query = $pdo->query("SELECT * FROM config where id = '$id'");
$res = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = count($res);
if ($total_reg > 0) {
    $logotipo = $res[0]['logotipo'];
    $icone = $res[0]['icone'];
    $logo_rel = $res[0]['logo_rel'];
    $logo_par = $res[0]['logo_parceiro'];
} else {
    $logotipo = 'sem-foto.jpg';
    $icone = 'sem-foto.jpg';
    $logo_rel = 'sem-foto.jpg';
    $logo_par = 'sem-foto.jpg';
}


//SCRIPT PARA SUBIR FOTO NO SERVIDOR
$nome_logo = date('d-m-Y H:i:s') . '-' . @$_FILES['logotipo']['name'];
$nome_icone = date('d-m-Y H:i:s') . '-' . @$_FILES['icone']['name'];
$nome_logo_rel = date('d-m-Y H:i:s') . '-' . @$_FILES['logo_rel']['name'];
$nome_logo_par = date('d-m-Y H:i:s') . '-' . @$_FILES['logo_parceiro']['name'];
$nome_logo = preg_replace('/[ :]+/', '-', $nome_logo);
$nome_icone = preg_replace('/[ :]+/', '-', $nome_icone);
$nome_logo_rel = preg_replace('/[ :]+/', '-', $nome_logo_rel);
$nome_logo_par = preg_replace('/[ :]+/', '-', $nome_logo_par);

$caminho_logo = 'src/img/' . $nome_logo;
$caminho_icone = 'src/img/' . $nome_icone;
$caminho_logo_rel = 'src/img/' . $nome_logo_rel;
$caminho_logo_par = 'src/img/' . $nome_logo_par;

$imagem_logo_temp = $_FILES['logotipo']['tmp_name'];
$imagem_icone_temp = $_FILES['icone']['tmp_name'];
$imagem_logo_rel_temp = $_FILES['logo_rel']['tmp_name'];
$imagem_logo_par_temp = $_FILES['logo_parceiro']['tmp_name'];

if (@$_FILES['logotipo']['name'] != "") {
    $ext_logo = pathinfo($nome_logo, PATHINFO_EXTENSION);
    if ($ext_logo == 'png' or $ext_logo == 'jpg' or $ext_logo == 'jpeg' or $ext_logo == 'gif') {
       //EXCLUO A FOTO ANTERIOR
        if ($logotipo != "sem-foto.jpg") {
            @unlink('src/img/' . $logotipo);
        }

        $logotipo = $nome_logo;

        move_uploaded_file($imagem_logo_temp, $caminho_logo);
    } else {
        echo 'Extensão de Imagem não permitida!';
        exit();
    }
}

if (@$_FILES['icone']['name'] != "") {
    $ext_icone = pathinfo($nome_icone, PATHINFO_EXTENSION);
    if ($ext_icone == 'png' or $ext_icone == 'jpg' or $ext_icone == 'jpeg' or $ext_icone == 'gif') {
       //EXCLUO A FOTO ANTERIOR
        if ($icone != "sem-foto.jpg") {
            @unlink('src/img/' . $icone);
        }

        $icone = $nome_icone;

        move_uploaded_file($imagem_icone_temp, $caminho_icone);
    } else {
        echo 'Extensão de Imagem não permitida!';
        exit();
    }
}

if (@$_FILES['logo_rel']['name'] != "") {
    $ext_logo_rel = pathinfo($nome_logo_rel, PATHINFO_EXTENSION);
    if ($ext_logo_rel == 'png' or $ext_logo_rel == 'jpg' or $ext_logo_rel == 'jpeg' or $ext_logo_rel == 'gif') {
       //EXCLUO A FOTO ANTERIOR
        if ($logo_rel != "sem-foto.jpg") {
            @unlink('src/img/' . $logo_rel);
        }

        $logo_rel = $nome_logo_rel;

        move_uploaded_file($imagem_logo_rel_temp, $caminho_logo_rel);
    } else {
        echo 'Extensão de Imagem não permitida!';
        exit();
    }
}

if (@$_FILES['logo_parceiro']['name'] != "") {
    $ext_logo_par = pathinfo($nome_logo_par, PATHINFO_EXTENSION);
    if ($ext_logo_par == 'png' or $ext_logo_par == 'jpg' or $ext_logo_par == 'jpeg' or $ext_logo_par == 'gif') {
       //EXCLUO A FOTO ANTERIOR
        if ($logo_par != "sem-foto.jpg") {
            @unlink('src/img/' . $logo_par);
        }

        $logo_par = $nome_logo_par;

        move_uploaded_file($imagem_logo_par_temp, $caminho_logo_par);
    } else {
        echo 'Extensão de Imagem não permitida!';
        exit();
    }
}

$query = $pdo->prepare("UPDATE config SET nome_sistema = :nome, 
                                            email_sistema = :email, 
                                            telefone_sistema = :telefone,
                                            telefone_fixo = :telefone_fixo,
                                            cnpj_sistema = :cnpj,
                                            cep_sistema = :cep,
                                            rua_sistema = :rua,
                                            numero_sistema = :numero,
                                            bairro_sistema = :bairro,
                                            cidade_sistema = :cidade,
                                            estado_sistema = :estado,
                                            instagram_sistema = :instagram,
                                            linkedin_sistema = :linkedin,
                                            youtube_sistema = :youtube,
                                            tipo_relatorio = :tipo_relatorio,                                            
                                            desenvolvedor = :desenvolvedor,
                                            site_dev = :site_dev,
                                            logotipo = '$logotipo',
                                            icone = '$icone',
                                            logo_rel = '$logo_rel',
                                            logo_parceiro = '$logo_par',
                                            url_sistema = :url_sistema                                            
                                            WHERE id = '$id'");
$query->bindValue(":nome", "$nome");
$query->bindValue(":email", "$email");
$query->bindValue(":telefone", "$telefone"); 
$query->bindValue(":telefone_fixo", "$telefone_fixo"); 
$query->bindValue(":cnpj", "$cnpj");
$query->bindValue(":cep", "$cep");
$query->bindValue(":rua", "$rua");
$query->bindValue(":numero", "$numero");
$query->bindValue(":bairro", "$bairro");
$query->bindValue(":cidade", "$cidade");
$query->bindValue(":estado", "$estado");
$query->bindValue(":instagram", "$instagram");
$query->bindValue(":linkedin", "$linkedin");
$query->bindValue(":youtube", "$youtube");
$query->bindValue(":tipo_relatorio", "$tipo_rel");
$query->bindValue(":desenvolvedor", "$dev");
$query->bindValue(":site_dev", "$site");
$query->bindValue(":url_sistema", "$url_sistema");
$query->execute();

echo 'Editado com Sucesso';
?>