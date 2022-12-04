import request from '@/utils/request'

export function getTbOrders(params) {
  return request({
    url: '/order/tbOrders',
    method: 'get',
    params
  })
}

export function getJdOrders(params) {
  return request({
    url: `/order/jdOrders`,
    method: 'get',
    params
  })
}
