
<template>
  <div>
    <header>
      <nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
          <router-link to="/" class="navbar-brand" href="#"
            >UNIVERSAL INFORMATICA</router-link
          >
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <router-link
                  to="/produtos"
                  class="nav-link active"
                  aria-current="page"
                  >Ofertas</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="" class="nav-link" href="#"
                  >Informatica</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="" class="nav-link" href="#"
                  >Serviços</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="" class="nav-link" href="#"
                  >Nossas lojas</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="" class="nav-link" href="#"
                  >Trabalhe conosco</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="" class="nav-link" href="#"
                  >Energia</router-link
                >
              </li>
              <li class="nav-item">
                <router-link to="" class="nav-link" href="#"
                  >Produtos + %89 desconto</router-link
                >
              </li>
              <li class="nav-item dropdown">
                <router-link
                  to=""
                  class="nav-link dropdown-toggle"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  mais
                </router-link>
                <ul class="dropdown-menu">
                  <li>
                    <router-link to="" class="dropdown-item" href="#"
                      >Autor</router-link
                    >
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <CatalogoView/>
    <router-view></router-view>
  </div>
</template>
<script>
import ListaFilmes from "./views/FilmesView.vue";

export default {
  name: "App",
  components: {
    ListaFilmes,
  },
  methods: {
    isActive(route) {
      return this.$route.path === route;
    },
  },
};
</script>
