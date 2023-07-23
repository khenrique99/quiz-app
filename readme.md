<img src="https://img.freepik.com/vetores-gratis/ilustracao-de-bandeira-brasil_53876-27017.jpg?w=1480&t=st=1688663119~exp=1688663719~hmac=a637d955ea8d05afe04e35e0fd2cf959d0707992ec0ed8602f088e14d7eac2c2" style="width: 50px; margin-right:10px;"/> <b>Portugues</b>

## QUIZ-APP

Um site com várias perguntas separadas por níveis e assuntos.
<br>
O intuito do site é comparar respostas se há influencia conforme a idade.
<br>
Caso você nao queira se identificar, não tem problema! Basta marcar suas respostas como anônimas!
<br>
Não fazemos descriminação sobre Produtos ou Marcas mencionadas no sistema, tudo foi projetado para base de análises, sem a venda dessa informação ou algo relacionado a lucros.

### INSTALAÇÃO DO APP

#### Ferramentas necessárias

PHP (VERSION) - Laravel (VERSION)

<li>GIT</li>
<li>Docker ou XAMPP</li>
<li>NodeJS</li>

#### Caso queria instalar em sua maquina, basta seguir os passos abaixo.

<ol>
  <li>Baixar os arquivos do projeto:</li>

    ```
        git clone https://github.com/kelvinhenri99/quiz-app
    ```

  <li>Entre na pasta front-end, abra seu terminar e digite:</li>

    ```
        npm install
        npm build
        npm run dev
    ```

  <li>Apos executar o comando, irá aparecer um link com o caminho WEB (HTTP) para acessar o sistema. Exemplo:</li>

    ```
        http://localhost:5000
    ```

  <li>Entre na pasta back-end;
    <br>Duplique o arquivo ".env.example", renomeie como ".env";
    <br>Preencha as credenciais do seu banco de dados.
  </li>
    
  <br>
  
  <li>Em outro terminar, dentro da pasta back-end digite:</li>

    ```
        php artisan migrate:fresh --seed
        php artisan key:generate
        php artisan serve
    ```

<li>Após executar os comandos acima,  irá aparecer um link com o caminho WEB (HTTP) para acessar o sistema. Exemplo:</li>

    ```
        http://127.0.0.1:8000
    ```

</ol>

---

<img src="https://static.mundoeducacao.uol.com.br/mundoeducacao/2022/05/bandeira-estados-unidos.jpg" style="width: 50px; margin-right:10px;"/> <b>English</b>

## QUIZ-APP

A site with several questions separated by levels and subjects.
<br>
The purpose of the site is to compare answers if there is influence according to age.
<br>
If you don't want to identify yourself, no problem! Just mark your responses as anonymous!
<br>
We do not discriminate against Products or Brands mentioned in the system, everything was designed for analysis basis, without selling this information or anything related to profits.

### APP INSTALLATION

#### Necessary tools

PHP (VERSION) - Laravel (VERSION)

<li>GIT</li>
<li>Docker ou XAMPP</li>
<li>NodeJS</li>

#### If you want to install it on your machine, just follow the steps below.

<ol>
  <li>Download project files:</li>

    ```
        git clone https://github.com/kelvinhenri99/quiz-app
    ```

  <li>Download the files from Enter the front-end folder, open your terminal and type: project:</li>

    ```
        npm install
        npm build
        npm run dev
    ```

  <li>After executing the command, a link will appear with the WEB path (HTTP) to access the system. Example:</li>

    ```
        http://localhost:5000
    ```

  <li>
    Enter the backend mass;
    <br>Duplicate the file ".env.example", rename it as ".env";
    <br>Fill in your database credentials.
  </li>
    
  <br>
  
  <li>At another end, inside the backend folder type:</li>

    ```
        php artisan migrate:fresh --seed
        php artisan key:generate
        php artisan serve
    ```

  <li>After executing the commands above, a link with the WEB path (HTTP) to access the system will appear. Example:</li>
  
  ```
    http://127.0.0.1:8000
  ```

</ol>
