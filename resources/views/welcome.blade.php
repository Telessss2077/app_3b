<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autenticação</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #0d1117, #1a202c); /* Gradiente mais escuro */
            color: #c9d1d9; /* Texto claro */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            overflow: hidden;
        }
        .container {
            background-color: #161b22; /* Contêiner com fundo mais claro para contraste */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
            width: 100%;
            max-width: 420px;
            text-align: center;
            animation: popIn 1s ease-in-out; /* Animação de entrada */
        }
        @keyframes popIn {
            0% { transform: scale(0.8); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }
        h2 {
            font-size: 36px;
            font-family: 'Roboto', sans-serif; /* Fonte personalizada para títulos */
            color: #58a6ff; /* Azul claro para o título */
            margin-bottom: 30px;
            text-transform: uppercase;
        }
        .input-group {
            margin-bottom: 20px;
        }
        .input-group label {
            display: block;
            font-size: 14px;
            margin-bottom: 8px;
            color: #8b949e; /* Cor suave para os rótulos */
            font-family: 'Verdana', sans-serif; /* Fonte para os rótulos */
        }
        .input-group input {
            width: 100%;
            padding: 14px;
            font-size: 16px;
            border: 2px solid #30363d; /* Borda escura */
            border-radius: 6px;
            background: transparent;
            color: white;
            text-align: center;
            font-family: 'Arial', sans-serif; /* Fonte para os campos de entrada */
            transition: all 0.3s ease;
        }
        .input-group input:focus {
            border-color: #58a6ff; /* Cor do campo quando em foco */
            outline: none;
            box-shadow: 0 0 10px rgba(88, 166, 255, 0.7);
        }
        .button {
            width: 100%;
            padding: 14px;
            font-size: 18px;
            background: #58a6ff; /* Azul GitHub para o botão */
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            font-family: 'Verdana', sans-serif; /* Fonte para o botão */
        }
        .button:hover {
            background: #1f6feb; /* Cor mais escura no hover */
            box-shadow: 0 0 15px rgba(31, 111, 235, 0.7);
        }
        .links {
            margin-top: 20px;
        }
        .links a {
            color: #58a6ff; /* Azul claro para os links */
            text-decoration: none;
            font-size: 16px;
            font-family: 'Verdana', sans-serif; /* Fonte para os links */
            transition: all 0.3s ease;
        }
        .links a:hover {
            text-decoration: underline;
            transform: scale(1.1);
        }
        .error-message {
            position: absolute;
            top: 100%;
            left: 0;
            color: #e62e2e; /* Vermelho para a mensagem de erro */
            font-size: 12px;
            margin-top: 5px;
            font-family: 'Arial', sans-serif; /* Fonte da mensagem de erro */
        }
        /* Ocultar as abas até serem ativadas */
        .tab-content {
            display: none;
        }
        .tab-content.active {
            display: block;
        }

        /* Media Queries para Responsividade */
        @media (max-width: 768px) {
            .container {
                max-width: 90%; /* Faz o container ocupar 90% da tela em dispositivos menores */
                padding: 20px;
            }
            h2 {
                font-size: 30px; /* Tamanho menor para o título */
            }
            .input-group input {
                font-size: 14px; /* Ajusta o tamanho da fonte nos campos de entrada */
                padding: 12px;
            }
            .button {
                font-size: 16px; /* Ajusta o tamanho do botão */
                padding: 12px;
            }
        }

        @media (max-width: 480px) {
            h2 {
                font-size: 26px; /* Tamanho ainda menor para telas muito pequenas */
            }
            .input-group input {
                font-size: 14px;
                padding: 10px;
            }
            .button {
                font-size: 14px; /* Ajusta o tamanho do botão */
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Página de Login -->
        <div id="login" class="tab-content active">
            <h2>Login</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="cpf">CPF</label>
                    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF" required maxlength="14">
                    <div class="error-message" id="cpfError"></div>
                </div>
                <div class="input-group">
                    <label for="senha">Senha</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="button">Login</button>
            </form>
            <div class="links">
                <a href="#" onclick="showTab('esqueci-senha')">Esqueceu sua senha?</a><br>
                <a href="#" onclick="showTab('criar-conta')">Criar uma conta</a>
            </div>
        </div>

        <!-- Página Redefinir Senha -->
        <div id="esqueci-senha" class="tab-content">
            <h2>Redefinir Senha</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="cpf-senha">Digite seu CPF</label>
                    <input type="text" id="cpf-senha" name="cpf-senha" placeholder="Digite seu CPF" required maxlength="14">
                </div>
                <button type="submit" class="button">Enviar Instruções</button>
            </form>
            <div class="links">
                <a href="#" onclick="showTab('login')">Voltar para o Login</a>
            </div>
        </div>

        <!-- Página Criar Conta -->
        <div id="criar-conta" class="tab-content">
            <h2>Criar Conta</h2>
            <form action="#" method="POST">
                <div class="input-group">
                    <label for="cpf-novo">Digite seu CPF</label>
                    <input type="text" id="cpf-novo" name="cpf-novo" placeholder="Digite seu CPF" required maxlength="14">
                </div>
                <div class="input-group">
                    <label for="email-novo">E-mail</label>
                    <input type="email" id="email-novo" name="email-novo" placeholder="Digite seu e-mail" required>
                </div>
                <div class="input-group">
                    <label for="nome-novo">Nome Completo</label>
                    <input type="text" id="nome-novo" name="nome-novo" placeholder="Digite seu nome completo" required>
                </div>
                <div class="input-group">
                    <label for="senha-nova">Senha</label>
                    <input type="password" id="senha-nova" name="senha-nova" placeholder="Digite sua senha" required>
                </div>
                <button type="submit" class="button">Criar Conta</button>
            </form>
            <div class="links">
                <a href="#" onclick="showTab('login')">Voltar para o Login</a>
            </div>
        </div>
    </div>

    <script>
        // Função para exibir a aba selecionada
        function showTab(tabName) {
            const tabs = document.querySelectorAll('.tab-content');
            tabs.forEach(tab => {
                tab.classList.remove('active');
            });

            const activeTab = document.getElementById(tabName);
            if (activeTab) {
                activeTab.classList.add('active');
            }
        }

        // Função para formatar o CPF
        function formatarCPF(cpf) {
            cpf = cpf.replace(/\D/g, ''); // Remove qualquer coisa que não seja número
            cpf = cpf.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
            return cpf;
        }

        // Função para permitir apenas números e formatar o CPF
        function aplicarMascaraCPF(campo) {
            campo.addEventListener('input', function () {
                this.value = formatarCPF(this.value);
            });
        }

        // Aplicar a máscara nos campos de CPF
        const cpfFields = document.querySelectorAll('#cpf, #cpf-senha, #cpf-novo');
        cpfFields.forEach(campo => aplicarMascaraCPF(campo));
    </script>
</body>
</html>



