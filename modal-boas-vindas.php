        <!-- Modal Boas-Vindas -->
        <div class="modal fade" id="modalBoasVindas" tabindex="-1" aria-labelledby="modalBoasVindasLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalBoasVindasLabel">Acesso ao Portal</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs mb-3" id="tabLoginCadastro" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="cadastro-tab" data-bs-toggle="tab" data-bs-target="#cadastro" type="button" role="tab">Cadastro</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="tabContent">
                            <!-- Login -->
                            <div class="tab-pane fade show active" id="login" role="tabpanel">
                                <form method="post" action="login.php">
                                    <div class="mb-3">
                                        <label for="emailLogin" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="emailLogin" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="senhaLogin" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senhaLogin" name="senha" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Entrar</button>
                                </form>
                            </div>
                            <!-- Cadastro -->
                            <div class="tab-pane fade" id="cadastro" role="tabpanel">
                                <form method="post" action="cadastrar.php">
                                    <div class="mb-3">
                                        <label for="nomeCadastro" class="form-label">Nome completo</label>
                                        <input type="text" class="form-control" id="nomeCadastro" name="nome" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="emailCadastro" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="emailCadastro" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="senhaCadastro" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senhaCadastro" name="senha" required>
                                    </div>
                                    <button type="submit" class="btn btn-success w-100">Cadastrar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>