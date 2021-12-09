<template>
  <div class="px-4 mb-5">
    <h6 class="h5 text-secondary">評論</h6>
    <ul class="list-unstyled d-none d-md-block">
      <li v-for="n in 3" :key="n" class="border-bottom mb-3">
        <div class="d-flex justify-content-between">
          <div>阿龍
            <span> 5 分鐘前新增</span>
          </div>
          <div>星星星</div>

        </div>
        <p>評論內容...</p>
      </li>
    </ul>
  </div>
</template>

<script>
export default {

}
</script>

<style>

</style>