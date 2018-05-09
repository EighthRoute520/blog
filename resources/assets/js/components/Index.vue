<template>
  <div class="m_index">
    <el-table
      :data="tableData"
      border
      height="540"
      style="width: 100%">
      <el-table-column
        fixed
        prop="id"
        label="编号"
        width="80">
      </el-table-column>
      <el-table-column
        fixed
        prop="date"
        label="日期"
        width="150">
      </el-table-column>
      <el-table-column
        prop="name"
        label="姓名"
        width="150">
      </el-table-column>
      <el-table-column
        prop="province"
        label="省份"
        width="150">
      </el-table-column>
      <el-table-column
        prop="city"
        label="市区"
        width="150">
      </el-table-column>
      <el-table-column
        prop="address"
        label="地址"
        width="350">
      </el-table-column>
      <el-table-column
        prop="zip"
        label="邮编"
        width="150">
      </el-table-column>
      <el-table-column
        fixed="right"
        label="操作"
        width="150">
        <template slot-scope="scope">
          <el-button @click="showDetail(scope.row)" type="text" size="small">查看</el-button>
          <el-button @click="showDetail(scope.row)" type="text" size="small">编辑</el-button>
        </template>
      </el-table-column>
    </el-table>
    <el-pagination
        @size-change="handleSizeChange"
        @current-change="handleCurrentChange"
        :current-page="currentPage"
        :page-sizes="[10, 20, 50, 100]"
        :page-size="pagesize"
        layout="total, sizes, prev, pager, next, jumper"
        :total="total">
    </el-pagination>

    <el-dialog
      title="提示"
      :visible.sync="dialogVisible"
      width="30%"
      :before-close="handleClose" >
      <span>日期：{{ gridData.date }}</span></br>
      <span>姓名：{{ gridData.name }}</span></br>
      <span>省份：{{ gridData.province }}</span></br>
      <span>市区：{{ gridData.city }}</span></br>
      <span>地址：{{ gridData.address }}</span></br>
      <span>邮编：{{ gridData.zip }}</span></br>
      <span slot="footer" class="dialog-footer">
        <el-button @click="dialogVisible = false">取 消</el-button>
        <el-button type="primary" @click="dialogVisible = false">确 定</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
  export default {
    data() {
      return {
        pagesize: 10,
        currentPage: 1,
        total: 0,
        tableData: [],
        gridData:{},
        dialogVisible : false,
      }
    },
    methods:{
      getData:function(){
          this.$axios("/getData",{
            params:{
              pagesize:this.pagesize,
              currentPage:this.currentPage
            }
          })
          .then(function(res) {
            this.tableData = res.data.data;
            this.total = res.data.total;
            console.log(this.tableData);
          }.bind(this))
          .catch(function(error){
            console.log(error);
          })
      },
      showDetail:function(row) {
        this.gridData = {
          address:row.address,
          city:row.city,
          date:row.date,
          name:row.name,
          province:row.province,
          zip:row.zip,
        };
        this.dialogVisible = true;
      },
      handleSizeChange: function (size) {
        this.pagesize = size;
        this.getData();
      },
      handleCurrentChange: function(currentPage){
          this.currentPage = currentPage;
          this.getData();
      },
      handleClose:function(done) {
        this.$confirm('确认关闭？')
          .then(_ => {
            done();
          })
          .catch(_ => {});
      }
    },
    created:function(){
        this.getData();
    }
  }
</script>
<style>
.el-pagination{
  text-align:  center;
}
</style>