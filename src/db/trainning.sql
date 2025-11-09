CREATE DATABASE trainning CHARACTER SET utf8 COLLATE utf8_general_ci;

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

CREATE TABLE alunos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    senha VARCHAR(255)
);

CREATE TABLE aulas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(100),
    descricao TEXT,
    link VARCHAR(255)
);