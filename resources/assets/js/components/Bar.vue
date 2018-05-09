<template>
    <div class="mycarousel">
      <el-carousel :interval="5000"  arrow="always" height="410px">
        <el-carousel-item v-for="item in imgs" :key="item.key">
          <img :src="item.path" height="415px" />
        </el-carousel-item>
      </el-carousel>
    </div>
</template>
<script>
    export default {
        name:"foo",
        data(){
            return {
                imgs: [
                    {
                        key:1,
                        path:"/images/myimg/1.jpg"
                    },
                    {
                        key:2,
                        path:"/images/myimg/2.jpg"
                    },
                                        {
                        key:3,
                        path:"/images/myimg/3.jpg"
                    },
                    {
                        key:4,
                        path:"/images/myimg/4.jpg"
                    },
                    {
                        key:5,
                        path:"/images/myimg/5.jpg"
                    },
                    {
                        key:6,
                        path:"/images/myimg/6.jpg"
                    },
                ]
            }
        }
    }
</script>
<style scoped>
  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
    text-align: center;
  }

  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
    text-align: center;
  }
</style>