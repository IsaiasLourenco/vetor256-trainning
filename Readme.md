# 🎓 Portal de Cursos - Vetor256

Bem-vindo ao repositório oficial do **Portal Vetor256**, uma plataforma de ensino online desenvolvida com PHP e Bootstrap, com foco em acessibilidade, personalização e aprendizado com propósito.

## 🚀 Visão Geral

Este projeto é um portal educacional que permite:

- Cadastro e login de alunos
- Acesso restrito a um painel exclusivo
- Visualização de aulas com links externos
- Edição de perfil com atualização de dados e senha
- Logout seguro
- Interface moderna e responsiva com Bootstrap 5
- Modal de login/cadastro integrado à página inicial
- Sistema de configurações dinâmicas via painel administrativo (em desenvolvimento)

## 🛠️ Tecnologias Utilizadas

- **PHP (Procedural)**
- **MySQL** (banco de dados)
- **Bootstrap 5**
- **Bootstrap Icons**
- **jQuery + AJAX**
- **PHPMailer** (em breve)

## 📁 Estrutura de Diretórios

/
├── index.php<br>
├── painel.php<br>
├── aulas-aluno.php<br>
├── editar-perfil.php<br>
├── cadastrar.php<br>
├── login.php<br>
├── logout.php<br>
├── conexao.php<br>
├── header.php<br>
├── header-painel.php<br>
├── footer.php<br>
├── modal-boas-vindas.php<br>
├── src/<br>
│   ├── css/<br>
│   │   └── index.css<br>
│   ├── img/<br>
│   │   ├── favicon.ico<br>
│   │   ├── logotipo.png<br>
│   │   └── ...<br>
│   └── js/<br>
│       ├── mascaras.js<br>
│       ├── buscaCep.js<br>
│       ├── modalConfig.js<br>
│       └── carregarImagens.js<br>

## 🔐 Acesso ao Painel

Após o login, o aluno é redirecionado para o `painel.php`, onde pode:

- Acessar suas aulas
- Editar seu perfil
- Sair com segurança

## ⚙️ Configurações do Sistema

As informações institucionais (nome do sistema, logotipo, redes sociais, etc.) são carregadas dinamicamente a partir da tabela `config` no banco de dados.

## 📌 Requisitos

- PHP 7.4+
- MySQL 5.7+
- Servidor Apache ou similar (XAMPP, WAMP, Laragon)
- Composer (para PHPMailer, em breve)

## 🧪 Como Executar Localmente

1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/vetor256-portal.git

2. Importe o banco de dados (trainnig.sql - que ainda será adicionado)

3. Configure o arquivo conexao.php com os dados do seu banco

4. Inicie o servidor local e acesse http://localhost/vetor256trainning.online

## 📹 Demonstração
Vídeo de apresentação será publicado em breve.
📌 Futuras Implementações
- Progresso de aulas por aluno
- Certificados automáticos
- Área administrativa para gestão de aulas e alunos
- Envio de e-mails com PHPMailer

## 👨‍💻 Desenvolvedor
Projeto desenvolvido por Isaias Lourenço da ©Vetor256.<br>
🔗 https://vetor256.com

## 📄 Licença e Direitos Autorais

© 2025 Vetor256. Todos os direitos reservados.

Este projeto é de uso pessoal e educacional. A reprodução, redistribuição ou modificação sem autorização prévia do autor não é permitida.

Para permissões especiais, entre em contato via [e-mail](mailto:contato@vetor256.com).