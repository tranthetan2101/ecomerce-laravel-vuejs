<template>
  <div id="app">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"/>
    <Navbar/>
      <router-view />
    <Footer/>
  </div>
</template>
<script>
import Footer from './components/elements/Footer'
import Navbar from './components/elements/Navbar'
export default {
  name: 'App',
  components: {
    Footer,Navbar
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  /*text-align: center;*/
  color: #2c3e50;
}
</style>
