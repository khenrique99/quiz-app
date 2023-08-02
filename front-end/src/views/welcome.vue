<script>
  import Toggle from '@vueform/toggle';

  export default {
    components: {
      Toggle,
    },
    data() {
      return {
        notification: false
      }
    },
  }
</script>

<template>

  <h1 class="titleMain">Seja Bem-vindo(a)</h1>
  <div class="containerApp mb-5" v-if="!notification">
    <div class="welcome">
      <Toggle
        v-model="notification"
      />
      <p>Desativar notificação</p>
    </div>
    <h1>Como funciona o Quiz?</h1>
    <p class="welcomeNotification">
      <img src="../assets/icons/iconInformation.png" style="float: left;">
      É bem simples e interativo, consiste em escolher uma opção dentre duas alternativas!
      <br>
      O objetivo é descobrir se as escolhas são manipuladas pela idade, mas fique tranquilo(a), se não quiser aparecer nas estatísticas basta ir em <a href="/preferencies">preferências</a> e marcar a opção de "respostas anônimas"!
      <br>
      O Sistema conta também com niveis de perguntas, sendo elas <span>Facil/Médio/Difícil</span>.
      <img src="../assets/icons/iconGrafic.png" style="float: right;">
      <h1 style="clear:both"></h1>
    </p>
  </div>

  <QuestionsHome />

</template>

<style src="@vueform/toggle/themes/default.css"></style>

<style scoped>
  .welcome {
    float: right;
    margin-right: 10px;
    margin-top: 5px;
  }
  .welcome div {
    float: right;
    margin-top: 5px;
  }
  .welcome p {
    font-size: 15px;
    color: white;
    clear: both;
    padding-top: 3px;
  }
  .welcomeNotification {
    width: 85%;
    margin: 0 auto;
    font-size: 22px;
    color: white;
    font-weight: normal;
  }
  .welcomeNotification span {
    font-weight: bolder;
    color: rgb(94, 231, 30);
  }
  .welcomeNotification img {
    width: 75px;
    height: 75px;
    margin-left: 20px;
    margin-right: 20px;
  }
</style>
