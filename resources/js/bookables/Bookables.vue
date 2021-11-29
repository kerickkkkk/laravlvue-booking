Bookables<template>
  <div class="container">
    <div v-if="loading">
      loading...
    </div>
    <template v-else>
      <div class="row">
      <div :class="`col-${12/columns}`" v-for="(item,i) in list" :key="i">
        <BookableListItem 
          :title="item.title" 
          :content="item.content" 
          :price="item.price" 
          ></BookableListItem>
        </div>
      </div>
    </template>
  </div>
</template>

<script>
import BookableListItem from './BookableListItem.vue';
export default {
  name: 'Bookables',
  components:{
    BookableListItem
  },
  data(){
    return{
      loading:false,
      list: null,
      columns: 4
    }
  },
  mounted() {
    this.loading = true;
    console.log('bookable');
    setTimeout(() => {
      this.list = [
        {
          title: 'title1',
          content: 'content1',
          price: 1000
        },
        {
          title: 'title2',
          content: 'content2',
          price: 2000
        },
        {
          title: 'title2',
          content: 'content2',
          price: 2000
        },
        {
          title: 'title2',
          content: 'content2',
          price: 2000
        },
        {
          title: 'title2',
          content: 'content2',
          price: 2000
        },
        {
          title: 'title2',
          content: 'content2',
          price: 2000
        },

      ]

      this.loading = false;
      console.log('time end ' , this.list);
    }, 1500);
  },
}
</script>

<style>

</style>