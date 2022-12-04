<template>
  <div class="app-container">
    <div class="filter-container">
      <el-button class="filter-item" style="margin-left: 10px;" type="primary" icon="el-icon-edit" @click="handleCreate">
        新增
      </el-button>
    </div>
    <el-table
      v-loading="listLoading"
      :data="list"
      element-loading-text="Loading"
      border
      fit
      highlight-current-row
    >
      <el-table-column align="center" label="ID" width="95">
        <template slot-scope="scope">
          {{ scope.row.id }}
        </template>
      </el-table-column>
      <el-table-column label="标题" width="110">
        <template slot-scope="scope">
          {{ scope.row.title }}
        </template>
      </el-table-column>
      <el-table-column label="执行时间" width="110" align="center">
        <template slot-scope="scope">
          <span>{{ scope.row.cron_time }}</span>
        </template>
      </el-table-column>
      <el-table-column label="执行对象类别" width="110" align="center">
        <template slot-scope="scope">
          <span>{{ scope.row.object_type }}</span>
        </template>
      </el-table-column>
      <el-table-column label="素材" align="center">
        <template slot-scope="scope">
          <span v-for="item in scope.row.materials">
            <el-tag style="margin-left: 10px;" v-if="item.type === materialType.IMAGE">{{materialType.getName(item.type)}}</el-tag>
            <el-tag style="margin-left: 10px;" v-else>{{materialType.getName(item.type)}}-{{ item.value.substring(0, 5) }}...</el-tag>
          </span>
        </template>
      </el-table-column>
      <el-table-column align="center" prop="created_at" label="创建时间" width="200">
        <template slot-scope="scope">
          <span>{{ scope.row.created_at }}</span>
        </template>
      </el-table-column>
      <el-table-column align="center" prop="created_at" label="更新时间" width="200">
        <template slot-scope="scope">
          <span>{{ scope.row.updated_at }}</span>
        </template>
      </el-table-column>
      <el-table-column label="操作" align="center" width="230" class-name="small-padding fixed-width">
        <template slot-scope="{row,$index}">
          <el-button type="primary" size="mini" @click="handleUpdate(row)">
            编辑
          </el-button>
        </template>
      </el-table-column>
    </el-table>
    <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.limit" @pagination="handleGetList" />
    <EditScheduleDialog
      :reply-dialog-visible="replyDialogVisible"
      :reply="currentReply"
      @hiddenEditScheduleDialogVisible="hiddenEditScheduleDialogVisible"
      @changeList="changeList"
    ></EditScheduleDialog>
  </div>
</template>

<script>
import Pagination from '@/components/Pagination'
import materialType from "@/constants/materialType"
import EditScheduleDialog from './editScheduleDialog'
import {getSchedules} from "@/api/schedule";

export default {
  components: { Pagination, EditScheduleDialog },
  filters: {
  },
  data() {
    return {
      list: null,
      listLoading: true,
      total: 0,
      // list params
      listQuery: {
        page: 1,
        limit: 10,
        sort: '+id',
        filters: {}
      },
      materialType: materialType,
      replyDialogVisible: false,
      currentReply: {}
    }
  },
  created() {
    this.handleGetList()
  },
  methods: {
    handleGetList() {
      this.listLoading = true
      getSchedules(this.listQuery).then(response => {
        const data = response.data
        this.list = data.data
        this.total = data.total
        this.listLoading = false
      })
    },
    hiddenEditScheduleDialogVisible() {
      this.editScheduleDialogVisible = false
    },
    changeList(data, mode = 'update') {
      if (mode === 'add') {
        this.handleGetList()
      } else {
        const index = this.list.findIndex(v => v.id === data.id)
        this.list.splice(index, 1, data)
      }
    },
    handleUpdate(row) {
      this.currentReply = row
      this.editScheduleDialogVisible = true
    },
    handleCreate() {
      this.currentReply = {}
      this.editScheduleDialogVisible = true
    },
    handleFilter() {
      this.listQuery.page = 1
      this.handleGetList()
    },
  }
}
</script>
