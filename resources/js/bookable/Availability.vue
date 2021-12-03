<template>
  <div>
    <h4>是否可以借</h4>
    <form>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="startTime">起始時間</label>
          <input type="date" class="form-control" id="startTime">
        </div>
        <div class="form-group col-md-6">
          <label for="endTime">終止時間</label>
          <input type="date" class="form-control" id="endTime">
        </div>
      </div>
      <button type="submit" class="btn btn-block btn-secondary">送出</button>
    </form>
  </div>
</template>

<script>
export default {
  data(){
    return{
      loading: false,
      data:null
    }
  },
  mounted() {
  },
  methods:{

  }
}
</script>

<style>

</style>