# aula-laravel

Este projeto é um exemplo de aplicação CRUD desenvolvido para fins didáticos, utilizado em uma aula prática para os alunos do 2º ano do curso de Sistemas de Informação da Universidade do Estado de Minas Gerais (UEMG) em 14/08/2024. O objetivo foi demonstrar as operações básicas de criação, leitura, atualização e exclusão de registros em um sistema web utilizando o framework Laravel.

## Como rodar o projeto

**Clone o repositório:** Baixe o projeto para sua máquina local usando o comando: 

    git clone https://github.com/higor12cs/aula-laravel.git

**Instale as dependências:** Navegue até a pasta do projeto e execute o comando:

    composer install

**Configuração do ambiente:** Copie o arquivo `.env.example` para `.env` e ajuste as configurações de banco de dados e outras variáveis de ambiente conforme necessário. Em seguida, gere a chave da aplicação com:

    php artisan key:generate

**Migrações:** Rode as migrações para criar as tabelas no banco de dados:

    php artisan migrate

**Inicie o servidor:** Execute o comando para iniciar o servidor de desenvolvimento:

    php artisan serve

Agora, o projeto estará acessível em `http://localhost:8000`.

