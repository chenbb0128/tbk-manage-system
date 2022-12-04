<template>
  <div class="app-container">
    <el-table
      v-loading="listLoading"
      :data="list"
      element-loading-text="Loading"
      border
      fit
      highlight-current-row
    >
      <el-table-column align="center" label="ID" width="80">
        <template slot-scope="scope">
          {{ scope.row.id }}
        </template>
      </el-table-column>
      <el-table-column label="订单号" width="160" align="center">
        <template slot-scope="scope">
          {{ scope.row.order_no }}
        </template>
      </el-table-column>
      <el-table-column label="父订单号" width="160" align="center">
        <template slot-scope="scope">
          {{ scope.row.sup_order_no }}
        </template>
      </el-table-column>
      <el-table-column label="商品名称" width="220" align="center">
        <template slot-scope="scope">
          {{ scope.row.goods_name }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="订单状态" width="200">
        <template slot-scope="scope">
          <el-tag :type="jdOrderStatus.getColor(scope.row.order_status)">
            {{ jdOrderStatus.getName(scope.row.order_status) }}
          </el-tag>
        </template>
      </el-table-column>
      <el-table-column align="center" label="商品数量" width="80">
        <template slot-scope="scope">
          {{ scope.row.goods_count }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="商品售后中数量" width="130">
        <template slot-scope="scope">
          {{ scope.row.goods_frozen_count }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="商品已退货数量" width="130">
        <template slot-scope="scope">
          {{ scope.row.goods_return_count }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="订单创建时间" width="180">
        <template slot-scope="scope">
          {{ scope.row.order_created_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="订单完成时间" width="180">
        <template slot-scope="scope">
          {{ scope.row.order_finish_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="订单更新时间" width="180">
        <template slot-scope="scope">
          {{ scope.row.order_update_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="付款金额" width="80">
        <template slot-scope="scope">
          {{ scope.row.payment_money }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="佣金比率" width="80">
        <template slot-scope="scope">
          {{ scope.row.commission_rate }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="分成比率" width="80">
        <template slot-scope="scope">
          {{ scope.row.subside_rate }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="补贴比率" width="80">
        <template slot-scope="scope">
          {{ scope.row.subsidy_rate }}%
        </template>
      </el-table-column>
      <el-table-column align="center" label="最终分佣比率" width="120">
        <template slot-scope="scope">
          {{ scope.row.final_rate }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="预估计佣金额" width="120">
        <template slot-scope="scope">
          {{ scope.row.estimate_cos_price }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="预估佣金" width="80">
        <template slot-scope="scope">
          {{ scope.row.estimate_fee }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="实际计佣金额" width="120">
        <template slot-scope="scope">
          {{ scope.row.actual_cos_price }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="实际佣金" width="80">
        <template slot-scope="scope">
          {{ scope.row.actual_fee }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="京东结算日期" width="180">
        <template slot-scope="scope">
          {{ scope.row.jd_settle_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="操作" width="180" fixed="right">
        <template slot-scope="scope">
          <el-button
            type="primary"
            size="small"
          >
            查看
          </el-button>
        </template>
      </el-table-column>
    </el-table>
    <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.limit" @pagination="handleGetList" />
  </div>
</template>

<script>
import { getJdOrders } from '@/api/order'
import Pagination from '@/components/Pagination'
import jdOrderStatus from "@/constants/jdOrderStatus";

export default {
  components: { Pagination },
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
        sort: '+id'
      },
      jdOrderStatus: jdOrderStatus
    }
  },
  created() {
    this.handleGetList()
  },
  methods: {
    handleGetList() {
      this.listLoading = true
      getJdOrders(this.listQuery).then(response => {
        const data = response.data
        this.list = data.data
        this.total = data.total
        this.listLoading = false
      })
    },
    handleSizeChange() {

    },
    handleCurrentChange() {

    },

  }
}
</script>
