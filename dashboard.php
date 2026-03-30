<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de Controle</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="dashboard-shell">
        <aside class="dashboard-sidebar">
            <div class="brand">ClientControl</div>
            <nav class="dashboard-nav" aria-label="Navegação da dashboard">
                <a href="dashboard.php" class="active">Visão geral</a>
                <a href="clientes/listar.php">Clientes</a>
                <a href="clientes/cadastrar.php">Novo cliente</a>
                <a href="clientes/editar.php">Editar cliente</a>
                <a href="clientes/excluir.php">Excluir cliente</a>
                <a href="logout.php" class="logout-link">Sair</a>
            </nav>
        </aside>
        <main class="dashboard-main">
            <header class="dashboard-header">
                <div>
                    <span class="eyebrow">Painel</span>
                    <h1>Bem-vindo ao ClientControl</h1>
                    <p>Monitore seus clientes e acesse rapido as principais funções do sistema.</p>
                </div>
                <div class="header-actions">
                    <a class="button" href="clientes/cadastrar.php">Cadastrar novo cliente</a>
                </div>
            </header>
            <section class="dashboard-cards" aria-label="Indicadores principais">
                <article class="card">
                    <span class="card-label">Clientes</span>
                    <strong>148</strong>
                    <p>Contagem total de clientes ativos.</p>
                </article>
                <article class="card">
                    <span class="card-label">Novos</span>
                    <strong>12</strong>
                    <p>Clientes cadastrados na ultima semana.</p>
                </article>
                <article class="card">
                    <span class="card-label">Ações</span>
                    <strong>4</strong>
                    <p>Processos pendentes de atualização.</p>
                </article>
            </section>
            <section class="dashboard-panel">
                <div class="panel">
                    <div class="panel-title">
                        <h2>Clientes recentes</h2>
                        <a href="clientes/listar.php">Ver todos</a>
                    </div>
                    <div class="table-wrap">
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>E-mail</th>
                                    <th>Telefone</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Lucas Almeida</td>
                                    <td>lucas@example.com</td>
                                    <td>(11) 99999-1234</td>
                                    <td><span class="badge badge-active">Ativo</span></td>
                                </tr>
                                <tr>
                                    <td>Mariana Souza</td>
                                    <td>mariana@example.com</td>
                                    <td>(21) 98888-5678</td>
                                    <td><span class="badge badge-active">Ativo</span></td>
                                </tr>
                                <tr>
                                    <td>Rafael Mendes</td>
                                    <td>rafael@example.com</td>
                                    <td>(31) 97777-4321</td>
                                    <td><span class="badge badge-pending">Pendente</span></td>
                                </tr>
                                <tr>
                                    <td>Aline Costa</td>
                                    <td>aline@example.com</td>
                                    <td>(41) 96666-8765</td>
                                    <td><span class="badge badge-active">Ativo</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel small">
                    <div class="panel-title">
                        <h2>ações rápidas</h2>
                    </div>
                    <ul class="quick-actions">
                        <li><a href="clientes/cadastrar.php">Cadastrar cliente</a></li>
                        <li><a href="clientes/listar.php">Ver lista de clientes</a></li>
                        <li><a href="clientes/editar.php">Editar cliente</a></li>
                        <li><a href="clientes/excluir.php">Excluir cliente</a></li>
                    </ul>
                </div>
            </section>
        </main>
    </div>
</body>
</html>
