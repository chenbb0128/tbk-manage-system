import { log } from 'wechaty'
import delay from 'delay'
import { randomNum } from '../utils/index.js'

/**
 * 退群操作监听
 * @param room
 * @param leaverList
 * @param remover
 * @param date
 */
export async function onRoomLeave(room, leaverList, remover = undefined, date = undefined) {
  log.info(`on room-leave, room:${room}, leaverList:${leaverList}, remover:${remover}, date:${date}`)
  // try {
  //   for (const item of leaverList) {
  //     await delay(randomNum(3, 10) * 1000)
  //     await room.say(`一个快乐的群友【${item.name()}】离开了我们，欢送～，奏乐 Di Di Da Di~`)
  //   }
  // }
  // catch (e) {
  //   log.error('群进人错误啦～～～')
  // }
}
