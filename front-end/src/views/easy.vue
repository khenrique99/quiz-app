<script>
  export default {
    name: 'App',
    data: function () {
      return {
        questionListEasy: {},
      }
    },
    mounted() {
      fetch('http://127.0.0.1:8000/api/questionListEasy')
      .then(response => response.json())
        .then((res) => {
          this.questionListEasy = res.data;
        })
    }
  }
</script>

<template>
  <div class="questions">
    <h1 class="questionsTitle">
      Nivel:
        <span>FÁCIL</span>
    </h1>
    <div class="listQuestions" v-for="easy in questionListEasy" :key="easy.id">
      <p>
        <span>{{ easy.title }}</span>
      </p>
      <p class="iconQuestion">
        <router-link :to="`/questionEasy/${easy.id}`" class="gridMenu">
          <ion-icon name="arrow-redo"></ion-icon>
        </router-link>
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
    margin-top: -15px;
    margin-right: -20px;
  }
  .iconQuestion ion-icon:hover {
    color: white;
  }
  .questionScreen {
    width: 1310px;
    margin: 0 auto;
    text-align: center;
  }
  .questionScreen h2 {
    text-align: center;
    color: white;
    font-weight: bolder;
    font-size: 20px;
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
