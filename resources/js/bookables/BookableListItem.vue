<template>
  <div>
    <div class="card w-100">
      <div class="card-body">
        <router-link :to="{name: 'bookable' , params: {id}}">
          <h2>title: {{ title }}</h2>
        </router-link>
        <p>description: {{ description }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'bookableListIem',
  props:{
    title:{
      type: String,
    },
    description:{
      type: String
    },
    id:{
      type:Number
    }
  }
}
</script>

<style>

</style>