<template>
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <!-- Container wrapper -->
    <div class="container">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
          <router-link :to="{name: 'HomePage'}" class="navbar-brand mt-2 mt-lg-0">
          <img
              src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
              height="15"
              alt=""
              loading="lazy"
          />
          </router-link>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <router-link :to="{name: 'store'}" class="nav-link">Cửa hàng</router-link>
          </li>
        </ul>
      </div>
      <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a>
    </div>
    <Login></Login>
  </nav>
</template>
<script>
import Login from "../auth/login";
export default {
  name: "Navbar",
  components: { Login },
  props: {
    msg: String,
  },
  data() {
    return {
    };
  },
};
</script>
<style scoped lang="scss">
</style>