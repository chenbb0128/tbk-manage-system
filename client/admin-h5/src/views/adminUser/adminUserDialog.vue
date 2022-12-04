<template>
  <el-dialog
      :title="form.id ? '编辑用户' : '添加用户'"
      :visible.sync="visible"
      :destroy-on-close="true"
  >
    <el-form ref="dataForm" :rules="form.id ? rules : createRules" :model="form" label-position="left" label-width="70px" style="width: 400px; margin-left:50px;">
      <el-form-item label="用户名" prop="username">
        <el-input v-model="form.username" />
      </el-form-item>
      <el-form-item label="Email" prop="email">
        <el-input v-model="form.email" />
      </el-form-item>
      <el-form-item v-if="!form.id" label="密码" prop="password">
        <el-input v-model="form.password" />
      </el-form-item>
    </el-form>
    <div slot="footer" class="dialog-footer">
      <el-button @click="$emit('hiddenAdminUserDialogVisible')">
        取消
      </el-button>
      <el-button type="primary" @click="form.id ? updateData() : createData()">
        确定
      </el-button>
    </div>
  </el-dialog>
</template>
<script>
  import {createAdminUser, updateAdminUser} from "@/api/adminUser";

  export default {
    props: {
      adminUserDialogVisible: {
        type: Boolean,
        default: false
      },
      hiddenAdminUserDialogVisible: Function,
      adminUser: {
        type: Object,
        default: {}
      },
      changeList: Function,
    },
    data() {
      return {
        form: Object.assign({}, this.adminUser),
        rules: {
          username: [{ required: true, message: '请输入用户名', trigger: 'change' }],
          email: [{ required: true, message: '请输入邮箱', trigger: 'change' }],
        },
        createRules: {
          username: [{ required: true, message: '请输入用户名', trigger: 'change' }],
          email: [{ required: true, message: '请输入邮箱', trigger: 'change' }],
          password: [{ required: true, message: '请输入密码', trigger: 'change' }]
        }
      }
    },
    watch: {
      adminUser(val) {
        this.form = Object.assign({}, val)
      },
    },
    created() {
    },
    computed: {
      visible: {
        get: function () {
          return this.adminUserDialogVisible
        },
        set: function (val) {
          this.$emit('hiddenAdminUserDialogVisible')
        }
      }
    },
    methods: {
      updateData() {
        this.$refs['dataForm'].validate((valid) => {
          if (valid) {
            updateAdminUser(this.form).then((res) => {
              this.$notify({
                title: 'Success',
                message: res.data,
                type: 'success',
                duration: 2000
              })
              this.$emit('hiddenAdminUserDialogVisible')
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
            createAdminUser(this.form).then((res) => {
              this.$notify({
                title: 'Success',
                message: res.data,
                type: 'success',
                duration: 2000
              })
              this.$emit('hiddenAdminUserDialogVisible')
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
