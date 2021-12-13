<template>
  <div class="d-flex">
    <i class="fas fa-star" v-for="n in fullStar" :key="`fas${n}`"></i>
    <i class="fas fa-star-half-alt" v-if="halfStar"></i>
    <i class="far fa-star" v-for="n in emptyStar" :key="`far${n}`"></i>
  </div>
</template>

<script>
export default {
  props:{
    number:{
      type: Number
    }
  },
  data(){
    return{
      totalStar: 5
    }
  },
  mounted() {

  },
  computed: { 
    halfStar(){
      return (this.number % 1) < 0.5
    },
    emptyStar(){
      // 有半星就扣一顆空的
      return this.totalStar - this.fullStar - this.halfStar * 1
    },    
    fullStar(){
      // 四捨五入
      return Math.round(this.number) 
    }    
  }
}
</script>