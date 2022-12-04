import { log } from 'wechaty'

export function onLogin(user) {
  log.info(`${user.name()} 我登录了`)
}
