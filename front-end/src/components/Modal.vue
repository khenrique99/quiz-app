<script>
  setTimeout(function() {
    $('.modalGlobal').css('display', 'none');
  }, 4000);
</script>

<template>
  <div class="modalGlobal">
    <p></p>
  </div>
</template>

<style>
  .modalGlobal {
    position: fixed;
    justify-items: center;
    width: 99.5%;
    margin-top: 40px;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    background-color: rgb(185, 185, 185);
  }
  .modalGlobal p {
    color: rgb(40,40,40);
    font-size: 20px;
    text-align: center;
    padding: 0;
    padding-top: 15px;
  }
</style>
