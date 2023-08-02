<script>
  import Voltar from '../components/Voltar.vue';

  export default {
    name: 'App',
    data: function () {
      return {
        screen: '1',
      }
    }
  }
</script>

<template>
  <Voltar />
  <div class="questions" v-if="this.screen == '1'">
    <h1 class="questionsTitle">
      Nivel:
        <span>FÁCIL</span>
    </h1>
    <div class="listQuestions">
      <p>
        <span>COCA-COLA</span>
          vs
        <span>PEPSI</span>
      </p>
      <p class="iconQuestion">
        <ion-icon name="arrow-redo"></ion-icon>
      </p>
    </div>
  </div>
</template>

<style>
  .questions {
    width: 1310px;
    margin: 0 auto;
    text-align: center;
  }
  .questionsTitle {
    font-size: 27px;
    text-align: center;
    padding: 30px 0px;
    color: white;
  }
  .questionsTitle span {
    color: rgb(94, 231, 30);
    font-weight: bolder;
  }
  .listQuestions {
    border: 2px solid rgb(94, 231, 30);
    border-radius: 7px;
    border-left: 2px solid rgb(94, 231, 30);
    padding: 5px;
    transition: 0.4s ease-in-out;
    width: 1100px;
    margin: 0 auto;
  }
  .listQuestions:hover {
    border-left: 50px solid rgb(94, 231, 30);
    cursor: default;
  }
  .listQuestions p {
    text-align: left;
    font-size: 22px;
    color: white;
    margin-bottom: 0px;
    text-indent: 30px;
  }
  .iconQuestion {
    float: right;
    margin-top: -42px;
  }
  .iconQuestion ion-icon {
    font-size: 45px;
    color: rgb(94, 231, 30);
    transition: 0.4s ease-in-out;
    cursor: pointer;
  }
  .iconQuestion ion-icon:hover {
    color: white;
  }
</style>
