import { stringify } from 'qs'
import { axiosInstance } from '../utils/index.js'

export default class BaseAPI {
  constructor({
    url,
    responseConverter,
    params = {},
    method = 'get',
  }) {
    this.url = url
    this.params = params
    this.method = method
    this.responseConverter = responseConverter
  }

  send() {
    const options = {
      method: this.method,
      url: `api/v1/${this.url}`,
    }

    if (this.method.toUpperCase() === 'GET')
      options.params = this.params
    else
      options.data = stringify(formatParams(this.params))

    return new Promise((resolve, reject) => {
      axiosInstance.request(options).then((response) => {
        return resolve(
          this.responseConverter ? this.responseConverter(response.data) : response.data,
        )
      }).catch((response) => {
        // eslint-disable-next-line prefer-promise-reject-errors
        return reject({
          code: response.code,
          message: response.message || 'Something goes wrong',
        })
      })
    })
  }
}

function formatParams(values) {
  const params = {}
  Object.keys(values).forEach((key) => {
    if (typeof values[key] === 'object')
      params[key] = JSON.stringify(values[key])
    else
      params[key] = values[key]
  })
  return params
}
