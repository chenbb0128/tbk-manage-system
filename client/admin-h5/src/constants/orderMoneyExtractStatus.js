const orderMoneyExtractStatus = {
  FAIL_EXTRACT: -1,
  NOT_EXTRACT: 0,
  EXTRACT: 2,
  EXTRACTING: 2,
  EXTRACTED: 3,
  getName: (value)=> {
    const map = {
      [orderMoneyExtractStatus.FAIL_EXTRACT]: '失败订单，关闭提取',
      [orderMoneyExtractStatus.NOT_EXTRACT]: '不可提取',
      [orderMoneyExtractStatus.EXTRACT]: '未提取',
      [orderMoneyExtractStatus.EXTRACTING]: '提取中',
      [orderMoneyExtractStatus.EXTRACTED]: '已提取',
    }
    return map[value] || null
  },
  values: ()=> {
    return [
      orderMoneyExtractStatus.FAIL_EXTRACT,
      orderMoneyExtractStatus.NOT_EXTRACT,
      orderMoneyExtractStatus.EXTRACT,
      orderMoneyExtractStatus.EXTRACTING,
      orderMoneyExtractStatus.EXTRACTED
    ];
  }
}

export default orderMoneyExtractStatus
