import { log } from 'wechaty'
import delay from 'delay'
import { randomNum } from '../utils/index.js'

/**
 * 收到入群邀请
 * @param roomInvitation
 */
export async function onRoomInvite(roomInvitation) {
  try {
    log.info(`on room-invite: ${roomInvitation}`)
    await delay(randomNum(3, 10) * 1000)
    await roomInvitation.accept()
  }
  catch (e) {
    log.error('入群邀请错误')
  }
}

