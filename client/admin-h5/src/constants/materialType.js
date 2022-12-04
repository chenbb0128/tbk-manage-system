const materialType = {
  TEXT: 0,
  IMAGE: 1,
  getName: (value) => {
    const map = ['文本', '图片']
    return map[value] || null
  },
  values: () => {
    return [materialType.TEXT, materialType.IMAGE]
  }
}

export default materialType
