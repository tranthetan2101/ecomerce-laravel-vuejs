<template>
  <div class="product__list">
      <div class="row">
        <div class="col-md-3" v-for="product in products.slice(0, this.limit)" :key="product.id">
          <div class="product__body">
            <div class="product__image">
              <img
                  :src="product.images[0].image_name"
                  :alt="product.images[0].image_name" width="230px" class="card-img-top">
            </div>
            <div class="product__info">
              <h5 class="product__title d-flex">
                <router-link :to="{name: 'detail', params: {id: product.id}}">{{ product.name }}</router-link>
              </h5>
              <div class="product__price d-flex justify-content-between">
                <h5><b>{{product.price}}</b> vnđ</h5>
                <addToCart class="addCart"/>
              </div>
            </div>
          </div>
        </div>

      </div>
  </div>
</template>
<script>
import {mapActions,mapGetters} from 'vuex'
export default {
  name: 'productList',
  data(){
    return {
      limit:8,
    }
  },
  computed: mapGetters(['products']),
  created() {
    this.getProduct();
  },
  methods: {
    ...mapActions(['getProduct'])
  }
}
</script>
<style scoped>

</style>