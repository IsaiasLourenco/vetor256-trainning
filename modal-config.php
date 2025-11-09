<!-- Modal Config-->
<div class="modal fade" id="modalConfig" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="exampleModalLabel">Editar Configurações</h4>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <form id="form-config">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="nome_sistema">Nome do Sistema</label>
                            <input type="text" class="form-control" id="nome_sistema" name="nome_sistema" value="<?php echo $nome_sistema ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="email_sistema">E-mail do Sistema</label>
                            <input type="email" class="form-control" id="email_sistema" name="email_sistema" value="<?php echo $email_sistema ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="telefone_sistema">Telefone do Sistema</label>
                            <input type="text" class="form-control" id="telefone_sistema" name="telefone_sistema" value="<?php echo $telefone_sistema ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="cnpj_sistema">CNPJ</label>
                            <input type="text" class="form-control" id="cnpj_sistema" name="cnpj_sistema" value="<?php echo $cnpj_sistema ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="telefone_fixo">Telefone Fixo</label>
                            <input type="text" class="form-control" id="telefone_fixo" name="telefone_fixo" value="<?php echo $telefone_fixo ?>" required>
                        </div>
                        <div class="col-md-4">
                            <label for="cep-sistema">CEP</label>
                            <input type="text" class="form-control" id="cep-sistema" name="cep-sistema" value="<?php echo $cep_sistema ?>" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="rua-sistema">Rua</label>
                            <input type="text" class="form-control" id="rua-sistema" name="rua-sistema" value="<?php echo $rua_sistema ?>" readonly>
                        </div>
                        <div class="col-md-2">
                            <label for="numero-sistema">Número</label>
                            <input type="text" class="form-control" id="numero-sistema" name="numero-sistema" value="<?php echo $numero_sistema ?>" required>
                        </div>
                        <div class="col-md-5">
                            <label for="bairro-sistema">Bairro</label>
                            <input type="text" class="form-control" id="bairro-sistema" name="bairro-sistema" value="<?php echo $bairro_sistema ?>" readonly>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="cidade">Cidade</label>
                            <input type="text" class="form-control" id="cidade-sistema" name="cidade-sistema" value="<?php echo $cidade_sistema ?>" readonly>
                        </div>
                        <div class="col-md-3">
                            <label for="estado-sistema">Estado</label>
                            <input type="text" class="form-control" id="estado-sistema" name="estado-sistema" value="<?php echo $estado_sistema ?>" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="tipoRel">Tipo Relatório</label>
                            <select class="form-control" name="tipoRel">
                                <option value="PDF" <?php if ($tipo_rel == 'PDF') { ?> selected <?php } ?>>PDF</option>
                                <option value="HTML" <?php if ($tipo_rel == 'HTML') { ?> selected <?php } ?>>HTML</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label for="dev">Desenvolvedor</label>
                            <input type="text" class="form-control" id="dev" name="dev" value="<?php echo $dev ?>">
                        </div>
                        <div class="col-md-8">
                            <label for="site">Site</label>
                            <input type="text" class="form-control" id="site" name="site" value="<?php echo $site_dev ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="linkedin">LinkedIn</label>
                            <input type="text" class="form-control" id="linkedin" name="linkedin" value="<?php echo $linkedin ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="youtube">Youtube</label>
                            <input type="text" class="form-control" id="youtube" name="youtube" value="<?php echo $youtube ?>">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label for="instagram">Instagram</label>
                            <input type="text" class="form-control" id="instagram" name="instagram" value="<?php echo $instagram ?>">
                        </div>
                        <div class="col-md-6">
                            <label for="url_sistema">URL para Relatório</label>
                            <input type="text" class="form-control" id="url_sistema" name="url_sistema"
                                value="<?php echo $url_sistema ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mg-t-2">
                            <label for="logotipo" class="custom-file-upload">Logotipo(*.png)</label>
                            <input type="file" id="logotipo" name="logotipo" onchange="carregarImgLogotipo()">
                        </div>
                        <div class="col-md-2 mg-t-2">
                            <img src="src/img/<?php echo $logo_sistema; ?>" alt="Logotipo" style="width: 80px;" id="target-logo">
                        </div>
                        <div class="col-md-4 mg-t-2">
                            <label for="icone" class="custom-file-upload">Ícone(*.png)</label>
                            <input type="file" class="form-control" id="icone" name="icone" onchange="carregarImgIcone()">
                        </div>
                        <div class="col-md-2 mg-t-2">
                            <img src="src/img/<?php echo $icone_sistema; ?>" alt="Icone" style="width: 80px;" id="target-ico">
                        </div>
                        <input type="hidden" name="id" value="<?php echo $id_sistema ?>">
                    </div>
                    <div class="row">
                        <div class="col-md-4 mg-t-2">
                            <label for="logo_rel" class="custom-file-upload">Logotipo Relatório(*.jpg)</label>
                            <input type="file" class="form-control" id="logo_rel" name="logo_rel" onchange="carregarImgLogoRel()">
                        </div>
                        <div class="col-md-2 mg-t-2 mg-b-2">
                            <img src="src/img/<?php echo $logo_rel; ?>" alt="Logotipo do Relatório" style="width: 80px;"
                                id="target-logo-rel">
                        </div>
                        <div class="col-md-4 mg-t-2">
                            <label for="logo_parceiro" class="custom-file-upload">Logotipo Parceiro(*.png)</label>
                            <input type="file" class="form-control" id="logo_parceiro" name="logo_parceiro" onchange="carregarImgLogoPar()">
                        </div>
                        <div class="col-md-2 mg-t-2 mg-b-2">
                            <img src="src/img/<?php echo $logo_par; ?>" alt="Logotipo do Parceiro" style="width: 80px;"
                                id="target-logo-par">
                        </div>
                        <div id="msg-config" class="centro"></div>
                    </div>
                    <div class="modal-footer centro">
                        <button type="submit" class="custom-file-upload">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fim Modal Config -->