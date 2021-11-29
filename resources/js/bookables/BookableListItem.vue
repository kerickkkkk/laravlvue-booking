<template>
  <div>
    <h2>title: {{ title }}</h2>
    <p>content: {{ content }}</p>
    <p>price: {{price}}</p>
  </div>
</template>

<script>
export default {
  name: 'bookableListIem',
  props:{
    title:{
      type: String,
    },
    content:{
      type: String
    },
    price:{
      type: Number
    }
  },
  mounted(){
    // console.log(this.title, this.content, this.price);
  }
}
</script>

<style>

</style>