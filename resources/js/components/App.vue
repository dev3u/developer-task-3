<template>
  <div id="app">
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
    <div v-for="study in studies" :key="study.id">
      <h3>{{ study.name }}</h3>
      <button class="button-comp" v-on:click="addComplete">Add Complete</button>
    </div>
  </div>
</template>

<script>
import appConsts from '../consts.js'
import { getUrl } from '../helpers/api-helpers.js'
// import HelloWorld from './HelloWorld/HelloWorld.vue'

export default {
  name: 'app',
  data() {
    return {
      studies: null,
    }
  },
  components: {
    // HelloWorld
  },
  methods: {
    addComplete() {
      console.log("add Complete")
    },
    // Use this method to make the api call to retrieve all studies (the existing endpoint)
    async getStudies() {
      
    }
  },
  mounted: async function () {
    this.getStudies()
  },
}
</script>

<style>
#app {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>


