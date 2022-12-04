<template>
  <el-dialog
    :title="form.id ? '编辑' : '添加'"
    :visible.sync="visible"
    :destroy-on-close="true"
  >
    <el-form ref="dataForm" :rules="rules" :model="form" label-position="left" label-width="100px" style="width: 400px; margin-left:50px;">
      <el-form-item label="关键词" prop="keyword">
        <el-input v-model="form.keyword" />
      </el-form-item>
      <el-form-item label="类别" prop="type">
        <el-select v-model="form.type" class="filter-item" placeholder="请选择">
          <el-option
            v-for="item in materialType.values()"
            :key="item"
            :label="materialType.getName(item)"
            :value="item"
          />
        </el-select>
      </el-form-item>
      <el-form-item label="匹配规则" prop="match_type">
        <el-select v-model="form.match_type" class="filter-item" placeholder="请选择">
          <el-option
            v-for="item in matchType.values()"
            :key="item"
            :label="matchType.getName(item)"
            :value="item"
          />
        </el-select>
      </el-form-item>
      <el-form-item label="内容" prop="content">
        <el-input v-model="form.content" />
      </el-form-item>
    </el-form>
    <div slot="footer" class="dialog-footer">
      <el-button @click="$emit('hiddenReplyDialogVisible')">
        取消
      </el-button>
      <el-button type="primary" @click="form.id ? updateData() : createData()">
        确定
      </el-button>
    </div>
  </el-dialog>
</template>
<script>
  import {createReply, updateReply} from "@/api/reply";
  import materialType from '@/constants/materialType';
  import matchType from "@/constants/matchType";

  export default {
    props: {
      replyDialogVisible: {
        type: Boolean,
        default: false
      },
      hiddenReplyDialogVisible: Function,
      reply: {
        type: Object,
        default: {}
      },
      changeList: Function,
    },
    data() {
      return {
        form: Object.assign({}, this.reply),
        rules: {
          keyword: [{ required: true, message: '请输入关键词', trigger: 'change' }],
          content: [{ required: true, message: '请输入内容', trigger: 'change' }],
          type: [{ required: true, message: '请选择类别', trigger: 'change' }],
          match_type: [{ required: true, message: '请选择匹配规则', trigger: 'change' }],
        },
        materialType: materialType,
        matchType: matchType
      }
    },
    watch: {
      reply(val) {
        this.form = Object.assign({}, val)
      },
    },
    created() {
    },
    computed: {
      visible: {
        get: function () {
          return this.replyDialogVisible
        },
        set: function (val) {
          this.$emit('hiddenReplyDialogVisible')
        }
      }
    },
    methods: {
      updateData() {
        this.$refs['dataForm'].validate((valid) => {
          if (valid) {
            updateReply(this.form).then((res) => {
              this.$notify({
                title: 'Success',
                message: res.data,
                type: 'success',
                duration: 2000
              })
              this.$emit('hiddenReplyDialogVisible')
              this.$emit('changeList', this.form, 'update')
            }).catch(() => {
              this.$notify({
                title: 'Error',
                message: '操作错误，请联系管理员',
                type: 'error',
                duration: 2000
              })
            })
          }
        })
      },
      createData() {
        this.$refs['dataForm'].validate((valid) => {
          if (valid) {
            createReply(this.form).then((res) => {
              this.$notify({
                title: 'Success',
                message: res.data,
                type: 'success',
                duration: 2000
              })
              this.$emit('hiddenReplyDialogVisible')
              this.$emit('changeList', this.form, 'add')
            }).catch(() => {
              this.$notify({
                title: 'Error',
                message: '操作错误，请联系管理员',
                type: 'error',
                duration: 2000
              })
            })
          }
        })
      }
    }
  }
</script>
