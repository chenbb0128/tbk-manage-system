import { log } from 'wechaty'
import delay from 'delay'
import { updateContactInfo } from '../utils/index.js'

/**
 *
 */
export async function onReady() {
  await delay(20000)
  log.info('我准备好了')
  log.info(this)
  await updateContactInfo(this)
}

