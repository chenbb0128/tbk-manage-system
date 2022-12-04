import { log } from 'wechaty'

/**
 * 修改群名称
 * @param room
 * @param newTopic
 * @param oldTopic
 * @param changer
 * @param date
 */
export function onRoomTopic(room, newTopic, oldTopic, changer, date = undefined) {
  log.info(`on room-topic, room:${room}, newTopic:${newTopic}, oldTopic:${oldTopic}, changer:${changer}, date:${date}`)
}
