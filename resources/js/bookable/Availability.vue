<template>
  <div>
    <h4>是否可以借 
      <span class="text-success" v-if="hasAvailability">可借</span>
      <span class="text-danger" v-if="noAvailability">沒有可以出借</span>
    </h4>
    <p>status: {{status}}</p>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="from">起始時間</label>
          <input 
            v-model="from"  
            type="date" 
            class="form-control" 
            id="from"
            @keyup.enter="check"
            :class="[{'is-invalid': this.errorFor('from')}]"
          />
          <div class="invalid-feedback" v-for="(error,index) in this.errorFor('from')" :key="'from'+index">
            {{error}}
          </div>
        </div>
        <div class="form-group col-md-6">
          <label for="to">終止時間</label>
          <input v-model="to" type="date" class="form-control" id="to"
            :class="[{'is-invalid': this.errorFor('to')}]"
          />
          <div class="invalid-feedback" v-for="(error,index) in this.errorFor('to')" :key="'to'+index">
            {{error}}
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-block btn-secondary" @click.prevent="check">送出</button>
    </form>
  </div>
</template>

<script>
export default {
  props: {
    bookableId:{
      type: String
    }
  },
  data(){
    return{
      id: null,
      loading: false,
      from : null,
      to : null,
      errors: null,
      status: null,
    }
  },
  mounted() {
    console.log(`availability bookableId${this.bookableId}`);
    
  },
  computed:{
    hasErrors(){
      return 422 === this.status && this.errors !== null
    },
    hasAvailability(){
      return 200 === this.status
    },
    noAvailability(){
      return 404 === this.status
    }
  },
  methods:{
    check(){
      this.loading = true
      this.errors = true
      axios.get(`/api/bookables/${this.bookableId}/availability?from=${this.from}&to=${this.to}`)
        .then(res =>{
          this.status = res.status
        })
        .catch(errors =>{
          if(422 === errors.response.status){
            this.errors = errors.response.data.errors
          }
          this.status = errors.response.status
        })
        .then(()=> this.loading = false)
    },
    errorFor(field){
      return this.hasErrors && this.errors[field] ? this.errors[field] : null
    }

  }
}
</script>

<style>

</style>