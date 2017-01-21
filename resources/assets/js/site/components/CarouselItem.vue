<template>
  <div class="item slides" v-bind:class="{ active: this.info.active }">
    <div class="slide" :style="{ backgroundImage: 'url(' + info.bgimg + ')' }"></div>
    <div class="hero">
      <hgroup>
          <h1 v-html="info.header"></h1> 
          <h3>{{ info.description }}</h3>
      </hgroup>
      <a class="btn btn-hero btn-lg" href="{{ info.btnlink }}">{{ info.btncaption }}</a>
    </div>
  </div>
</template>


<style>

</style>


<script>
  export default {
    props: ['datainfo'],

    data () {
      return {
        info: {}
      }
    },

    mounted () {
      this.info = JSON.parse(this.datainfo)
    }
  }
</script>