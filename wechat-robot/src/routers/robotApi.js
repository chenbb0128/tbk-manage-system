import delay from 'delay'
import { randomNum, sendMessage } from '../utils/index.js'

export function robotApi(bot, service) {
  service.post('/test', async (req, res) => {
    const searchRoom = await bot.Room.find({ topic: '陈华测试' })
    if (searchRoom)
      searchRoom.say('12312312')

    res.send('调用成功1')
  })

  service.post('/sendRoomMessage', async (req, res) => {
    const query = JSON.parse(req.body.query)
    const msgType = req.body.msg_type
    const message = req.body.msg
    const room = await bot.Room.find(query)
    if (room) {
      const replyGapTime = randomNum(2, 5) * 1000
      await delay(replyGapTime)
      const reply = { msgType, message }
      await sendMessage(room, reply)
    }
    res.status(200).send('调用成功')
  })

  service.post('/sendContactMessage', async (req, res) => {
    const query = JSON.parse(req.body.query)
    const msgType = req.body.msg_type
    const message = req.body.msg
    const contact = await bot.Contact.find(query)
    if (contact) {
      const replyGapTime = randomNum(3, 5) * 1000
      await delay(replyGapTime)
      const reply = { msgType, message }
      await sendMessage(contact, reply)
    }

    res.status(200).send('调用成功')
  })

  service.post('/setUserAlias', async (req, res) => {
    const query = JSON.parse(req.body.query)
    const alias = req.body.alias
    const contact = await bot.Contact.find(query)
    if (contact) {
      await contact.alias(alias)
      const changeAliasTime = randomNum(3, 5) * 1000
      await delay(changeAliasTime)
    }

    res.status(200).send('调用成功')
  })
}
