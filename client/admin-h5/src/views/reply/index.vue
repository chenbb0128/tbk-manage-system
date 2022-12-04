<template>
  <div class="app-container">
    <div class="filter-container">
      <el-input v-model="listQuery.filters.keyword" placeholder="keyword" style="width: 200px;" class="filter-item" @keyup.enter.native="handleFilter" />
      <el-button v-waves class="filter-item" style="margin-left: 10px;" type="primary" icon="el-icon-search" @click="handleFilter">
        搜索
      </el-button>
      <router-link :to="'/robot/reply/addReply'">
        <el-button class="filter-item" style="margin-left: 10px;" type="primary" icon="el-icon-edit">
          新增
        </el-button>
      </router-link>
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
      <el-table-column label="关键字">
        <template slot-scope="scope">
          <span v-for="item in scope.row.keywords">
            <el-tag style="margin-left: 10px;">{{item.keyword}}</el-tag>
          </span>
        </template>
      </el-table-column>
      <el-table-column label="匹配规则" width="110" align="center">
        <template slot-scope="scope">
          <span>{{ matchType.getName(scope.row.match_type) }}</span>
        </template>
      </el-table-column>
      <el-table-column label="内容" align="center">
        <template slot-scope="scope">
          <span v-for="item in scope.row.materials">
            <el-tag style="margin-left: 10px;" v-if="item.type === materialType.IMAGE">{{materialType.getName(item.type)}}</el-tag>
            <el-tag style="margin-left: 10px;" v-else>{{materialType.getName(item.type)}}-{{ item.value.substring(0, 5) }}...</el-tag>
          </span>
        </template>
      </el-table-column>
      <el-table-column align="center" prop="created_at" label="创建时间" width="180">
        <template slot-scope="scope">
          <span>{{ scope.row.created_at }}</span>
        </template>
      </el-table-column>
      <el-table-column align="center" prop="created_at" label="更新时间" width="180">
        <template slot-scope="scope">
          <span>{{ scope.row.updated_at }}</span>
        </template>
      </el-table-column>
      <el-table-column label="操作" align="center" width="230" class-name="small-padding fixed-width">
        <template slot-scope="{row,$index}">
          <router-link :to="'/robot/reply/editReply/' + row.id">
            <el-button type="primary" size="mini" @click="handleUpdate(row)">
              编辑
            </el-button>
          </router-link>
        </template>
      </el-table-column>
    </el-table>
    <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.limit" @pagination="handleGetList" />
    <ReplyDialog
      :reply-dialog-visible="replyDialogVisible"
      :reply="currentReply"
      @hiddenReplyDialogVisible="hiddenReplyDialogVisible"
      @changeList="changeList"
    ></ReplyDialog>
  </div>
</template>

<script>
import { getReplies } from '@/api/reply'
import Pagination from '@/components/Pagination'
import materialType from "@/constants/materialType"
import ReplyDialog from './replyDialog'
import matchType from "@/constants/matchType"
import waves from '@/directive/waves'

export default {
  components: { Pagination, ReplyDialog },
  directives: { waves },
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
      matchType: matchType,
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
      getReplies(this.listQuery).then(response => {
        const data = response.data
        this.list = data.data
        this.total = data.total
        this.listLoading = false
      })
    },
    hiddenReplyDialogVisible() {
      this.replyDialogVisible = false
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
      this.replyDialogVisible = true
    },
    handleCreate() {
      this.currentReply = {}
      this.replyDialogVisible = true
    },
    handleFilter() {
      this.listQuery.page = 1
      this.handleGetList()
    },
  }
}
</script>
