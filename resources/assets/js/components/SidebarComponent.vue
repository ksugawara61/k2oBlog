<template>
  <div id="page-sub">
    This is sidebar content.
  </div>
</template>

<style>
#page-sub {
  float: right;
  width: 300px;
}
</style>


<script>
export default {
  mounted() {
    console.log('Sidebar component mounted.')
  }
}
</script>
