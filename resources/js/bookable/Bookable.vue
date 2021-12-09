<template>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <div class="card mb-5">
          <div class="card-body">
            <template v-if="!loading && data !== null">
              <h4>{{data.id}}</h4>
              <h5 class="card-title">{{data.title}}</h5>
              <p class="card-text">{{data.description}}</p>
            </template>
            <template v-else>
              loading...
            </template>
          </div>
        </div>
        <ReviewList/>
      </div>
      <div class="col-md-4">
        <Availability />
      </div>
    </div>
  </div>
</template>

<script>
import Availability from './Availability.vue'
import ReviewList from './ReviewList.vue'
export default {
  components:{
    Availability,
    ReviewList
  },
  data(){
    return{
      loading: false,
      data:null
    }
  },
  mounted() {
    this.fetchData()
  },
  methods:{
    fetchData(){
      this.loading = true;
      axios.get(`/api/bookables/${this.$route.params.id}`)
      .then(({data}) => {
        this.data = data.data;
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