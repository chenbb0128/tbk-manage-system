import { log } from 'wechaty'
import * as PUPPET from 'wechaty-puppet'
import delay from 'delay'
import { getTextReply, randomNum, sendMessage } from '../utils/index.js'
import { MessageType } from '../constants/message.js'

export async function onMessage(message) {
  try {
    // 屏蔽自己的消息
    if (message.self())
      return

    const room = message.room()
    if (room) {
      // 回复群消息
      await dispatchRoomFilterByMsg(message, room)
    }
    else {
      // 回复私聊
      await dispatchFriendFilterByMsg(message)
    }
  }
  catch (e) {
    log.info('消息模块错误')
  }
}

async function dispatchRoomFilterByMsg(msg, room) {
  const bot = msg.wechaty
  const roomName = await room.topic()
  const userSelfName = bot.currentUser.name()
  const content = msg.text()
  const mentionSelf = content.includes(`@${userSelfName}`)

  if (!mentionSelf)
    return

  const contact = msg.talker()
  const contactName = contact.name()
  log.info(`群名: ${roomName} 发消息人: ${contactName} 内容: ${content}`)
  await getMessagePayload(msg, contact)
}

async function dispatchFriendFilterByMsg(msg) {
  const contact = msg.talker()
  const bot = msg.wechaty

  if (contact.type() === bot.Contact.Type.Official || contact.id === 'weixin')
    return

  log.info(`发消息人: ${contact.name()} 内容: ${msg.text()}`)
  await getMessagePayload(msg, contact)
}

async function getMessagePayload(message, contact) {
  let reply = {
    message: '',
    msgType: MessageType.UNKNOWN,
  }

  switch (message.type()) {
    case PUPPET.types.Message.Text: {
      reply = await getTextReply(contact, message)
      if (reply && reply.message.trim()) {
        await delay(randomNum(1, 3) * 1000)
        await sendMessage(message, reply)
      }

      break
    }

    case PUPPET.types.Message.Attachment:
    case PUPPET.types.Message.Audio: {
      const attachFile = await message.toFileBox()
      const dataBuffer = await attachFile.toBuffer()
      log.info(`文件类型: ${dataBuffer.length}`)
      await sendMessage(message, reply)
      break
    }

    case PUPPET.types.Message.Video: {
      const videoFile = await message.toFileBox()
      const videoData = await videoFile.toBuffer()
      log.info(`视频类型: ${videoData.length}`)
      await sendMessage(message, reply)
      break
    }

    case PUPPET.types.Message.Emoticon: {
      const emotionFile = await message.toFileBox()
      const emotionJSON = emotionFile.toJSON()
      log.info(`get message emotion json: ${JSON.stringify(emotionJSON)}`)
      const emotionBuffer = await emotionFile.toBuffer()
      log.info(`get message emotion: ${emotionBuffer.length}`)
      await sendMessage(message, reply)
      break
    }

    case PUPPET.types.Message.Image: {
      const messageImage = await message.toImage()
      const thumbImage = await messageImage.thumbnail()
      const thumbImageData = await thumbImage.toBuffer()
      log.info(`get message image, thumb: ${thumbImageData.length}`)
      const hdImage = await messageImage.hd()
      const hdImageData = await hdImage.toBuffer()
      log.info(`get message image, hd: ${hdImageData.length}`)
      const artworkImage = await messageImage.artwork()
      const artworkImageData = await artworkImage.toBuffer()
      log.info(`get message image, artwork: ${artworkImageData.length}`)
      await sendMessage(message, reply)
      break
    }

    case PUPPET.types.Message.Url: {
      const urlLink = await message.toUrlLink()
      log.info(`get message url: ${JSON.stringify(urlLink)}`)
      const urlThumbImage = await message.toFileBox()
      const urlThumbImageData = await urlThumbImage.toBuffer()
      log.info(`get message url thumb: ${urlThumbImageData.length}`)
      await sendMessage(message, reply)
      break
    }

    case PUPPET.types.Message.MiniProgram: {
      const miniProgram = await message.toMiniProgram()
      log.info(`MiniProgramPayload: ${JSON.stringify(miniProgram)}`)
      await sendMessage(message, reply)
      break
    }
  }
}
