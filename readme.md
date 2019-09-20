# WEBSYSTEM
(Projeto em andamento)

Websystem é um projeto para demonstração de um sistema com crud simples utilizando framework Laravel.

## Autor
Luiz Fernando Justino <http://linkedin.com.br/in/luizfernandojustino>

## Como utilizar?
Os passos abaixo contém as instruções para executar o projeto em seu computador.

1.Clone o projeto pelo link do github:

	git clone https://github.com/luiz-justino/websystem.git

2) Acesse a pasta principal do projeto 'websystem', criada após clonar o repositório.
Clique então com o botão direito do mouse e abra um terminal de sua preferência (Git Bash, Windows Power Shell, Prompt
de comando, Bash, etc.). Iremos agora digitar comandos para finalizar a configuração local do projeto.
Execute o comando abaixo para que sejam baixadas as dependências do projeto:

	composer install

3) Crie o banco de dados no MySQL com as seguintes configurações:
- Nome do banco: websystem
O usuário e senha padrão em que o projeto foi criado está definido com as credenciais:
- Usuario de acesso: root
- Senha de acesso: root

Caso já tenha o SGBD MySQL instalado no seu computador com credencais de acesso diferentes, tudo bem, apenas modifique o
arquivo .env na pasta raiz do projeto, onde estão as configurações de acesso ao banco:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=websystem
DB_USERNAME=root
DB_PASSWORD=root

Acesse o MySQL e crie o banco de dados executando o seguinte comando:

	create database websystem;

O projeto utiliza o PHP Artisan e o Eloquent, assim após a criação do banco é necessário apenas a execução por dentro
da pasta do projeto com o comando abaixo para criar a tabela de 'clientes' que utiliza-se no projeto:

	php artisan migrate

4) Após isso as configurações finalizaram-se. Para executar o projeto acesse o caminho do seu projeto no navegador. Também é possível acessá-lo
por linha de comando executando no terminal aberto de dentro da pasta do projeto:
	php artisan serve
Após a execução ele mostrará o link de acesso: http://127.0.0.1:8000
o qual é só copiar e colar no navegador.

Aproveite o projeto!

## Funcionalidades
                    
### Estrutura de pastas
A estrutura de pastas se mantém a da estrutura padrão do framework Laravel versão 5.8, na qual o projeto foi criado.

A única alteração na estrutura de pastas do projeto Laravel foi a criação da pasta 'layout' dentro do diretório Views para ter um arquivo de nome 'app.blade.php' , que é uma página padrão, da qual todas as outras se estendem.

### Rotas
A tabela abaixo contém as rotas, requisições, métodos e a funcionalidades atreladas ao projeto:

                    
|Rota                  |Requisição| Método   | Função                                                                                     |
|----------------------|----------|----------|--------------------------------------------------------------------------------------------|
|/                     |GET       |index     | Carrega a página inical                                                                    |
|/clientes             |GET       |clientes  | Carrega a tela de listagem de clientes                                                     |
|/novoCliente          |GET       |create    | Carrega a tela de criação de clientes                                                      |
|/novoCliente          |POST      |store     | Método que executa a criação de clientes                                                   |
|/clientes/editar/{id} |GET       |edit      | Carrega a tela para edição de um determinado cliente, recebendo o id do mesmo via parâmetro|
|/clientes/editar/{id} |POST      |update    | Método que executa a atualização de dados de um determinado cliente tendo id como parâmetro|
|/clientes/excluir/{id}|GET       |destroy   | Método que executa a exclusão de um determinado cliente tendo o id como parâmetro          |
|/clientes/relatorios  |GET       |relatorios| Carrega a tela de relatórios do sistema                                                    |
