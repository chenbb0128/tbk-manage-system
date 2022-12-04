import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

/* Layout */
import Layout from '@/layout'

/**
 * Note: sub-menu only appear when route children.length >= 1
 * Detail see: https://panjiachen.github.io/vue-element-admin-site/guide/essentials/router-and-nav.html
 *
 * hidden: true                   if set true, item will not show in the sidebar(default is false)
 * alwaysShow: true               if set true, will always show the root menu
 *                                if not set alwaysShow, when item has more than one children route,
 *                                it will becomes nested mode, otherwise not show the root menu
 * redirect: noRedirect           if set noRedirect will no redirect in the breadcrumb
 * name:'router-name'             the name is used by <keep-alive> (must set!!!)
 * meta : {
    roles: ['admin','editor']    control the page roles (you can set multiple roles)
    title: 'title'               the name show in sidebar and breadcrumb (recommend set)
    icon: 'svg-name'/'el-icon-x' the icon show in the sidebar
    breadcrumb: false            if set false, the item will hidden in breadcrumb(default is true)
    activeMenu: '/example/list'  if set path, the sidebar will highlight the path you set
  }
 */

/**
 * constantRoutes
 * a base page that does not have permission requirements
 * all roles can be accessed
 */
export const constantRoutes = [
  {
    path: '/login',
    component: () => import('@/views/login/index'),
    hidden: true
  },

  {
    path: '/404',
    component: () => import('@/views/404'),
    hidden: true
  },

  {
    path: '/',
    component: Layout,
    redirect: '/dashboard',
    children: [{
      path: 'dashboard',
      name: 'Dashboard',
      component: () => import('@/views/dashboard/index'),
      meta: { title: 'Dashboard', icon: 'dashboard' }
    }]
  }, {
    path: '/system',
    component: Layout,
    redirect: '/system/adminUser',
    name: 'System',
    meta: { title: '系统管理', icon: 'el-icon-s-help' },
    children: [
      {
        path: 'adminUser',
        name: 'AdminUser',
        component: () => import('@/views/adminUser/index'),
        meta: { title: '管理员管理', icon: 'table' }
      }
    ]
  }, {
    path: '/robot',
    component: Layout,
    redirect: '/robot/reply',
    name: 'Reply',
    meta: { title: '机器人管理', icon: 'el-icon-s-help' },
    children: [
      {
        path: 'reply',
        name: 'Reply',
        component: () => import('@/views/reply/index'),
        meta: { title: '关键字回复', icon: 'table' }
      }, {
        path: 'schedule',
        name: 'Schedule',
        component: () => import('@/views/schedule/index'),
        meta: { title: '定时任务', icon: 'table' }
      }, {
        path: 'reply/editReply/:id(\\d+)',
        component: () => import('@/views/reply/editReply'),
        name: 'EditReply',
        meta: { title: '编辑关键字回复', noCache: true, activeMenu: '/robot/reply' },
        hidden: true
      }, {
        path: 'reply/addReply',
        component: () => import('@/views/reply/editReply'),
        name: 'EditReply',
        meta: { title: '添加关键字回复', noCache: true, activeMenu: '/robot/reply' },
        hidden: true
      },
    ]
  }, {
    path: '/material',
    component: Layout,
    redirect: '/material/text',
    name: 'Text',
    meta: { title: '素材库', icon: 'el-icon-s-help' },
    children: [
      {
        path: 'text',
        name: 'Text',
        component: () => import('@/views/material/text'),
        meta: { title: '文本', icon: 'table' }
      }, {
        path: 'image',
        name: 'Image',
        component: () => import('@/views/material/image'),
        meta: { title: '图片', icon: 'table' }
      }
    ]
  }, {
    path: '/order',
    component: Layout,
    redirect: '/order/tbOrder',
    name: 'Order',
    meta: { title: '订单管理', icon: 'el-icon-s-help' },
    children: [
      {
        path: 'tbOrder',
        name: 'TbOrder',
        component: () => import('@/views/tbOrder/index'),
        meta: { title: '淘宝订单管理', icon: 'table' }
      }, {
        path: 'jdOrder',
        name: 'JdOrder',
        component: () => import('@/views/jdOrder/index'),
        meta: { title: '京东订单管理', icon: 'table' }
      }
    ]
  }, {
    path: '*',
    redirect: '/404',
    hidden: true
  }
]

const createRouter = () => new Router({
  // mode: 'history', // require service support
  scrollBehavior: () => ({ y: 0 }),
  routes: constantRoutes
})

const router = createRouter()

// Detail see: https://github.com/vuejs/vue-router/issues/1234#issuecomment-357941465
export function resetRouter() {
  const newRouter = createRouter()
  router.matcher = newRouter.matcher // reset router
}

export default router
