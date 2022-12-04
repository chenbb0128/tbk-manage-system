import request from '@/utils/request'

export function getImages(params) {
  return request({
    url: '/material/images',
    method: 'get',
    params
  })
}

export function getTexts(params) {
  return request({
    url: '/material/texts',
    method: 'get',
    params
  })
}

export function createText(data) {
  return request({
    url: '/material/textStore',
    method: 'post',
    data
  })
}

export function updateText(data) {
  return request({
    url: `/material/textUpdate/${data.id}`,
    method: 'put',
    data
  })
}
