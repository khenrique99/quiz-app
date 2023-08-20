<script>
export default {
  name: 'App',
  data() {
    return {
      questions: [],
      response: '1',
    }
  },
  mounted() {
    this.success = false;
    fetch("http://127.0.0.1:8000/api/questionListEasy/1")
      .then(response => response.json())
      .then((res) => {
        this.questions = res.data;
      })
      .catch(error => {
        console.error("Error fetching data:", error);
      });
  }
}
</script>

<template>
  <div>
    <div class="btnBack">
      <router-link to="/questionEasy" class="gridMenu">
        <ion-icon name="arrow-undo"></ion-icon>
        <p>Retornar à tela anterior</p>
      </router-link>
    </div>
    <div class="questionScreen" v-for="question in questions" :key="question.id" v-if="questions[0] != null">
      <h2># {{ question.id }}</h2>
      <h1>{{ question.title }}</h1>
      <img :src="`../src/assets/questions/images/${question.imageOne}`" alt="dsa">
      <img :src="`../src/assets/questions/images/${question.imageTwo}`">
      <p>{{ question.describe }}</p>
      <h1 class="mt-5" v-if="this.response == '1'">{{ question.question }}</h1>
      <h1 class="mt-5" v-if="this.response == '2'">X foi a sua escolha!</h1>
      <div v-if="this.response == '2'">
        <p class="text-center" style="text-indent: 0px;">Você concorda com X% dos usuários</p>
      </div>
      <div class="btnFormQuestion" v-if="this.response == '1'">
        <form>
          <button>{{ question.optionOne }}</button>
        </form>
        <form>
          <button>{{ question.optionTwo }}</button>
        </form>
      </div>
    </div>
    <div v-else>
      <div class="empty">
        <h1>Ooops!
          <br>Você chegou ao final das perguntas do nível FÁCIL
        </h1>
        <div class="btnEmpty">
          <router-link to="/questionEasy" class="gridMenu">
            <button>Voltar para a listagem de perguntas</button>
          </router-link>
          <router-link to="/" class="gridMenu">
            <button>Voltar para o início</button>
          </router-link>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
  .btnBack {
    cursor: pointer;
    width: 300px;
    margin: 0 auto;
    margin-bottom: 30px;
  }
  .btnBack ion-icon {
    font-size: 35px;
    color: rgb(94, 231, 30);
  }
  .btnBack p {
    font-size: 22px;
    text-indent: 10px;
    padding-top: 3px;
    color: rgb(94, 231, 30);
  }
  .empty {
    margin: 0 auto;
    text-align: center;
    margin-top: 100px;
  }
  .empty h1 {
    font-size: 25px;
    color: rgb(94, 231, 30);
    text-align: center;
    font-weight: bolder;
    margin-bottom: 30px;
  }
  .empty h1 span {
    color: red;
  }
  .btnEmpty {
    display: flex;
    justify-content: center;
  }
  .btnEmpty button {
    background-color: transparent;
    color: white;
    cursor: pointer;
    border: 1px solid silver;
    width: 500px;
    padding: 10px 0px;
    font-size: 22px;
    transition: 0.4s ease-in-out;
  }
  .btnEmpty button:hover {
    background-color: rgb(40,40,40);
    border-radius: 7px;
    border-color: rgb(40,40,40);
    color: rgb(94, 231, 30);
  }
</style>
