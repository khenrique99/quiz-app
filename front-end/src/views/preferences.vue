<script>
  import { NSwitch } from 'naive-ui';

  export default {
    components: {
      NSwitch
    },
    data() {
      return {
        notification: false
      }
    },
  }
</script>

<template>
  <div class="containerApp">
    <h1>Preferências do Usuário</h1>
    <div class="gridPreferences">
      <div class="preferencesList">
        <p class="titleSwitch">Respostas anônimas</p>
        <n-space>
          <n-switch v-model="notification" :round="false" class="switchSquare"/>
        </n-space>
      </div>
      <div class="preferencesList">
        <p class="titleSwitch">Apresentação do sistema na página principal</p>
        <n-space>
          <n-switch v-model="notification" :round="false" class="switchSquare"/>
        </n-space>
      </div>
    </div>
  </div>
  <div class="containerApp mt-5">
    <h1>Configurações Personalizadas</h1>
    <div class="preferencesConfig">
        <p class="titleSwitch">Escolha o tema do sistema</p>
        <div class="btnDisplay">
          <button class="btnDefault">Padrão</button>
          <button class="btnLight">Light</button>
          <button class="btnDark">Dark</button>
        </div>
      </div>
  </div>
</template>

<style>
  .gridPreferences {
    width: 75%;
    margin: 0 auto;
  }
  .preferencesConfig {
    width: 75%;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
  }
  .preferencesList {
    display: grid;
    grid-template-columns: 90% 10%;
    margin-bottom: 2px;
    padding-top: 10px;
    transition: 0.4s ease-in-out;
  }
  .preferencesList:hover {
    background-color: rgba(108, 235, 146, 0.1);
    border-radius: 15px;
    cursor: default;
  }
  .titleSwitch {
    color: white;
    text-indent: 20px;
  }
  .switchSquare {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    margin-top: 10px;
  }
  .btnDisplay {
    border-radius: 15px;
    text-align: right;
  }
  .btnDisplay button{
    border: 0px;
    font-size: 18px;
    width: 100px;
    padding: 3px 0px;
    border-radius: 7px;
    margin-left: 10px;
    margin-right: 10px;
    font-weight: bolder;
    cursor: pointer;
    box-shadow: 0px 0px 10px rgb(40,40,40);
  }
  .btnDisplay button:hover {
    color: rgb(94, 231, 30);
    text-shadow: 0px 0px 1px rgb(61, 61, 61),
                 0px 0px 2px rgb(61, 61, 61),
                 0px 0px 3px rgb(61, 61, 61);
  }
  .btnDefault {
    background: rgb(18,67,175);
    background: linear-gradient(90deg, rgba(18,67,175,1) 0%, rgb(43, 103, 233) 50%, rgba(18,67,175,1) 100%);
    color: white;
  }
  .btnDark {
    background: rgb(40,40,40);
    background: linear-gradient(90deg, rgba(40,40,40,1) 0%, rgb(66, 66, 66) 50%, rgba(40,40,40,1) 100%);
    color: white;
  }
  .btnLight {
    background: rgb(186,186,186);
    background: linear-gradient(90deg, rgba(186,186,186,1) 0%, rgba(233,233,233,1) 50%, rgba(186,186,186,1) 100%);
    color: rgb(41, 41, 41);
  }
</style>
