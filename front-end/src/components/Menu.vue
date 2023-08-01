<script>

</script>

<template>
  <div class="menu">
    <router-link to="/" class="gridMenu">
      <ion-icon name="home"></ion-icon>
      <p>Início</p>
    </router-link>
    <router-link to="/login" class="gridMenu">
      <ion-icon name="person"></ion-icon>
      <p>Entrar</p>
    </router-link>
    <router-link to="/register" class="gridMenu">
      <ion-icon name="create"></ion-icon>
      <p>Cadastrar-se</p>
    </router-link>
    <router-link to="/preferences" class="gridMenu">
      <ion-icon name="options"></ion-icon>
      <p>Preferências</p>
    </router-link>
    <router-link to="/administrator" class="gridMenu">
      <ion-icon name="server"></ion-icon>
      <p>Administrador</p>
    </router-link>
    <router-link to="/logout" class="gridMenu">
      <ion-icon name="close-circle"></ion-icon>
      <p>Sair</p>
    </router-link>
  </div>
</template>

<style>
  .menu {
    width: 100%;
    background-color: rgb(0, 0, 0);
    display: flex;
    justify-content: center;
    margin-bottom: 30px;
    box-shadow: 0px 0px 50px black;
  }
  .gridMenu {
    text-decoration: none!important;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-left: 15px;
    margin-right: 15px;
    margin-top: 15px;
  }
  .gridMenu ion-icon {
    color: white;
    font-size: 25px;
    transition: 0.4s ease-in-out;
  }
  .gridMenu:hover ion-icon {
    color: rgb(61, 209, 61);
  }
  .gridMenu p {
    color: rgb(61, 209, 61);
    text-decoration: none;
  }
</style>
