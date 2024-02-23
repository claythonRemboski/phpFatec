# Orientações para utilizar o projeto:

Created: February 23, 2024 0:13 AM

## 1. Pré-Requisitos

Este projeto foi desenvolvido para utilização em ambientes Linux, portanto caso esteja utilizando Windows, pode ser necessário adaptar algo. Mas em linhas gerais é preciso ter instalado antes de iniciar o uso:
- Docker: [Link para instalação Linux](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-on-ubuntu-20-04-pt)

- Docker Compose: [Link para instalação Linux](https://www.digitalocean.com/community/tutorials/how-to-install-and-use-docker-compose-on-ubuntu-20-04-pt)

- Git: [Link para instalação Linux](https://www.atlassian.com/br/git/tutorials/install-git)

## 2. Passo a passo:

1. Crie uma pasta em qualquer local de sua preferência. Essa pasta será onde estará hospedado nosso projeto.
2. Através do terminal, acesse essa pasta e rode o comando `git clone git@github.com:claythonRemboski/phpFatec.git`, para baixar o projeto localmente. Após baixado, acesse também pelo terminal a pasta phpFatec.
3. No arquivo docker-compose.yml, renomeie como preferir os valores de usuário do banco de dados, senha e database. Se alterar o nome do database, altere também no arquivo da pasta scripts, para evitar que seja criado um novo database.
4. OBS: Em projetos reais, as práticas são diferentes, o arquivo .env normalmente fica com os dados armazenados, e referenciamos à ele. Além de o que sobe para o git é um .env.example.
5. Verifique também no arquivo docker-compose.yml os valores para PGADMIN_DEFAULT_EMAIL e PGADMIN_DEFAULT_PASSWORD. Escolha um novo e-mail e senha que desejar.
6. Estando na pasta do nosso projeto, execute o comando`docker network create aulaPhpFatec` para criar a rede que interligará todos os sistemas.
7. Rode o comando `docker-compose up -d`para subir os containeres, ou `docker compose up -d` caso esteja com a versão mais atualizada do docker compose.
7. Agora basta acessar no navegador:
    - `localhost/teste.php` para visualizar o arquivo que está na pasta src. Basta criar novos arquivos e subpastas dentro de src caso deseje.
    - `localhost:5050` para acessar o gerenciador de banco de dados pgadmin. O login e senha foram os definidos no arquivo docker-compose.yml para o PGADMIN.

8. Caso queira se conectar ao database através do pgadmin, clique em Add New Server e observe as informações, ao ir nas abas:
    - General: preencha name com o que preferir, que facilite identificar
    - Connection:
        - Host name/address: postgres ( é o mesmo do service no arquivo dokcer-compose.yml)
        - Maintenance database: o valor do POSTGRES_DB que estiver no arquivo docker-compose.yml
        - Username: o valor do POSTGRES_USER que estiver no arquivo docker-compose.yml
        - Password: o valor do POSTGRES_PASSWORD que estiver no arquivo docker-compose.yml 

9. O sistema está pronto para uso. Basta criar os arquivos php que desejar na pasta src. Ou mais subpastas e arquivos nestas subpastas.