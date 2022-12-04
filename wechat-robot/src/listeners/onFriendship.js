import delay from 'delay'
import { log } from 'wechaty'
import * as PUPPET from 'wechaty-puppet'
import { addFriend, randomNum } from '../utils/index.js'

/**
 * 收到好友请求
 * @param friendship
 */
export async function onFriendship(friendship) {
  let logMsg
  try {
    const friend = friendship.contact()
    logMsg = `添加好友${friend.name()}`
    switch (friendship.type()) {
      case PUPPET.types.Friendship.Receive:
        // 添加新的好友，暂时开放自动添加好友功能
        log.info(logMsg)
        // const addFriendGapTime = randomNum(6, 10) * 10000
        // await delay(addFriendGapTime)
        // logMsg = `自动通过验证，因为验证消息是"${friendship.hello()}"`
        // await friendship.accept()
        // await user.addFriend(friend)
        // // 如果要发送MSG，有时需要延迟
        // const replyFriendGapTime = randomNum(1, 5) * 1000
        // await delay(replyFriendGapTime)
        // // 发送消息给添加的人
        // await friendship.contact().say('谢谢你加我，你笑起来真好看～')
        break
      case PUPPET.types.Friendship.Confirm:
        await addFriend(friend)
        await delay(randomNum(6, 10) * 1000)
        await friendship.contact().say('谢谢你加我，你笑起来真好看～')
        log.info(`添加好友成功,${friendship.contact().name()}`)
        break
    }
    log.info(logMsg)
  }
  catch (e) {
    log.error('添加好友失败，原因为：')
    log.error(e.message)
  }
}

