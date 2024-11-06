# Sistema de Gestão Financeira para Freelancers e Pequenas Empresas

## Descrição
Este sistema foi desenvolvido para ajudar freelancers, microempreendedores e pequenas empresas a gerenciar suas finanças de forma simples e eficiente. Ele permite o controle de despesas, criação de orçamentos, geração de relatórios financeiros e muito mais, oferecendo uma visão clara das finanças e facilitando a tomada de decisões.

---

## Funcionalidades

### 1. Cadastro de Despesas
Registre receitas e despesas, categorizando cada transação para facilitar a organização financeira.

### 2. Relatórios e Gráficos Financeiros
Geração de relatórios visuais e gráficos dinâmicos para análise de tendências financeiras.

### 3. Orçamentos e Alertas de Gastos
Criação de orçamentos com alertas automáticos quando os limites de gastos são atingidos.


### 4. Gestão de Usuários
Diferentes níveis de acesso, com permissões para administradores e usuários comuns, permitindo a colaboração em equipe.

---

## Público-Alvo

### 1. Freelancers e Microempreendedores
Para monitoramento simples das finanças e organização de despesas.

### 2. Pequenas Empresas
Para uma ferramenta básica de controle financeiro, colaborando com funcionários ou sócios.

### 3. Indivíduos
Para organizar as finanças pessoais, controle de despesas.

---

## Tecnologias

### 1. **Backend**
- **PHP:** Utilizado para processar e gerenciar a lógica do sistema e interagir com o banco de dados MySQL.

### 2. **Frontend**
- **Bootstrap:** Framework CSS para criar um design responsivo e uma interface intuitiva.
- **Vue.js:** Para tornar a interface mais dinâmica e permitir atualizações em tempo real.

### 3. **Banco de Dados**
- **MySQL:** Para armazenamento seguro dos dados financeiros, como receitas, despesas, orçamentos e transações.

### 4. **Outras Dependências**
- **PHP Mailer:** Para envio de alertas e notificações de orçamento.
- **Font Awesome:** Para ícones e elementos visuais na interface.
- **Chart.js:** Para visualização de dados financeiros por meio de gráficos interativos.

---

## Como Rodar o Projeto

### Requisitos
- **PHP 7.4** ou superior
- **Servidor Web** (Apache ou Nginx)
- **Banco de Dados MySQL**
- **Composer:** Para gerenciar dependências PHP
- **Node.js e npm:** Para instalação de pacotes no frontend

### Passos para Rodar

1. **Instalar Dependências Backend (PHP)**
   - Execute o comando para instalar as dependências PHP usando o Composer:
     ```bash
     composer install
     ```

2. **Configuração do Banco de Dados**
   - Crie um banco de dados MySQL e configure as credenciais no arquivo de configuração do sistema.

3. **Instalar Dependências Frontend (Node.js)**
   - Navegue até o diretório do frontend e execute:
     ```bash
     npm install
     ```

4. **Iniciar o Servidor**
   - Para o servidor backend, use Apache ou Nginx, configurando corretamente o ambiente para o PHP.
   - Para iniciar o servidor frontend, execute:
     ```bash
     npm run serve
     ```

5. **Acessar o Sistema**
   - Após configurar o ambiente, acesse o sistema através do navegador em `http://localhost` ou a URL configurada.


