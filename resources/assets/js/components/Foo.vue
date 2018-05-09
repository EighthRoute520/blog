<template>
    <div>
       <el-tabs type="border-card">
            <el-tab-pane label="用户管理">
                <Index/>
            </el-tab-pane>
            <el-tab-pane label="配置管理">
                <Bar/>
            </el-tab-pane>
            <el-tab-pane label="角色管理">
                <Role/>
            </el-tab-pane>
            <el-tab-pane label="定时任务补偿">
                定时任务补偿
            </el-tab-pane>
        </el-tabs>
    </div>
</template>
<script>
    import Index from "./Index"
    import Bar from "./Bar"
    import Role from "./Role"

    export default {
        name:"foo",
        data(){
            return {
                msg: "我是foo组件"
            }
        },
        components:{
            Index,
            Bar,
            Role
        }
    }
</script>
<style scoped>
</style>