Bookables<template>
  <div class="container">
    <div v-if="loading">
      loading...
    </div>
    <template v-else>
      <div class="row">
      <div class="d-flex align-items-stretch" :class="`col-${12/columns}`" v-for="(item,i) in list" :key="i">
        <BookableListItem 
          :title="item.title" 
          :description="item.description" 
          :id="item.id"
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
    this.fetchData()
  },
  methods:{
    fetchData(){
      this.loading = true;

      axios.get('api/bookables')
      .then(({data}) => {
        this.list = data.data;
        this.loading = false
      })
      .catch((e) => {
        console.log(e);
        this.loading = false;
      })
    }
  }
}
</script>

<style>

</style>