import { ScanStatus, log } from 'wechaty'
import QrTerminal from 'qrcode-terminal'

/**
 * 扫码登录操作
 * @param qrcode
 * @param status
 */
export function onScan(qrcode, status) {
  if (status === ScanStatus.Waiting && qrcode) {
    QrTerminal.generate(qrcode, { small: true })
    const qrCodeImageUrl = ['https://wechaty.js.org/qrcode/', encodeURIComponent(qrcode)].join('')
    log.info('StarterBot', 'onScan: %s(%s) - %s', ScanStatus[status], status, qrCodeImageUrl)
  }
  else {
    log.info('StarterBot', 'onScan: %s(%s)', ScanStatus[status], status)
  }
}

