<script lang="ts">
  import { Chart as ChartJS, ArcElement, Tooltip, Legend } from 'chart.js'
  import { Doughnut } from 'vue-chartjs'
  import * as easy from './js/easy.js'
  import * as medium from './js/medium.js'
  import * as hard from './js/hard.js'

  ChartJS.register(ArcElement, Tooltip, Legend)

  export default {
    name: 'App',
    components: {
      Doughnut
    },
    data() {
      return easy;
      return medium;
      return hard;
    },
  }
</script>

<template>
  <div class="containerApp mb-3">
    <p class="titleContainerAppWelcome">Perguntas - estatísticas</p>
    <div class="numberQuestions">
      <div>
        <h5>Total de Perguntas</h5>
        <p>15</p>
      </div>
      <div>
        <h5>Fácil</h5>
        <p>15</p>
      </div>
      <div>
        <h5>Médio</h5>
        <p>15</p>
      </div>
      <div>
        <h5>Difícil</h5>
        <p>15</p>
      </div>
    </div>
  </div>
  <div class="containerAppTree mb-5">
    <div class="gridGrafic mr-3">
      <router-link to="/questionEasy">
        <ion-icon name="arrow-redo"></ion-icon>
      </router-link>
      <h1>Fácil</h1>
      <div>
        <Doughnut
          :data="data"
          :options="options"
        />
      </div>
    </div>
    <div class="gridGrafic ml-1 mr-1">
      <router-link to="/questionMedium">
        <ion-icon name="arrow-redo"></ion-icon>
      </router-link>
      <h1>Médio</h1>
      <div>
        <Doughnut
          :data="data"
          :options="options"
        />
      </div>
    </div>
    <div class="gridGrafic ml-3">
      <router-link to="/questionHard">
        <ion-icon name="arrow-redo"></ion-icon>
      </router-link>
      <h1>Difícil</h1>
      <div>
        <Doughnut
          :data="data"
          :options="options"
        />
      </div>
    </div>
  </div>
</template>

<style scoped>
  .numberQuestions {
    width: 85%;
    margin: 0 auto;
    text-align: center;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr;
    align-items: center;
    grid-gap: 0px 20px;
  }
  .numberQuestions div h5{
    background-color: white;
    border-radius: 7px 7px 0px 0px;
    text-align: center;
    color: rgb(40,40,40);
    font-size: 20px;
    padding: 13px 5px;
    font-weight: bolder;
  }
  .numberQuestions div p {
    font-weight: bolder;
    text-align: center;
    margin: 0 auto;
    font-size: 22px;
    background-color: rgb(94, 231, 30);
    width: 50px;
    border-radius: 30%;
  }
  .titleContainerAppWelcome {
    color: rgb(94, 231, 30);
    font-size: 27px;
    text-align: center;
    padding: 30px 0px;
    clear: both;
  }
  .containerAppTree {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    margin: 0 auto;
    min-height: 300px;
    width: 1200px;
  }
  .gridGrafic {
    border: 1px solid rgb(94, 231, 30);
    border-radius: 7px;
  }
  .gridGrafic div {
    padding-bottom: 50px;
  }
  .gridGrafic ion-icon {
    float: right;
    font-size: 50px;
    color: white;
    padding-right: 5px;
    padding-top: 5px;
    transition: 0.4s ease-in-out;
  }
  .gridGrafic ion-icon:hover {
    color: rgb(94, 231, 30);
  }
  .containerAppTree h1 {
    color: rgb(94, 231, 30);
    font-size: 27px;
    text-align: center;
    padding: 0px 0px 20px 0px;
    clear: both;
  }
</style>

