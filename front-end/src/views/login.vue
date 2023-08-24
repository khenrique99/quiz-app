<script>
  import Cookie from 'js-cookie';
  import { NSpin } from 'naive-ui';

  export default {
    name: 'login',

    components: {
      NSpin
    },
    data() {
      return {
        email: '',
        password: '',
      };
    },

    methods: {
      async login() {
        $('.loadingLogin').css('display', 'block');
        $('.btnResetLogin').css('display', 'none');
        $('.btnSubmitLogin').css('display', 'none');

        const payload = {
          email: this.email,
          password: this.password
        };

        try {
          const response = await fetch('http://127.0.0.1:8000/api/auth/login', {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
            },
            body: JSON.stringify(payload)
          });

          const res = await response.json();
          await Cookie.set('_myAppToken', res.aceess_token); // Esperar pela operação assíncrona

          this.$router.push('/');
        } catch (error) {
          console.error('Erro durante o login:', error);
        }
      },
    },
  };
</script>

<template>
  <div class="container">
    <h1>Entrar - Quiz APP</h1>
    <form @submit.prevent="login">
      <div class="grid-form">
        <ion-icon name="mail"></ion-icon>
          <input
            type="email"
            name="email"
            id="email"
            v-model="email"
            placeholder="Insira seu email"
            required
          />
        <ion-icon name="lock-closed"></ion-icon>
          <input
            type="password"
            name="password"
            id="password"
            v-model="password"
            placeholder="*********"
            required
          />
      </div>
      <n-space class="loadingLogin">
        <n-spin size="large" />
      </n-space>
      <div class="btn-form">
        <input class="btnResetLogin" type="reset" value="Limpar dados">
        <input class="btnSubmitLogin" type="submit" value="Entrar">
      </div>
    </form>
  </div>
</template>

<style scoped>
  .container {
    border: 1px solid rgb(94, 231, 30);
    width: 600px;
    min-height: 300px;
    border-radius: 7px;
  }
  .container h1 {
    color: rgb(94, 231, 30);
    font-size: 27px;
    text-align: center;
    padding: 30px 0px;
  }
  .grid-form {
    width: 75%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 30px 1fr;
    grid-gap: 10px 3px;
  }
  .grid-form ion-icon {
    color: rgb(94, 231, 30);
    font-size: 25px;
    padding-top: 3px;
  }
  .grid-form input {
    background-color: transparent;
    color: rgb(94, 231, 30);
    padding: 5px;
    border: none;
    border: 1px solid transparent;
  }
  .grid-form input:invalid {
    border-bottom: 1px solid red;
  }
  .btn-form {
    width: 100%;
    text-align: right;
    margin-top: 20px;
    margin-bottom: 20px;
  }
  .btnResetLogin,
  .btnSubmitLogin {
    background-color: transparent;
    border: none;
    color: rgb(94, 231, 30);
    margin-left: 5px;
    margin-right: 5px;
    transition: 0.7s ease-in-out;
    padding: 5px 15px;
    border: 1px solid rgb(94, 231, 30);
  }
  .btnResetLogin:hover,
  .btnSubmitLogin:hover {
    background-color: rgb(94, 231, 30);
    color: rgb(40,40,40);
    padding: 5px 15px;
  }
  .loadingLogin {
    position: absolute;
    margin-left: 455px;
    margin-top: 30px;
    display: none;
  }
  @media (max-width: 577px){
    .container {
      width: 95%;
    }
    .grid-form {
      width: 100%;
    }
  }
</style>
