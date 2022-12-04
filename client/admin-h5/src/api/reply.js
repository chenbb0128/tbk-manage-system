import request from '@/utils/request'

export function getReplies(params) {
  return request({
    url: '/reply',
    method: 'get',
    params
  })
}

export function getReply(replyId) {
  return request({
    url: `/reply/${replyId}`,
    method: 'get'
  })
}

export function updateReply(data) {
  return request({
    url: `/reply/${data.id}`,
    method: 'put',
    data
  })
}

export function createReply(data) {
  return request({
    url: '/reply',
    method: 'post',
    data
  })
}
