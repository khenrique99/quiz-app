<script>
  var vm = this;
  export default {
    name: 'App',
      data() {
        return {
          users: {},
        }
      },
      mounted() {
        fetch('http://127.0.0.1:8000/api/user')
          .then(response => response.json())
            .then((res) => {
              this.users = res.data;
            })
      }
  }
</script>

<template>
  <div class="containerDefault">
    <h1>Usuários</h1>
    <ul class="nav nav-tabs administratorNavs" id="myTab" role="tablist">
      <li class="administratorNavsUser">
        <a class="active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Administrador</a>
      </li>
      <li class="administratorNavsUser">
        <a class="" id="profile-tab" data-toggle="tab" href="#perfil" role="tab" aria-controls="profile" aria-selected="false">Gerencial</a>
      </li>
      <li class="administratorNavsUser">
        <a class="" id="contact-tab" data-toggle="tab" href="#contato" role="tab" aria-controls="contact" aria-selected="false">Usuário</a>
      </li>
    </ul>
    <div class="tab-content administratorContainer" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
        <table class="table table-striped table-dark">
          <thead>
            <tr>
              <th class="titleTable">ID</th>
              <th class="titleTable">Nome</th>
              <th class="titleTable">E-mail</th>
              <th class="titleTable">Idade</th>
              <th class="titleTable">Ações</th>
            </tr>
          </thead>
        </table>
      </div>
      <div class="tab-pane fade" id="perfil" role="tabpanel" aria-labelledby="profile-tab">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th class="titleTable">ID</th>
                <th class="titleTable">Nome</th>
                <th class="titleTable">E-mail</th>
                <th class="titleTable">Idade</th>
                <th class="titleTable">Ações</th>
              </tr>
            </thead>
            <tbody>
            </tbody>
          </table>
        </div>
      </div>
      <div class="tab-pane fade" id="contato" role="tabpanel" aria-labelledby="contact-tab">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
          <table class="table table-striped table-dark">
            <thead>
              <tr>
                <th class="titleTable">ID</th>
                <th class="titleTable">Nome</th>
                <th class="titleTable">E-mail</th>
                <th class="titleTable">Idade</th>
                <th class="titleTable">Ações</th>
              </tr>
            </thead>
            <tbody v-for="user in users" :key="user.id">
              <tr class="iconsTable">
                <td>{{ user.id }}</td>
                <td>{{ user.name }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.date_birth }}</td>
                <td class="icons">
                  <ion-icon name="create" title="Editar usuário"></ion-icon>
                  <ion-icon name="close-circle" title="Excluir usuário"></ion-icon>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<style>
  .containerDefault {
    width: 95%;
    margin: 0 auto;
    border: 1px solid rgb(94, 231, 30);
    border-radius: 7px;
  }
  .containerDefault h1 {
    color: rgb(94, 231, 30);
    font-size: 27px;
    text-align: center;
    padding: 30px 0px;
  }
</style>

<style scoped>
  .administratorNavs {
    width: 95%;
    margin: 0 auto;
    border-color: transparent;
  }
  .administratorNavsUser {
    text-decoration: none;
    padding: 10px;
    width: 150px;
    text-align: center;
    background-color: rgb(94, 231, 30);
    border-radius: 7px 7px 0px 0px;
    margin-right: 10px;
  }
  .administratorNavsUser a {
    text-decoration: none;
    color: rgb(40,40,40);
    font-weight: bolder;
  }
  .administratorContainer {
    width: 95%;
    margin: 0 auto;
    margin-top: 10px;
    margin-bottom: 10px;
  }
  .titleTable {
    background-color:rgb(94, 231, 30);
    color: rgb(40,40,40);
    font-weight: bolder;
    text-align: center;
  }
  .iconsTable td {
    text-align: center;
  }
  .iconsTable td ion-icon{
    cursor: pointer;
    color: rgb(94, 231, 30);
    margin-left: 5px;
    margin-right: 5px;
    font-size: 30px;
    transition: 0.4s ease-in-out;
  }
  .iconsTable td ion-icon:hover {
    color: rgb(82, 123, 235);
  }
  .icons {
    width: 104px;
  }
</style>
