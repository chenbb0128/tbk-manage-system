import { log } from 'wechaty'

/**
 * 微信主动退出
 * @param user
 */
export function onLogout(user) {
  log.info(`${user.name()} 我退出了`)
}
