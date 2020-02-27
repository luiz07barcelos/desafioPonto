<div id="login">
    <h3 class="text-center text-white pt-5">Login</h3>
    <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
            <div id="login-column" class="col-md-6">
                <div id="login-box" class="col-md-12">
                    <!-- <form id="login-form" class="form" action="" method="post"> -->
                        <h3 class="text-center text-info">Ponto</h3>
                        <div class="form-group">
                            <label for="email" class="text-info">Usuário:</label><br>
                            <input type="text" name="email" id="email" class="form-control">
                            <span id="error-email"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="text-info">Senha:</label><br>
                            <input type="password" name="password" id="password" class="form-control">
                            <span id="error-senha"></span>
                        </div>
                            <button class="btn btn-login btn-success btn-md col-12">Login
                            </button>
						<div id="register-link" class="text-right">
                            <a href="<?= base_url('cadastro') ?>" class="text-info">Cadastre-se Já</a>
                        </div>
                    <!-- </form> -->
                </div>
            </div>
        </div>
    </div>
</div>