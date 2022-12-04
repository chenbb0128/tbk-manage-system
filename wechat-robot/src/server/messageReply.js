import BaseAPI from './baseApi.js'

export class MessageReply extends BaseAPI {
  constructor(userInfoParams, keyword) {
    const params = {
      user: {
        wx_id: userInfoParams.wxId,
        wx_no: userInfoParams.wxNo || '',
        uid: userInfoParams.alias || '',
      },
      keyword,
    }

    super({
      url: 'messageReply',
      params,
      method: 'post',
      responseConverter: (response) => {
        const data = response.data
        return {
          message: data.message,
          msgType: data.msg_type,
        }
      },
    })
  }
}
