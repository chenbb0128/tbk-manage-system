import BaseAPI from './baseApi.js'

export class SyncUsers extends BaseAPI {
  constructor(userInfoParams) {
    super({
      url: 'syncUsers',
      params: {
        users: userInfoParams,
      },
      method: 'post',
    })
  }
}
