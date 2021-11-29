<template>
  <div>
    <!-- <router-link to="/">Home</router-link> -->
    <router-link :to="{name:'Home'}">Home</router-link>
    <router-link to="/about">about</router-link>
    <router-view></router-view>
  </div>
</template>

<script>

export default {

}
</script>

<style>

</style>