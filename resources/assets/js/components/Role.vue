<template>
  <div class="block">
    <span class="demonstration">时间范围选择</span><br/>
    <el-date-picker
      v-model="value5"
      type="datetimerange"
      :picker-options="pickerOptions2"
      range-separator="至"
      start-placeholder="开始日期"
      end-placeholder="结束日期"
      align="right">
    </el-date-picker><br/>
    您选择的时间范围为：{{ value5[0] }} 至 {{ value5[1] }} 
  </div>
</template>

<script>
  export default {
    data() {
      return {
        pickerOptions2: {
          shortcuts: [{
            text: '最近一周',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 7);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近一个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 30);
              picker.$emit('pick', [start, end]);
            }
          }, {
            text: '最近三个月',
            onClick(picker) {
              const end = new Date();
              const start = new Date();
              start.setTime(start.getTime() - 3600 * 1000 * 24 * 90);
              picker.$emit('pick', [start, end]);
            }
          }]
        },
        value5: [new Date(2000, 10, 10, 10, 10), new Date(2000, 10, 11, 10, 10)],
      };
    }
  };
</script>

<style scoped>
.block{
    height: 500px;
}
</style>