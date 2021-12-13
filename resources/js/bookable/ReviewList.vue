<template>
  <div class="px-4 mb-5">
  <StarRating :number = '4.1' />
  <StarRating :number = '3.9' />
  <StarRating :number = '3.4' />
  123
    <h6 class="h5 text-secondary">評論</h6>
    <ul class="list-unstyled d-none d-md-block" v-if="reviews !== null">
      <li v-for="(review, index) in reviews" :key="`review + ${index}`" class="border-bottom mb-3">
        <div class="d-flex justify-content-between">
          <div>
            阿龍
            <!-- <p> {{ moment(review.created_at).fromNow() }} 分鐘前新增</p> -->
            <p> {{ review.created_at | fromNow }} 分鐘前新增</p>
          </div>
          <div>
            <StarRating :number = 'review.rating' />
          </div>

        </div>
        <p>{{review.content}}</p>
      </li>
    </ul>
  </div>
</template>

<script>
// import moment from 'moment';

export default {
  props:{
    bookableId:{
      type: String
    }
  },
  data(){
    return{
      loading: false,
      reviews: null
    }
  },
  mounted() {
    this.getData()
  },
  methods: {
    getData (){
      this.loading = true
      axios.get(`/api/bookables/${this.bookableId}/reviews`)
        .then(res=>{
          this.reviews = res.data.data
        })
        .catch((e)=>{
          console.log(e);
        })   
        .then(()=> this.loading = false)
    }
  },
  // filters:{
  //   fromNow(value){
  //     return moment(value).fromNow()
  //   }
  // }
}
</script>

<style>

</style>