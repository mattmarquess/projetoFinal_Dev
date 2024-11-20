# Documentação do Projeto: Sistema de Doação de Sangue

Este projeto tem como objetivo facilitar o processo de doação de sangue, conectando doadores com pontos de coleta e oferecendo recompensas para incentivar a doação regular. O sistema foi desenvolvido utilizando PHP para o backend e PostgreSQL para o banco de dados.

## 1. Visão Geral do Sistema

O sistema permite que os usuários cadastrem-se como doadores, agendem doações e acompanhem seu histórico. Os administradores podem gerenciar os doadores, doações e recompensas.

- **Tecnologias utilizadas**:
  - **Frontend**: HTML, CSS, JavaScript (opcionalmente frameworks como React ou Vue.js)
  - **Backend**: PHP
  - **Banco de Dados**: PostgreSQL

## 2. Diagrama de Classes

Abaixo estão as principais classes que compõem o sistema:

### Classe: Doador
- **Atributos**:
  - `id`: Identificador único (int)
  - `nome`: Nome completo (string)
  - `email`: E-mail (string)
  - `senha`: Senha de acesso (string)
  - `data_nascimento`: Data de nascimento (date)
  - `tipo_sanguineo`: Tipo sanguíneo (string)
  - `documento`: Documento de identificação (string)
  
- **Métodos**:
  - `cadastrarDoador()`
  - `atualizarDados()`
  - `verificarElegibilidade()`

### Classe: Doacao
- **Atributos**:
  - `id`: Identificador único (int)
  - `doador_id`: ID do doador (int)
  - `data_doacao`: Data da doação (date)
  - `tipo_sanguineo`: Tipo sanguíneo (string)
  - `local_coleta`: Local da coleta (string)
  - `status`: Status da doação (string)

- **Métodos**:
  - `agendarDoacao()`
  - `cancelarDoacao()`
  - `confirmarDoacao()`

### Classe: Administrador
- **Atributos**:
  - `id`: Identificador único (int)
  - `nome`: Nome do administrador (string)
  - `email`: E-mail (string)
  - `senha`: Senha de acesso (string)

- **Métodos**:
  - `validarAcesso()`
  - `visualizarDoacoes()`
  - `emitirRecompensa()`

### Classe: Recompensa
- **Atributos**:
  - `id`: Identificador único (int)
  - `nome`: Nome da recompensa (string)
  - `descricao`: Descrição da recompensa (string)
  - `pontos_necessarios`: Pontos necessários para resgatar (int)

- **Métodos**:
  - `resgatarRecompensa()`
  - `atualizarRecompensa()`

## 3. Estrutura do Banco de Dados

### Tabelas Principais

#### Tabela: doadores
```sql
CREATE TABLE doadores (
  id SERIAL PRIMARY KEY,                             -- Identificador único para cada doador
  nome VARCHAR(100) NOT NULL,                        -- Nome completo do doador
  email VARCHAR(100) UNIQUE NOT NULL,                -- E-mail único do doador
  senha VARCHAR(255) NOT NULL,                       -- Senha criptografada do doador
  data_nascimento DATE NOT NULL,                     -- Data de nascimento do doador
  tipo_sanguineo VARCHAR(5) NOT NULL,                -- Tipo sanguíneo do doador
  documento VARCHAR(20) UNIQUE NOT NULL,             -- Documento de identificação (ex.: RG, CPF, etc.)
  data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data de cadastro do doador no sistema
  CONSTRAINT chk_data_nascimento CHECK (data_nascimento < CURRENT_DATE) -- Verifica se a data de nascimento é anterior à data atual
);

-- Índice para otimizar consultas por e-mail e documento
CREATE INDEX idx_email ON doadores (email);
CREATE INDEX idx_documento ON doadores (documento);

#Figma
![image](https://github.com/user-attachments/assets/3c6b886f-ff84-4b15-beef-82463a35b844)

