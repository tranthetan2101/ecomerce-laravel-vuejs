<template>
    <div class="home__page">
        <bannerHome />
      <div class="container">
        <h3 class="text-center list__title">Danh sách sản phẩm</h3>
        <productList/>
      </div>
    </div>
</template>
<script>
export default {
  name: 'HomPage',
}
</script>
<style>
.list__title{
  padding: 50px 0 0 0 ;
}
</style>