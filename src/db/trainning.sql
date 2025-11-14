-- Dropar banco antigo
DROP DATABASE IF EXISTS trainning;

-- Criar banco novo
CREATE DATABASE trainning CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE trainning;

-- Tabela de usuários (base de login e controle de acesso)
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    telefone VARCHAR(20),
    cep VARCHAR(9),
    rua VARCHAR(100),
    numero VARCHAR(10),
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    estado VARCHAR(2),
    nivel ENUM('admin','aluno','funcionario','professor') DEFAULT 'aluno',
    ativo BOOLEAN DEFAULT TRUE,
    criado_em DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Tabela de alunos vinculada a usuários
CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    cpf VARCHAR(14),
    data_nasc DATE,
    telefone VARCHAR(20),
    cep VARCHAR(9),
    rua VARCHAR(100),
    numero VARCHAR(10),
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    estado VARCHAR(2),
    curso_atual VARCHAR(100),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

-- Tabela de funcionários vinculada a usuários
CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_usuario INT NOT NULL,
    cargo VARCHAR(50),
    departamento VARCHAR(50),
    telefone VARCHAR(20),
    cep VARCHAR(9),
    rua VARCHAR(100),
    numero VARCHAR(10),
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    estado VARCHAR(2),
    FOREIGN KEY (id_usuario) REFERENCES usuarios(id)
);

-- Tabela de aulas (cursos disponíveis)
CREATE TABLE aulas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    descricao TEXT,
    link VARCHAR(255),
    email VARCHAR(100),
    telefone VARCHAR(20),
    cep VARCHAR(9),
    rua VARCHAR(100),
    numero VARCHAR(10),
    bairro VARCHAR(50),
    cidade VARCHAR(50),
    estado VARCHAR(2)
);

-- Tabela de matrículas (vincula alunos às aulas)
CREATE TABLE matriculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_aluno INT NOT NULL,
    id_aula INT NOT NULL,
    data_matricula DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_aluno) REFERENCES alunos(id),
    FOREIGN KEY (id_aula) REFERENCES aulas(id)
);

-- Tabela de configurações do sistema
CREATE TABLE config (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_sistema VARCHAR(50) NOT NULL,
    email_sistema VARCHAR(80) NOT NULL UNIQUE,
    telefone_sistema VARCHAR(15) NOT NULL,
    telefone_fixo VARCHAR(15),
    cnpj_sistema VARCHAR(18) NOT NULL,
    cep_sistema VARCHAR(40),
    rua_sistema VARCHAR(40),
    numero_sistema VARCHAR(5),
    bairro_sistema VARCHAR(40),
    cidade_sistema VARCHAR(40),
    estado_sistema VARCHAR(2),
    instagram_sistema VARCHAR(50),
    linkedin_sistema VARCHAR(50),
    youtube_sistema VARCHAR(50),
    tipo_relatório VARCHAR(5),
    cards VARCHAR(5),
    desenvolvedor VARCHAR(50),
    site_dev VARCHAR(50),
    estabelecimento_aberto VARCHAR(10),
    logotipo VARCHAR(100),
    icone VARCHAR(100),
    logo_rel VARCHAR(100),
    url_sistema VARCHAR(100)
);
