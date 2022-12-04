import { WechatyBuilder, log } from 'wechaty'
import PuppetPadlocal from 'wechaty-puppet-padlocal'
import express from 'express'
import bodyParser from 'body-parser'
import { onScan } from './listeners/onScan.js'
import { onLogin } from './listeners/onLogin.js'
import { onReady } from './listeners/onReady.js'
import { onMessage } from './listeners/onMessage.js'
import { onRoomInvite } from './listeners/onRoomInvite.js'
import { onRoomJoin } from './listeners/onRoomJoin.js'
import { onRoomLeave } from './listeners/onRoomLeave.js'
import { onRoomTopic } from './listeners/onRoomTopic.js'
import { onFriendship } from './listeners/onFriendship.js'
import { onError } from './listeners/onError.js'
import { onLogout } from './listeners/onLogout.js'
import { config } from './config/config.js'
import { robotApi } from './routers/robotApi.js'

const service = express()
service.use(bodyParser.urlencoded({ extended: false }))
service.use(bodyParser.json())

const puppet = new PuppetPadlocal({
  token: config.token,
})

const bot = WechatyBuilder.build({
  name: 'xxx',
  puppet,
})

bot.on('scan', onScan)
  .on('login', onLogin)
  .on('ready', onReady)
  .on('logout', onLogout)
  .on('message', onMessage)
  .on('room-invite', onRoomInvite)
  .on('room-join', onRoomJoin)
  .on('room-leave', onRoomLeave)
  .on('room-topic', onRoomTopic)
  .on('friendship', onFriendship)
  .on('error', onError)

bot.start()
  .then(() => log.info('开始运行...'))
  .catch(e => log.error('StarterBot', e))

robotApi(bot, service)

service.listen(3001)
