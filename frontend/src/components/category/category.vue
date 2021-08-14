<template>
    <div id="category__store">
      <div class="flex-shrink-0 p-3 bg-white">
        <ul class="list-unstyled ps-0" v-for="category in categorys" :key="category.id">
          <li class="mb-1">
            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#category-collapse" aria-expanded="true">
              {{ category.name }}
            </button>
            <div class="collapse show" id="category-collapse">
              <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small" v-for="product in category.product" :key="product.id">
                <li><router-link :to="{name: 'detail', params: {id: product.id}}" class="link-dark rounded">{{ product.name }}</router-link></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
</template>
<script>

import categoryApi from "../../api/categoryApi";

export default {
  name:'sidebarShop',
  data(){
    return{
      categorys:[],
    }
  },
  async created() {
    try{
      await categoryApi.getAll().then(response =>{
          this.categorys = response.data;
      })
    }catch (error){
      console.log(error);
    }
  }
}

</script>
<style>
a.link-dark.rounded {
  margin-left: 1.25rem;
}
</style>