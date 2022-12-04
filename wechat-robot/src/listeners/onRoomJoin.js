import { log } from 'wechaty'
import delay from 'delay'
import { randomNum } from '../utils/index.js'

/**
 * 所在群群员添加监听
 * @param room
 * @param inviteeList
 * @param inviter
 * @param date
 */
export async function onRoomJoin(room, inviteeList, inviter, date = undefined) {
  log.info(`on room-join, room:${room}, inviteeList:${inviteeList}, inviter:${inviter}, date:${date}`)
  // try {
  //   for (const item of inviteeList) {
  //     await delay(randomNum(3, 10) * 1000)
  //     await room.say('欢迎加入，请准守群规，做一个可爱的群友', item)
  //   }
  // }
  // catch (e) {
  //   log.error('群进人错误啦～～～')
  // }
}
