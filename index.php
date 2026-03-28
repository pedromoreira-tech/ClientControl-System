<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main class="login-page" aria-labelledby="login-title">
        <section aria-label="Área de login">
            <h1 id="login-title">Acesse sua conta</h1>
            <p>Digite seu e-mail e senha para entrar no sistema.</p>
            <form class="login-form" action="/clientes/login" method="post" autocomplete="on">
                <fieldset>
                    <legend>Formulário de autenticação</legend>
                    <div class="form-control">
                        <label for="email">E-mail</label>
                        <input type="email" id="email" name="email" required placeholder="seu@email.com">
                    </div>
                    <div class="form-control">
                        <label for="senha">Senha</label>
                        <input type="password" id="senha" name="senha" required minlength="6" placeholder="••••••••">
                    </div>
                </fieldset>
                <div class="actions">
                    <button type="submit">Entrar</button>
                    <a class="forgot-link" href="#">Esqueci minha senha</a>
                </div>
            </form>
        </section>
    </main>
</body>
</html>