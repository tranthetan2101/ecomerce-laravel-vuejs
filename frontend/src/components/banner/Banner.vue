<template>
    <div class="carousel"  @keydown="checkSlide($event)" tabindex="0">
        <slot></slot>
        <button @click.prevent="next" class="btn btn-next direct"><i class="fa fa-angle-right"></i></button>
        <button @click.prevent="prev" class="btn btn-prev direct"><i class="fa fa-angle-left"></i></button>
    </div>
</template>
<script>
export default {
    data () {
        return {
            index : 0,
            banners : [],
            slideDirection: '',
        }
    },

    computed: {
        slidesLength() {
            return this.banners.length;
        }
    },
    mounted(){
        this.banners = this.$children;
        this.banners.map( (banner,index) => {
            banner.index = index;
        });
    },
    methods: {
        next(){
            this.index++;
            if(this.index >= this.slidesLength){
                this.index = 0;
            }
            this.slideDirection = 'slide-right';
        },
        prev(){
            this.index--;
            if(this.index < 0){
                this.index = this.slidesLength - 1;
            }
             this.slideDirection = 'slide-left';
        },
        checkSlide(event){
            if(event.keyCode === 39){
                this.next();
            }else if (event.keyCode === 37){
                this.prev();
            }else {
                return;
            }
        },
    }
}
</script>
<style>
.carousel {
  position:relative;
  width:100%;
  height:500px;
  z-index:10;
}
</style>