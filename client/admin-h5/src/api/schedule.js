import request from '@/utils/request'

export function getSchedules(params) {
  return request({
    url: '/schedule',
    method: 'get',
    params
  })
}
