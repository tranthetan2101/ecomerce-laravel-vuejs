<template>
  <div class="container">
  <div class="row mt-5" v-if="product">
    <div class="col-5">
      <img :src="product.product[0].images[0].image_name" width="350px"/>
    </div>
    <div class="col-7">
      <h1>{{ product.product[0].name }}</h1>
      <h3>${{ product.product[0].price }}</h3>

      <input type="text" v-model.number="quantity" class="text-center col-1 mr-2 p-1" />
      <button class="btn btn-primary">Add to Cart</button>

      <div class="mt-4">{{ product.product[0].description1 }}</div>
    </div>
  </div>
  </div>
</template>
<script>
import { mapActions,mapGetters} from 'vuex'
export default {
  name:"detail",
  data() {
    return {
      quantity: 1,
      id: null,
    };
  },
  computed: {
    ...mapGetters(["product"])
  },
  created() {
    this.getProductid(this.$route.params.id);
  },
  methods: {
    ...mapActions(["getProductid"]),
  }
}
</script>