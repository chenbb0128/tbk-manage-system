<template>
  <div class="app-container">
    <h2>关键词回复</h2>
    <el-alert
      title="当好友或群聊好友@机器人并发送预设关键词时，会自动回复设置的内容"
      type="success">
    </el-alert>
    <el-form label-position="top" label-width="80px" v-loading="loading">
      <el-form-item label="关键词">
        <keyword-tag :keywords="keywords" @handleChangeKeywords="handleChangeKeywords"></keyword-tag>
      </el-form-item>
      <el-form-item label="匹配模式">
        <el-radio-group size="small" v-model="match_type">
          <el-radio border :label="0" >精确匹配</el-radio>
          <el-radio border :label="1">模糊匹配</el-radio>
        </el-radio-group>
      </el-form-item>
      <el-form-item label="回复内容">
        <material-tag :materials="materials" @handleChangeMaterials="handleChangeMaterials"></material-tag>
      </el-form-item>
      <el-form-item>
        <el-button type="primary" @click="submitReply">确定</el-button>
      </el-form-item>
    </el-form>
  </div>
</template>

<script>
import { getReply, updateReply, createReply } from '@/api/reply'
import keywordTag from "@/views/reply/components/keywordTag"
import materialType from "@/constants/materialType"
import materialTag from "@/views/reply/components/materialTag"

export default {
  components: { keywordTag, materialTag },
  data() {
    return {
      replyId: this.$route.params && this.$route.params.id,
      materialType: materialType,
      match_type: 0,
      keywords: [],
      materials: [],
      loading: true
    }
  },
  created() {
    if(this.replyId) {
      this.handleGetList()
    } else {
      this.loading = false
    }
  },
  methods: {
    handleGetList() {
      this.listLoading = true
      getReply(this.replyId).then(response => {
        const reply = response.data
        this.match_type = reply.match_type
        this.keywords = reply.keywords
        this.materials = reply.materials
        this.loading = false
      })
    },
    handleChangeKeywords(keywords) {
      this.keywords = keywords
    },
    handleChangeMaterials(materials) {
      this.materials = materials
    },
    submitReply() {

      this.loading = true
      if (this.replyId) {
        const updateData = {
          id: this.replyId,
          match_type: this.match_type,
          keywords: this.keywords,
          materials: this.materials
        }
        // 更新
        updateReply(updateData).then(response => {
          this.$message({
            message: '操作成功',
            type: 'success'
          })
          this.loading = false
          this.$router.go(-1)
        }).catch(() => {
          this.loading = false
          this.$message({
            type: 'error',
            message: `操作失败!`
          })
        })
      } else {
        const addData = {
          match_type: this.match_type,
          keywords: this.keywords,
          materials: this.materials
        }
        // 添加
        createReply(addData).then(response => {
          this.$message({
            message: '操作成功',
            type: 'success'
          })
          this.loading = false
          this.$router.go(-1)
        }).catch(() => {
          this.loading = false
          this.$message({
            type: 'error',
            message: `操作失败!`
          })
        })
      }
    }
  }
}
</script>
