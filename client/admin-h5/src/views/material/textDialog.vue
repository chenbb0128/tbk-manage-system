<template>
  <el-dialog
    :title="form.id ? '编辑素材' : '添加素材'"
    :visible.sync="visible"
    :destroy-on-close="true"
  >
    <el-form ref="dataForm" :rules="rules" :model="form" label-position="left" label-width="100px" style="width: 400px; margin-left:50px;">
      <el-form-item label="素材别名" prop="name">
        <el-input v-model="form.name" />
      </el-form-item>
      <el-form-item label="内容" prop="value">
        <el-input v-model="form.value" />
      </el-form-item>
    </el-form>
    <div slot="footer" class="dialog-footer">
      <el-button @click="$emit('hiddenTextDialogVisible')">
        取消
      </el-button>
      <el-button type="primary" @click="form.id ? updateData() : createData()">
        确定
      </el-button>
    </div>
  </el-dialog>
</template>
<script>
import { createText, updateText } from '@/api/material'

export default {
  props: {
    textDialogVisible: {
      type: Boolean,
      default: false
    },
    hiddenTextDialogVisible: {
      type: Function,
      default: () => {}
    },
    text: {
      type: Object,
      default: () => {}
    },
    changeList: {
      type: Function,
      default: () => {}
    }
  },
  data() {
    return {
      form: Object.assign({}, this.text),
      rules: {
        name: [{ required: true, message: '素材别名必填', trigger: 'change' }],
        value: [{ required: true, message: '内容必填', trigger: 'change' }]
      }
    }
  },
  computed: {
    visible: {
      get: function() {
        return this.textDialogVisible
      },
      set: function(val) {
        this.$emit('hiddenTextDialogVisible')
      }
    }
  },
  watch: {
    text(val) {
      this.form = Object.assign({}, val)
    }
  },
  created() {
  },
  methods: {
    updateData() {
      this.$refs['dataForm'].validate((valid) => {
        if (valid) {
          updateText(this.form).then((res) => {
            this.$notify({
              title: 'Success',
              message: res.data,
              type: 'success',
              duration: 2000
            })
            this.$emit('hiddenTextDialogVisible')
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
          createText(this.form).then((res) => {
            this.$notify({
              title: 'Success',
              message: res.data,
              type: 'success',
              duration: 2000
            })
            this.$emit('hiddenTextDialogVisible')
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
