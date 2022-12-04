# 淘宝客管理系统
> 系统包含三端，分别是wechat-robot,server,client

## server
> server端主要是由PHP的laravel编写

- composer install
- 执行 cp .env.example .env
- 执行php artisan migrate
- php artisan jwt:secret
- 填写[大淘客配置](https://www.dataoke.com)，[淘宝联盟配置](https://pub.alimama.com)，[京东联盟配置](https://union.jd.com)

## client
> 当前该目录下只有admin-h5，为机器人后台配置，关键字回复，订单查看等功能，使用vue2编写

- npm install
- 需要在.env文件中填写 server端地址 `VUE_APP_BASE_API`
- npm run dev

![img.png](images/img.png)
![img_1.png](images/img_1.png)

## wechat-robot
> 微信机器人端，主要使用wechaty

- pnpm i
- 填写`config\config.js`下配置
- 填写token,该token为[`puppet-padlocal`](http://pad-local.com/)的ipad协议,可申请7天免费试用
- 执行`pnpm dev`扫码登陆微信
- 微信登陆成功后，可以切换为`pnpm prod`使用pm2后台常驻
- 
![img_1.png](images/img_2.png)

### 如由疑问可联系(base64)vx: Y2hlbmh1YXpoZW5iYW5n



