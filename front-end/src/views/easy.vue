<script>
  export default {
    name: 'App',
    data: function () {
      return {
        screen: '1',
        response: '1',
        questionListEasy: {},
        questions: {},
      }
    },
    methods: {
      screenShow: function(i) {
        this.screen = i;
      }
    },
    mounted() {
      fetch('http://127.0.0.1:8000/api/questionListEasy')
        .then(response => response.json())
          .then((res) => {
            this.questionListEasy = res.data;
          });
      fetch('http://127.0.0.1:8000/api/questionListEasy/1')
        .then(response => response.json())
          .then((res) => {
            this.questions = res.data;
          })
    }
  }
</script>

<template>
  <div class="questions" v-if="this.screen == '1'">
    <h1 class="questionsTitle">
      Nivel:
        <span>FÁCIL</span>
    </h1>
    <div class="listQuestions" v-for="easy in questionListEasy" :key="easy.id">
      <p>
        <span>{{ easy.title }}</span>
      </p>
      <p class="iconQuestion">
        <ion-icon name="arrow-redo" @click="screenShow('2')"></ion-icon>
      </p>
    </div>
  </div>
  <div v-if="this.screen == '2'">
    <div class="btnBack" @click="screenShow('1')">
      <ion-icon name="arrow-undo"></ion-icon>
      <p>Retornar à tela anterior</p>
    </div>
    <div class="questionScreen" v-for="question in questions" :key="question.id">
      <h2>#{{ question.id }}</h2>
      <h1>COCA-COLA vs PEPSI</h1>
      <img src="../assets/questions/images/logoCOCA-COLA.png">
      <img src="../assets/questions/images/logoPEPSI.png">
      <p>Coca-Cola e Pepsi são duas das marcas de refrigerante mais conhecidas e consumidas em todo o mundo. Ambas têm uma longa história de rivalidade no mercado de bebidas carbonatadas, competindo por preferência dos consumidores.</p>
      <h1 class="mt-5" v-if="this.response == '1'">Dentre essas duas marcas de refrigerantes, qual você escolhe?</h1>
      <h1 class="mt-5" v-if="this.response == '2'">COCA-COLA foi a sua escolha!</h1>
      <div v-if="this.response == '2'">
        <p class="text-center" style="text-indent: 0px;">Você concorda com 57% dos usuários</p>
      </div>
      <div class="btnFormQuestion" v-if="this.response == '1'">
        <form>
          <button>COCA-COLA</button>
        </form>
        <form>
          <button>PEPSI</button>
        </form>
      </div>
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
    margin-bottom: 15px;
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
  .btnBack {
    display: flex;
    cursor: pointer;
    width: 300px;
    margin-bottom: 30px;
  }
  .btnBack ion-icon {
    margin-left: 30px;
    font-size: 35px;
    color: rgb(94, 231, 30);
  }
  .btnBack p {
    font-size: 22px;
    text-indent: 10px;
    padding-top: 3px;
    color: rgb(94, 231, 30);
  }
  .questionScreen {
    width: 1310px;
    margin: 0 auto;
    text-align: center;
  }
  .questionScreen h2 {
    text-align: left;
    color: white;
    font-weight: bolder;
    font-size: 22px;
  }
  .questionScreen h1 {
    font-size: 25px;
    color: rgb(94, 231, 30);
    text-align: center;
    font-weight: bolder;
    margin-bottom: 30px;
  }
  .questionScreen img {
    width: 300px;
    border-radius: 7px;
    margin-left: 50px;
    margin-right: 50px;
    margin-bottom: 30px;
  }
  .questionScreen p {
    font-size: 22px;
    color: white;
    text-align: justify;
    text-indent: 20px;
  }
  .btnFormQuestion {
    display: inline-flex;
  }
  .btnFormQuestion button {
    width: 400px;
    border: 0px;
    background-color: rgb(40,40,40);
    color: white;
    padding: 20px 0px;
    font-size: 22px;
    margin-left: 20px;
    margin-right: 20px;
    cursor: pointer;
    font-weight: bolder;
    transition: 0.4s ease-in-out;
    border-radius: 7px;
    margin-top: 20px;
    margin-bottom: 30px;
  }
  .btnFormQuestion button:hover {
    box-shadow: 0px 0px 70px rgb(7, 45, 172);
  }
  @media (max-width: 1310px){
    .questionScreen {
      width: 95%;
    }
  }
</style>
