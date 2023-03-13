# Desafio Promobit - Modelo de cadastro de Candidato e Vagas


## Tópicos

* [O Projeto](#O-Projeto)
* [Desenvolvedor](#Desenvolvedor)
* [Estrutura do Software](#Estrutura-do-Software)
  * [Diagrama do Banco de Dados](#Diagrama-do-Banco-de-Dados)
  * [Script Relatório](#Script-Relatório)
* [Tecnologias](#Tecnologias)
  * [Instalar e utilizar](#Como-instalar-e-utilizar)
* [Endpoints](#Endpoints-e-Telas)
* [Agradecimentos](#Agradecimentos)

## O Projeto

Esse projeto tem como objetivo avaliar o conhecimento e habilidade em desenvolvimento Back-End e Front-End. Para isso foi desenvolvido uma aplicação de modelo WEB de cadastro de candidatos, vagas e gerar relação de candidatos com habilidades compatíveis aos requisitos mínimos de habilidades das respectivas vagas. Esse software foi desenvolvido conforme os requisitos descritos no documento do [Desafio STS Informática](https://github.com/Promobit/teste-cadastro-Candidatos).

## Desenvolvedor

Projeto desenvolvido individualmente para Resolução do [Desafio Promobit](https://github.com/Promobit/teste-cadastro-Candidatos).

<table>
  <tr>
      <td align="center"><a href="https://github.com/zecarlos558"><img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/zecarlos558" width="100px;" alt=""/><br /><sub><b>José Carlos</b></sub></a><br /><a href="https://github.com/hellomp" title="José Carlos"></a></td>
    </tr>
</table>

## Estrutura do Software

O sistema consiste nas funcionalidades de CRUD para Candidatos, Vagas e gerar de candidatos compatíveis aos requisitos das vagas. As funcionalidades são acessadas através de páginas WEB para a lisVagaem/cadastro/edição/deleção de Candidatos e Vagas, as páginas devem ter navegação entre elas, e uma página para exibir o relatório de candidatos e vagas compatíveis. Permite ser vinculado uma ou mais habilidades aos candidatos, e no mínimo de três habilidades para cada vaga, dentro das funcionalidades de cadastro ou edição. O projeto foi desenvolvido dentro do Padrão da Arquitetura MVC. O sistema possui autenticação do usuário para acessar as funcionalidades do CRUD e relatório.

### Diagrama do Banco de Dados

Apresentação do Diagrama de Entidade Relacionamento desenvolvido no projeto.

![Diagrama do Banco de Dados](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/Diagrama_do_Banco_de_Dados.png)

Para mais informações consulte o dicionário de dados: 

## Tecnologias

- PHP 8.1.2
- MySQL 8.0.27
- Laravel 10.3.0
- Bootstrap 5
- Git

### Como instalar e utilizar

  - Baixar ou clonar o projeto do Github. 

  - Instalar o PHP (Versão 8.0 ou superior).

  - Instalar o Composer para baixar as dependências do projeto.

  - Instalar uma base de dados MySQL([MySQL Workbench](https://dev.mysql.com/downloads/workbench/)) para armazenamento dos dados (Ou uma base de dados de sua preferência).

  - Configurar o arquivo .env, alterando as informações do banco de dados como o modelo a seguir

      - ```php
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=laravel
        DB_USERNAME=root
        DB_PASSWORD=
        ```

  - Abra o terminal na pasta do projeto e digite o comando instalar as dependências do projeto.

      - ```less
        php composer install
        ```

  - Ainda no terminal na pasta do projeto digite o comando para criar as tabelas no banco. E se desejar incrementar o comando seed para adicionar dados ao banco de dados.

      - ```less
        php artisan migrate --seed
        ```

  - Para testar digite o seguinte comando para iniciar o servidor.

      - ```less
        php artisan serve
        ```

  - Pronto, a aplicação está rodando!

  - Vá ao navegador e digite a url:

      - ```http
        http://127.0.0.1:8000/
        ```

## Endpoints e Telas

Aqui está listado os Endpoints da aplicação, para melhor orientação na utilização do sistema. A página inicial é a única que não precisa de autenticação do usuário, para acessar todas as outras páginas é necessário o Login para confirmar a autenticação do usuário. Possui um menu fixo no topo da página que permitirá navegação entre as páginas do sistema.

##### Index

Tela inicial da aplicação personalizada ao idealizador do projeto, informa funcionalidades e possui acesso ao login e cadastro de usuário.

```http
http://127.0.0.1:8080/
```

![HOME](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/index.png)

##### Página Inicial

Tela de apresentação, possui acesso as principais funcionalidades do sistema em seu corpo.

```http
http://127.0.0.1:8080/home
```

![HOME](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/pagina_inicial.png)

##### Login

Tela para realizar login do usuário

```http
http://127.0.0.1:8080/login
```

![Login](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/login.png)

##### Cadastrar Usuário

Tela para cadastrar usuário

```http
http://127.0.0.1:8080/register
```

![Register](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/register.png)

##### Candidatos - CREATE

Tela para cadastro de Candidatos

```http
http://127.0.0.1:8080/product/create
```

![Candidatos - CREATE](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/candidato_create.png)

##### Candidatos - READ

Lista o Candidatos cadastrados com as opções de cadastrar, editar e deletar Candidato

```http
http://127.0.0.1:8080/product/
```

![Candidatos - READ](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/candidato_read.png)

##### Candidatos - UPDATE

Tela para editar dados do Candidatos

```http
http://127.0.0.1:8080/product/edit/{id}
```

![Candidatos - UPDATE](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/candidato_edit.png)

##### Candidatos - DELETE

Caminho para deletar Candidato

```http
http://127.0.0.1:8080/candidato/{id}
```

##### Vaga - CREATE

Tela para cadastro de Vaga

```http
http://127.0.0.1:8080/Vaga/create
```

![Vaga - CREATE](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/vaga_create.png)

##### Vaga - READ

Lista as Vagas cadastradas com as opções de cadastrar, editar e deletar Vaga

```http
http://127.0.0.1:8080/Vaga/
```

![Vaga - READ](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/vaga_read.png)

##### Vaga - UPDATE

Tela para editar dados da Vaga

```http
http://127.0.0.1:8080/Vaga/edit/{id}
```

![Vaga - UPDATE](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/vaga_edit.png)

##### Vaga - DELETE

Caminho para deletar Vaga

```http
http://127.0.0.1:8080/vaga/{id}
```

##### Relatório Vagas Disponíveis

Tela para exibir vagas disponíveis e candidatos compatíveis com suas habilidades.

```http
http://127.0.0.1:8080/vagas/disponivel
```

![Relatório - Sistema](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/screenshots/vaga_disponivel.png)


## Agradecimentos

![Promobit](https://raw.githubusercontent.com/zecarlos558/modelo_candidato_vaga/main/doc/logo_sts.png)
