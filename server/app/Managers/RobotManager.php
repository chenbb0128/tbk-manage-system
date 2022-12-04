<?php


namespace App\Managers;


use GuzzleHttp\Client;

/**
 * 机器人管理
 * 主要用于与通信微信机器人
 * Class RobotManager
 * @package App\Managers
 */
class RobotManager
{
    private static $instance;
    private $client;
    private $robotHost;

    private function __construct()
    {
        $this->client = new Client();
        $this->robotHost = config('robot.host');
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * 发送群消息
     * @param array $query
     * @param $msg
     * @param $msgType
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendRoomMessage(array $query, $msg, $msgType)
    {
        $roomMessageUrl = $this->robotHost . '/sendRoomMessage';
        $response = $this->client->request('POST', $roomMessageUrl, [
            'form_params' => [
                'query' => json_encode($query),
                'msg' => $msg,
                'msg_type' => $msgType
            ]
        ]);
    }

    /**
     * 发送联系人消息
     * @param array $query
     * @param $msg
     * @param $msgType
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function sendContactMessage(array $query, $msg, $msgType)
    {
        $contactMessageUrl = $this->robotHost . '/sendContactMessage';
        $response = $this->client->request('POST', $contactMessageUrl, [
            'form_params' => [
                'query' => json_encode($query),
                'msg' => $msg,
                'msg_type' => $msgType
            ]
        ]);
    }

    /**
     * 设置用户别名
     * @param array $query
     * @param $alias
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function setUserAlias(array $query, $alias)
    {
        $setUserAliasUrl = $this->robotHost . '/setUserAlias';
        $response = $this->client->request('POST', $setUserAliasUrl, [
            'form_params' => [
                'query' => json_encode($query),
                'alias' => $alias,
            ]
        ]);
    }
}
