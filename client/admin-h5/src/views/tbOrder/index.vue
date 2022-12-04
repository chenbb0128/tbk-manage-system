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
      <el-table-column label="订单号" width="180" align="center">
        <template slot-scope="scope">
          {{ scope.row.order_no }}
        </template>
      </el-table-column>
      <el-table-column label="子订单号" width="180" align="center">
        <template slot-scope="scope">
          {{ scope.row.sub_order_no }}
        </template>
      </el-table-column>
      <el-table-column label="商品名称" width="200" align="center">
        <template slot-scope="scope">
          {{ scope.row.goods_name }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="订单类别" width="100">
        <template slot-scope="scope">
          {{ scope.row.order_type }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="订单状态" width="100">
        <template slot-scope="scope">
          <el-tag :type="tbOrderStatus.getColor(scope.row.order_status)">
            {{ tbOrderStatus.getName(scope.row.order_status) }}
          </el-tag>
        </template>
      </el-table-column>
      <el-table-column align="center" label="结算状态" width="80">
        <template slot-scope="scope">
          {{ scope.row.settle_account_status ? '已结算' : '未结算' }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="订单创建时间" width="180">
        <template slot-scope="scope">
          {{ scope.row.order_created_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="支付时间" width="180">
        <template slot-scope="scope">
          {{ scope.row.payment_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="淘宝支付时间" width="180">
        <template slot-scope="scope">
          {{ scope.row.tb_payment_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="支付金额" width="80">
        <template slot-scope="scope">
          {{ scope.row.payment_money }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="结算金额" width="80">
        <template slot-scope="scope">
          {{ scope.row.settle_account_money }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="淘宝结算时间" width="180">
        <template slot-scope="scope">
          {{ scope.row.tb_settle_at }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="服务费" width="80">
        <template slot-scope="scope">
          {{ scope.row.service_money }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="服务费" width="80">
        <template slot-scope="scope">
          {{ scope.row.service_money }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="佣金比率" width="80">
        <template slot-scope="scope">
          {{ scope.row.commission_rate }}%
        </template>
      </el-table-column>
      <el-table-column align="center" label="付款预估收入" width="120">
        <template slot-scope="scope">
          {{ scope.row.pre_payment_income }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="结算预估收入" width="120">
        <template slot-scope="scope">
          {{ scope.row.pre_settle_account_income }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="是否维权" width="80">
        <template slot-scope="scope">
          {{ scope.row.rights_protection ? '是' : '否' }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="提现状态" width="80">
        <template slot-scope="scope">
          {{ scope.row.user_order_map ? orderMoneyExtractStatus.getName(scope.row.user_order_map.draw_money_status) : '' }}
        </template>
      </el-table-column>
      <el-table-column align="center" label="提现金额" width="80">
        <template slot-scope="scope">
          {{ scope.row.user_order_map ? scope.row.user_order_map.draw_money : '' }}
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
import { getTbOrders } from '@/api/order'
import Pagination from '@/components/Pagination'
import tbOrderStatus from "@/constants/tbOrderStatus";
import orderMoneyExtractStatus from "@/constants/orderMoneyExtractStatus";

export default {
  components: { Pagination, tbOrderStatus, orderMoneyExtractStatus },
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
      tbOrderStatus: tbOrderStatus,
      orderMoneyExtractStatus: orderMoneyExtractStatus
    }
  },
  created() {
    this.handleGetList()
  },
  methods: {
    handleGetList() {
      this.listLoading = true
      getTbOrders(this.listQuery).then(response => {
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
