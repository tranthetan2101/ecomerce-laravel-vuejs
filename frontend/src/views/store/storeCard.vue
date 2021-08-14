<template>
  <div class="store__app container">
      <div class="row">
          <div class="col-md-3">
              <category-sidebar></category-sidebar>
          </div>
          <div class="col-md-9">
            <productList/>
          </div>
      </div>
  </div>
</template>
<script>
import categorySidebar from "../../components/category/category";

export default {
  components:{
    categorySidebar
  }
}
</script>