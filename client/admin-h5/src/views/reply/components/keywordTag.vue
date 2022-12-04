<template>
  <div>
    <el-tag
      :key="keyword.id || keyword.keyword"
      v-for="keyword in keywords"
      closable
      :disable-transitions="false"
      @close="handleClose(keyword)">
      {{keyword.keyword}}
    </el-tag>
    <el-input
      class="input-new-tag"
      v-if="inputVisible"
      v-model="inputValue"
      ref="saveTagInput"
      size="small"
      @keyup.enter.native="handleInputConfirm"
      @blur="handleInputConfirm"
    >
    </el-input>
    <el-button v-else class="button-new-tag" size="small" @click="showInput">+ 添加关键词</el-button>
  </div>
</template>

<script>
  export default {
    props: {
      keywords: {
        type: Array,
        default: function () {
          return []
        }
      },
      handleChangeKeywords: Function,
    },
    data() {
      return {
        inputVisible: false,
        inputValue: ''
      };
    },
    methods: {
      handleClose(keyword) {
        this.keywords.splice(this.keywords.indexOf(keyword), 1);
        console.log(this.keywords)
        this.$emit('handleChangeKeywords', this.keywords)
      },
      showInput() {
        this.inputVisible = true;
        this.$nextTick(_ => {
          this.$refs.saveTagInput.$refs.input.focus();
        });
      },
      handleInputConfirm() {
        let inputValue = this.inputValue;
        if (inputValue) {
          let status = true
          for (let k in this.keywords) {
            let keyword = this.keywords[k]
            if (keyword.keyword === inputValue) {
              status = false
              break
            }
          }
          if (status) {
            this.keywords.push({
              'keyword': inputValue,
            });
            this.$emit('handleChangeKeywords', this.keywords)
          } else {
            this.$message({
              message: '请勿添加重复关键词',
              type: 'warning'
            });
          }
        }
        this.inputVisible = false;
        this.inputValue = '';
      }
    }
  }
</script>

<style>
  .el-tag + .el-tag {
    margin-left: 10px;
  }
  .button-new-tag {
    margin-left: 10px;
    height: 32px;
    line-height: 30px;
    padding-top: 0;
    padding-bottom: 0;
  }
  .input-new-tag {
    width: 90px;
    margin-left: 10px;
    vertical-align: bottom;
  }
</style>
