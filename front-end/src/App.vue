<script setup>
  import Menu from './components/Menu.vue';
</script>

<template>

  <main>
    <Menu />
    <router-view />
  </main>

</template>

<style>
  body {
    margin: 0 auto;
    padding: 0px;
  }
  .titleMain {
    color: rgb(94, 231, 30);
    font-size: 27px;
    text-align: center;
    padding: 30px 0px;
  }
  .containerApp {
    border: 1px solid rgb(94, 231, 30);
    width: 1200px;
    margin: 0 auto;
    min-height: 300px;
    border-radius: 7px;
  }
  .containerApp h1 {
    color: rgb(94, 231, 30);
    font-size: 27px;
    text-align: center;
    padding: 30px 0px;
    clear: both;
  }
  .containerApp h2 {
    font-size: 24px;
    text-align: center;
    color: white;
  }
  .containerApp p {
    font-size: 22px;
    text-align: justify;
  }
  @media (max-width: 1190px) {
    .containerApp {
      width: 98%;
    }
  }
</style>
