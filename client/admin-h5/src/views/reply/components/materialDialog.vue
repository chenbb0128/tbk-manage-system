<template>
  <el-dialog
    title="素材选择"
    :visible.sync="show"
    :destroy-on-close="true"
    @close="$emit('update:visible', false)"
  >
    <div class="filter-container">
      <el-select
        v-model="selectMaterialType"
        placeholder="请选择"
        @change="handleSelectMaterialType"
      >
        <el-option
          v-for="item in materialType.values()"
          :key="item"
          :label="materialType.getName(item)"
          :value="item">
        </el-option>
      </el-select>
    </div>
    <el-table
      v-loading="listLoading"
      :data="list"
      element-loading-text="Loading"
      ref="multipleTable"
      border
      fit
      highlight-current-row
      :row-key="(row) => { return row.id }"
      @select="handleChange"
    >
      <el-table-column
        type="selection"
        :reserve-selection="true"
        width="55">
      </el-table-column>
      <el-table-column align="center" label="ID" width="95">
        <template slot-scope="scope">
          {{ scope.row.id }}
        </template>
      </el-table-column>
      <el-table-column label="内容">
        <template slot-scope="scope">
          {{ scope.row.value }}
        </template>
      </el-table-column>
    </el-table>
    <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.limit" @pagination="handleGetMaterialList" />
    <span slot="footer" class="dialog-footer">
      <el-button @click="$emit('update:visible', false)">取 消</el-button>
      <el-button type="primary" @click="handleSubmit">确 定</el-button>
    </span>
  </el-dialog>
</template>

<script>
import materialType from "@/constants/materialType"
import Pagination from '@/components/Pagination'
import { getTexts, getImages } from "@/api/material";

export default {
  components: { Pagination },
  props: {
    visible: {
      type: Boolean,
      default: false
    },
    materials: {
      type: Array,
      default: []
    },
    handleMaterialSelected: Function
  },
  data() {
    return {
      listLoading: true,
      materialType: materialType,
      selectMaterialType: materialType.TEXT,
      total: 0,
      // list params
      listQuery: {
        page: 1,
        limit: 10,
        sort: '+id',
      },
      list: [],
      show: this.visible,
      currentMaterials: []
    };
  },
  watch:{
    visible: function (newVal) {
      this.show = newVal
      if (newVal) {
        this.initTable()
        this.handleGetMaterialList()
      }
    },
    materials: function (val) {
      console.log('watch material')
      this.currentMaterials = JSON.parse(JSON.stringify(val));
    }
  },
  methods: {
    handleGetMaterialList() {
      this.listLoading = true
      if (this.selectMaterialType === materialType.TEXT) {
        getTexts(this.listQuery).then(response => {
          const data = response.data
          this.list = data.data
          this.total = data.total
          this.listLoading = false
          this.initSelect()
        })
      } else if (this.selectMaterialType === materialType.IMAGE) {
        getImages(this.listQuery).then(response => {
          const data = response.data
          this.list = data.data
          this.total = data.total
          this.listLoading = false
          this.initSelect()
        })
      }
    },
    handleChange(rows, row) {
      let status = false
      rows.forEach(item => {
        if (item.id === row.id) {
          status = true
        }
      })
      const index = this.currentMaterials.findIndex(v => v.id === row.id)
      if (!status) {
        this.currentMaterials.splice(index, 1)
      } else {
        this.currentMaterials.push(row)
      }
    },
    initSelect() {
      let currentMaterialIds = this.currentMaterials.map((item) => {
        return item.id
      })
      let currentSelectIds = []
      this.$refs.multipleTable.selection.forEach(item => {
        currentSelectIds.push(item.id)
      })
      this.list.forEach(item => {
        if (currentMaterialIds.includes(item.id) && !currentSelectIds.includes(item.id) ) {
          this.$refs.multipleTable.toggleRowSelection(item);
        }
      })
    },
    handleSelectMaterialType(type) {
      this.selectMaterialType = type
      this.initTable()
      this.handleGetMaterialList()
    },
    initTable() {
      this.total = 0
      this.listQuery = {
        page: 1,
        limit: 10,
        sort: '+id',
      }
      this.list = []
    },
    handleSubmit() {
      console.log(this.currentMaterials)
      this.$emit('handleMaterialSelected', this.currentMaterials)
    }
  },
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
