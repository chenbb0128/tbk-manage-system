const adminUserStatus = {
  ENABLED: 0,
  DISABLED: 1,
  getName: (value) => {
    const map = ['启用', '禁用']
    return map[value] || null
  },
  getButton: (value) => {
    const map = ['success', 'danger']
    return map[value] || null
  },
  values: () => {
    return [adminUserStatus.ENABLED, adminUserStatus.DISABLED]
  }
}

export default adminUserStatus
