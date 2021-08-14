<template>
  <div class="banner">
        <banner>
            <bannerSlide v-for="banner in banners" :key="banner.id" class="carousel-banner">
                <img :src="banner.banner_url" :alt="banner.name">
            </bannerSlide>
        </banner>
  </div>
</template>

<script>
import bannerSlide from './Bannerslide.vue';
import banner from './Banner.vue';
import bannerApi from "../../api/bannerApi";
export default {
    name:'bannerHome',
    components : {
        bannerSlide,banner
    },
    data (){
        return{
          banners: [],
        }
    },
    async created() {
      bannerApi.getAll()
          .then(response => {
            this.banners = response.data;
          })
          .catch(e => {
            console.log(e);
          });
    }
}
</script>

<style>
    .banner {
        display:flex;
        justify-content: center;
    }
    .direct {
        padding:5px 10px;
        background-color:rgba(0,0,0,0.5);
        border:1px solid transparent;
        margin:5px 10px;
        color:#FFF;
        height:50px;
        width:50px;
        position:absolute;
        margin-top:-25px;
        z-index:2;
    }
    .direct:hover {
        cursor: pointer;
    }
    .direct:focus{
        outline:none;
    }
    .btn-next {
        top:50%;
        right:0;
    }
    .btn-prev {
        top:50%;
        left:0;
    }
    .carousel-banner {
        position:absolute;
        top:0;
        left:0;
        bottom:0;
        right:0;
    }
    .carousel-banner img {
        width:100%;
        height:100%;
    }
</style>