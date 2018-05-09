<template>
    <div class="header">  
        <Header/>
        <router-view></router-view>
    </div>   
</template>

<script>
 import Header from "./Header"

 export default {
    data() {
      return {
      };
    },
    components:{
        Header,
    }
  }
</script>
<style scoped>  
</style>  