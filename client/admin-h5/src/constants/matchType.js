const matchType = {
  EXACT: 0,
  FUZZY: 1,
  getName: (value) => {
    const map = ['精确匹配', '模糊匹配']
    return map[value] || null
  },
  values: () => {
    return [matchType.EXACT, matchType.FUZZY]
  }
}

export default matchType
