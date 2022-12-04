import Vue from 'vue'
import Vuex from 'vuex'
import getters from './getters'
import app from './modules/app'
import settings from './modules/settings'
import adminUser from '@/store/modules/adminUser'

Vue.use(Vuex)

const store = new Vuex.Store({
  modules: {
    app,
    settings,
    adminUser
  },
  getters
})

export default store
