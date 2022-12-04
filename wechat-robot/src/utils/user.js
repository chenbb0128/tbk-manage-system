import delay from 'delay'
import { log } from 'wechaty'
import { SyncUsers } from '../server/index.js'
import { arrayResolve } from './index.js'

export async function updateContactInfo(bot) {
  log.info('更新用户')
  bot.puppet.syncContact()
  const contactList = await bot.Contact.findAll()
  const notids = ['filehelper', 'fmessage', 'floatbottle', 'medianote', 'weixin']

  const list = []

  for (const item of contactList) {
    const contact = item.payload || {}
    if (contact.friend && contact.type !== bot.Contact.Type.Official && !notids.includes(contact.id)) {
      list.push({
        wx_id: contact.id,
        wx_no: contact.weixin || '',
        name: contact.name || '',
        alias: contact.alias || '',
        gender: contact.gender || 1,
        province: contact.province || '',
        city: contact.city || '',
        avatar: contact.avatar || '',
      })
    }
  }
  await updateFriend(list)
}

async function updateFriend(list, chunkNum = 10) {
  const arr = arrayResolve(list, chunkNum)
  for (const users of arr) {
    new SyncUsers(users)
      .send()
      .then(() => {
        log.info('更新好友成功')
      }).catch((err) => {
        log.info(`更新好友列表失败${err.message}`)
      })
    await delay(10000)
  }
}

/**
 * 添加新的好友
 * @param friend
 * @returns {Promise<void>}
 */
export async function addFriend(friend) {
  const contact = friend.payload
  const data = {
    wx_id: contact.id,
    wx_no: contact.weixin || '',
    name: contact.name || '',
    alias: contact.alias || '',
    gender: contact.gender || 1,
    province: contact.province || '',
    city: contact.city || '',
    avatar: contact.avatar || '',
  }
  await updateFriend([data])
}
