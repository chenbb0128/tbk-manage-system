const getters = {
  sidebar: state => state.app.sidebar,
  device: state => state.app.device,
  token: state => state.adminUser.token,
  avatar: state => state.adminUser.avatar,
  name: state => state.adminUser.name
}
export default getters
