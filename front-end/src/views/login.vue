<script>
  import Cookie from 'js-cookie';

  export default {
    name: 'login',

    data() {
      return {
        email: '',
        password: '',
      };
    },

    methods: {
      login() {
        const payload = {
          email: this.email,
          password: this.password
        };

        fetch('http://127.0.0.1:8000/api/auth/login', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(payload)
        })
        .then(response => response.json())
        .then(res => {
          Cookie.set('_myAppToken', res.aceess_token);
        })
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
      <div class="btn-form">
        <input type="reset" value="Limpar dados">
        <input type="submit" value="Entrar">
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
  .btn-form input {
    background-color: transparent;
    border: none;
    color: rgb(94, 231, 30);
    margin-left: 5px;
    margin-right: 5px;
    transition: 0.7s ease-in-out;
    padding: 5px 15px;
    border: 1px solid rgb(94, 231, 30);
  }
  .btn-form input:hover {
    background-color: rgb(94, 231, 30);
    color: rgb(40,40,40);
    padding: 5px 15px;
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
