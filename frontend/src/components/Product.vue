<template>
  <div>
    <h1>product</h1>

    <table class="table table-hover">
      <thead>
      <tr>
        <th>ID</th>
        <th>Item Name</th>
        <th>Item Price</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="product in products" :key="product.id">
        <td>{{ product.id }}</td>
        <td>{{ product.name }}</td>
        <td>{{ product.price }}</td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import productApi from "../api/productApi";
export default {
  data() {
    return {
      products: [],
    }
  },
  async created() {
    productApi.getAll()
        .then(response => {
          this.products = response.data;
          console.log(response.data);
        })
        .catch(e => {
          console.log(e);
        });
  },
}
</script>