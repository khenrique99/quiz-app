<script>
import { reactive, ref } from 'vue';
import axios from 'axios';

  export default {
    setup() {
      const post = reactive({
        name: '',
        email: '',
        date_birth: '',
        password: '',
      });

      function submit() {
        let name = post.name;
        let email = post.email;
        let date_birth = post.date_birth;
        let password = post.password;

        axios
          .post('http://127.0.0.1:8000/api/user', {
            name: name,
            email: email,
            date_birth: date_birth,
            password: password,
          })
          .then(() => {
            console.log('CERTO');
        })
        .catch((error) => {
          console.log('ERRADO');
        });
      }

      return {
        post,
        submit,
      };
    },
  };
</script>

<template>
  <div class="container">
    <h1>Cadastre-se agora mesmo!</h1>
    <form @submit.prevent="submit">
      <div class="grid-form">
        <ion-icon name="person"></ion-icon>
          <input
            type="text"
            name="name"
            id="name"
            v-model="post.name"
            placeholder="Insira seu nome"
            required
          />
        <ion-icon name="mail"></ion-icon>
          <input
            type="email"
            name="email"
            id="email"
            v-model="post.email"
            placeholder="Insira seu email"
            required
          />
        <ion-icon name="calendar"></ion-icon>
          <input
            type="date"
            name="date_birth"
            id="date_birth"
            v-model="post.date_birth"
            required
          />
        <ion-icon name="lock-closed"></ion-icon>
          <input
            type="password"
            name="password"
            id="password"
            v-model="post.password"
            placeholder="*********"
            required
          />
      </div>
      <div class="btn-form">
        <input type="reset" value="Limpar dados">
        <input type="submit" value="Cadastrar-se">
      </div>
    </form>
  </div>
</template>

<style>
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
