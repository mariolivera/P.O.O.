# CRUD DE ESCOLAS

Aplic
``ação Web do Tipo monolitica criada com.
-PHP para o back end, 7.4 em diante
-Html css e javascript para o front end.
-Mysql/mariaDB para o banco de dados

## Funcionalidades.

- CRUD de Alunos.
- CRUD de Professores.
- CRUD de cursos.
- CRUD de Categoria.
- CRUD de Usuários.

## Passo a Passo Para Execultar o Projeto.

Certifique-se que seu o computador tenha instalado.
-PHP.
-Mysql ou MariaDB.
-Editor de texto (por exemplo VS code)
-Navegador web
-Composer (Gerenciador de pacotes do PHP)

#### Clone o Projeto.

Baixe ou faça o clone do repositorio:
`git clone ....`

Apo isso entre no diretorio que foi gerado
`cd crud-php-oo`

#### Habilitar as extençoes do PHP.

Abra o diretorio de instalação do PHP, encontre o arquivo 
*php.ini-production*, renomeie-o para *php.ini* e abra-o com algum
de editor de texto.
Encontre as seguintes linhas e descomente-as, removendo ; que precede a linha.

- PDO_Mysql. linha 926
- Curl. linha 928
- mb_string. linha 934
- openssl. linha 936

#### Instalar as dependencias.

Dentro do diretório da aplicação execute:
`composer install`
Certifique-se que um diretório chamado **/Vendor** foi criado.

### Banco de Dados.

> O banco de dados é do tipo relacional e contém ate com 2 niveis de normatização.

#### Criando o banco de dados
Entre no seu cliente de banco de dados, e execulte o comando:

```sql
CREATE DATABASE db_escola;
```
#### Migra a estrutura do banco de dados
ainda dentro do cliente de banco de dados copie e cole o conteudo do arquivo **db.sql** e execute.

Certifique-se que as tabelas foram criadas, execultando o comando:
```sql
SHOW TABLES;
```
se o resultado for a lista de tabelas existentes, então pronto!

#### Configure as crendeciais de acesso
Encontre o arquivo **/config/database.php** e edite-o conforme as credenciais do seu usuário do banco de dados.

### Crie o primeiro usuário de acesso
Dentro do diretorio de aplicação, execulte no terminal o comando:
`php config/create-admin.php`;

Isso criará um usuário com as credenciais: 
|Nome|Email|Senha|
| -  | -   |  -  |
|Adminstrador|adimin@admin.com|123456|

#### Execultando a aplicação
Para execultar e testar a aplicação, dentro do terminal execulte:
`php -S localhost:8000 - t public`

Agora acesse o endereço http://localhost:8000 em seu navegador.