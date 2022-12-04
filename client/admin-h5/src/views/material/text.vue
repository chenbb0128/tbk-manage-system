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
      <el-table-column label="素材别称">
        <template slot-scope="scope">
          {{ scope.row.name }}
        </template>
      </el-table-column>
      <el-table-column label="内容">
        <template slot-scope="scope">
          {{ scope.row.value }}
        </template>
      </el-table-column>
      <el-table-column align="center" prop="created_at" label="创建时间" width="200">
        <template slot-scope="scope">
          <span>{{ scope.row.created_at }}</span>
        </template>
      </el-table-column>
      <el-table-column label="操作" align="center" width="230" class-name="small-padding fixed-width">
        <template slot-scope="{row}">
          <el-button type="primary" size="mini" @click="handleUpdate(row)">
            编辑
          </el-button>
        </template>
      </el-table-column>
    </el-table>
    <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.limit" @pagination="handleGetList" />
    <TextDialog
      :text-dialog-visible="textDialogVisible"
      :text="currentText"
      @hiddenTextDialogVisible="hiddenTextDialogVisible"
      @changeList="changeList"
    />
  </div>
</template>

<script>
import Pagination from '@/components/Pagination'
import { getTexts } from '@/api/material'
import TextDialog from './textDialog'

export default {
  components: { Pagination, TextDialog },
  data() {
    return {
      list: null,
      listLoading: true,
      total: 0,
      // list params
      listQuery: {
        page: 1,
        limit: 10,
        sort: '+id'
      },
      currentText: {},
      textDialogVisible: false
    }
  },
  created() {
    this.handleGetList()
  },
  methods: {
    handleGetList() {
      this.listLoading = true
      getTexts(this.listQuery).then(response => {
        const data = response.data
        this.list = data.data
        this.total = data.total
        this.listLoading = false
      })
    },
    handleUpdate(row) {
      this.currentText = row
      this.textDialogVisible = true
    },
    handleCreate() {
      this.currentText = {}
      this.textDialogVisible = true
    },
    hiddenTextDialogVisible() {
      this.textDialogVisible = false
    },
    changeList(data, mode = 'update') {
      if (mode === 'add') {
        this.handleGetList()
      } else {
        const index = this.list.findIndex(v => v.id === data.id)
        this.list.splice(index, 1, data)
      }
    }
  }
}
</script>
