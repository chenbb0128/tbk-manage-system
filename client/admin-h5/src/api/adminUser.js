import request from '@/utils/request'

export function login(data) {
  console.log(data)
  return request({
    url: '/login',
    method: 'post',
    data
  })
}

export function getInfo(token) {
  return request({
    url: '/info',
    method: 'get',
    params: { },
  })
}

export function logout() {
  return request({
    url: '/logout',
    method: 'get'
  })
}

export function getAdminUsers(params) {
  return request({
    url: '/adminUser',
    method: 'get',
    params
  })
}

export function updateAdminUser(data) {
  return request({
    url: `/adminUser/${data.id}`,
    method: 'put',
    data
  })
}

export function createAdminUser(data) {
  return request({
    url: '/adminUser',
    method: 'post',
    data
  })
}
