const tbOrderStatus = {
  PAYMENT: 12,
  CLOSE: 13,
  RECEIPT: 14,
  SETTLEMENT: 3,
  getName: (value)=> {
    const map = {
      [tbOrderStatus.PAYMENT]: '付款',
      [tbOrderStatus.CLOSE]: '关闭',
      [tbOrderStatus.RECEIPT]: '确认收货',
      [tbOrderStatus.SETTLEMENT]: '结算成功',
    }
    return map[value] || null
  },
  getColor: (value) => {
    const map = {
      [tbOrderStatus.PAYMENT]: 'warning',
      [tbOrderStatus.CLOSE]: 'danger',
      [tbOrderStatus.RECEIPT]: 'primary',
      [tbOrderStatus.SETTLEMENT]: 'success',
    }
    return map[value] || 'primary'
  },
  values: ()=> {
    return [
      tbOrderStatus.PAYMENT,
      tbOrderStatus.CLOSE,
      tbOrderStatus.RECEIPT,
      tbOrderStatus.SETTLEMENT
    ];
  }
}

export default tbOrderStatus
