# Documento de Definição do Projeto: Sistema de Doação de Sangue

## 1. Definição do Problema

O Brasil enfrenta uma constante necessidade de doações de sangue para atender hospitais e unidades de saúde, especialmente durante períodos de alta demanda como feriados ou crises sanitárias. A dificuldade em encontrar pontos de coleta, a falta de incentivo à doação regular e a desorganização no processo de agendamento e controle de doações são os principais obstáculos para aumentar as doações.

### Objetivo do Sistema

Este sistema tem como objetivo facilitar a doação de sangue conectando doadores a pontos de coleta e oferecendo recompensas para incentivar a doação regular, além de permitir o acompanhamento de doações realizadas e históricos de pontos acumulados.

---

## 2. Descrição da Solução

A solução proposta é a criação de um **Sistema de Doação de Sangue Online**. Este sistema contará com as seguintes funcionalidades principais:

### Funcionalidades

1. **Cadastro de Doadores**: 
   - O doador pode se registrar fornecendo informações básicas como nome, e-mail, tipo sanguíneo, entre outros dados de identificação.

2. **Agendamento de Doações**: 
   - O sistema permite que o doador agende doações em pontos de coleta, com a opção de visualizar locais disponíveis e escolher a melhor data.

3. **Histórico de Doações**: 
   - O doador poderá visualizar todas as doações realizadas, com informações sobre status, tipo sanguíneo e pontos acumulados.

4. **Recompensas**: 
   - A cada doação, o doador acumula pontos que podem ser resgatados por recompensas como benefícios, descontos ou prêmios.

5. **Gestão Administrativa**: 
   - Administradores têm acesso para gerenciar doadores, doações e recompensas, além de poderem aprovar ou cancelar doações.

### Tecnologias Utilizadas

- **Frontend**: HTML, CSS, JavaScript, React.js (para interação dinâmica)
- **Backend**: PHP (framework Laravel para facilitar o desenvolvimento)
- **Banco de Dados**: PostgreSQL (para armazenamento eficiente de dados)
- **Frameworks e Bibliotecas**: Bootstrap (para design responsivo)

---

## 3. Requisitos Iniciais

### Requisitos Funcionais

1. **Cadastro de Doadores**:
   - Campos obrigatórios: nome, e-mail, tipo sanguíneo, data de nascimento, documento de identificação.
   - O sistema deve garantir que o e-mail e o documento de identificação sejam únicos.

2. **Agendamento de Doações**:
   - O sistema deve permitir agendar a doação, com data e local escolhidos.
   - O sistema verifica a elegibilidade do doador com base no tipo sanguíneo e no tempo desde a última doação.

3. **Histórico de Doações**:
   - O doador pode visualizar suas doações anteriores, incluindo o status (confirmada, pendente, cancelada), local e pontos acumulados.

4. **Sistema de Recompensas**:
   - O sistema deve permitir a visualização das recompensas disponíveis e permitir o resgate de prêmios com base nos pontos acumulados.

5. **Gestão Administrativa**:
   - Administradores poderão visualizar todos os registros de doadores e doações, emitir recompensas e gerenciar pontos de coleta.

### Requisitos Não Funcionais

1. **Segurança**:
   - O sistema deve garantir que as senhas dos usuários sejam armazenadas de forma segura (utilizando hash).
   - Garantir autenticação robusta e controles de acesso para administradores e doadores.

2. **Desempenho**:
   - O sistema deve ser capaz de suportar consultas rápidas em tabelas com grande volume de dados.

3. **Usabilidade**:
   - A interface do sistema deve ser simples, intuitiva e acessível para diferentes perfis de usuários (doadores e administradores).

4. **Escalabilidade**:
   - O sistema deve permitir a inclusão futura de novos pontos de coleta, mais tipos de recompensas e integração com novos sistemas.

---

## 4. Wireframe da Interface Principal

A interface do sistema será dividida nas seguintes seções:

1. **Cabeçalho**:
   - Logo do sistema.
   - Menu de navegação: Home, Agendar Doação, Histórico, Recompensas, Perfil, Logout.

2. **Corpo da Página**:
   - **Área de Agendamento**: Espaço onde o doador escolhe data e ponto de coleta.
   - **Localização dos Pontos de Coleta**: Um mapa interativo ou lista de locais.
   - **Histórico de Doações**: Tabela com detalhes das doações passadas e pontos acumulados.

3. **Rodapé**:
   - Links institucionais: Sobre, Contato, Política de Privacidade.

![Wireframe](https://github.com/user-attachments/assets/3c6b886f-ff84-4b15-beef-82463a35b844)

---

## 5. Estrutura do Banco de Dados

### Tabelas Principais

#### 1. Tabela `doadores`

```sql
CREATE TABLE doadores (
  id SERIAL PRIMARY KEY,                             -- Identificador único para cada doador
  nome VARCHAR(100) NOT NULL,                        -- Nome completo do doador
  email VARCHAR(100) UNIQUE NOT NULL,                -- E-mail único do doador
  senha VARCHAR(255) NOT NULL,                       -- Senha criptografada do doador
  data_nascimento DATE NOT NULL,                     -- Data de nascimento do doador
  tipo_sanguineo VARCHAR(5) NOT NULL,                -- Tipo sanguíneo do doador
  documento VARCHAR(20) UNIQUE NOT NULL,             -- Documento de identificação
  data_cadastro TIMESTAMP DEFAULT CURRENT_TIMESTAMP, -- Data de cadastro no sistema
  CONSTRAINT chk_data_nascimento CHECK (data_nascimento < CURRENT_DATE) -- Validação de data de nascimento
);

-- Índices para otimizar consultas por e-mail e documento
CREATE INDEX idx_email ON doadores (email);
CREATE INDEX idx_documento ON doadores (documento);
