<template>
  <div class="px-4 mb-5">
    <h6 class="h5 text-secondary">評論</h6>
    <ul class="list-unstyled d-none d-md-block" v-if="reviews !== null">
      <li v-for="(review, index) in reviews" :key="`review + ${index}`" class="border-bottom mb-3">
        <div class="d-flex justify-content-between">
          <div>
            阿龍
            <p> {{review.created_at}} 分鐘前新增</p>
          </div>
          <div>
            <span v-for="n in review.rating" :key="n">
              星
            </span>
          </div>

        </div>
        <p>{{review.content}}</p>
      </li>
    </ul>
  </div>
</template>

<script>
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
    console.log('review', this.bookableId);
  },
  methods: {
    getData (){
      this.loading = true
      axios.get(`/api/bookables/${this.bookableId}/reviews`)
        .then(res=>{
          this.reviews = res.data.data
          this.loading = false
        })
        .catch((e)=>{
          console.log(e);
        })
    }
  },
}
</script>

<style>

</style>