import { FileBox } from 'file-box'
import { log } from 'wechaty'
import { MessageReply } from '../server/messageReply.js'
import { MessageType } from '../constants/message.js'

export async function getTextReply(contact, msg) {
  let content = ''
  if (msg.room())
    content = msg.text().replace(/@[^,，：:\s@]+/g, '').trim()

  else
    content = msg.text().trim()

  return await reply(content, contact)
}

async function reply(keyword, contact) {
  const data = contact.payload
  if (!data)
    return

  const user = {
    wxId: data.id,
    wxNo: data.weixin || '',
    alias: data.alias || '',
  }

  return await new MessageReply(user, keyword)
    .send()
    .then((messageReplyInfo) => {
      return messageReplyInfo
    }).catch(() => {
      return {
        message: '我发生错误了，请原谅我，我马上让小主人修理我一下',
        msgType: MessageType.TEXT,
      }
    })
}

export async function sendMessage(msg, reply) {
  if (!msg)
    return

  try {
    switch (parseInt(reply.msgType)) {
      case MessageType.TEXT:
        await msg.say(reply.message)
        break
      case MessageType.IMAGE: {
        const fileBox = await FileBox.fromUrl(reply.message)
        await msg.say(fileBox)
        break
      }
      default:
        await msg.say('暂不支持除文字链接口令外的其他消息回复')
        break
    }
  }
  catch (e) {
    log.info('消息模块发送错误')
  }
}
