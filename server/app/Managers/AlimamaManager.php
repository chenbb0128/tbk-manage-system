<?php


namespace App\Managers;

use TopClient;

class AlimamaManager
{
    private static $instance;
    private $client;

    private function __construct()
    {
        /**
         * SDK工作目录
         * 存放日志，TOP缓存数据
         */
        if (!defined("TOP_SDK_WORK_DIR"))
        {
            define("TOP_SDK_WORK_DIR", "/tmp/");
        }

        /**
         * 是否处于开发模式
         * 在你自己电脑上开发程序的时候千万不要设为false，以免缓存造成你的代码修改了不生效
         * 部署到生产环境正式运营后，如果性能压力大，可以把此常量设定为false，能提高运行速度（对应的代价就是你下次升级程序时要清一下缓存）
         */
        if (!defined("TOP_SDK_DEV_MODE"))
        {
            define("TOP_SDK_DEV_MODE", true);
        }

        if (!defined("TOP_AUTOLOADER_PATH"))
        {
            define("TOP_AUTOLOADER_PATH", dirname(__FILE__));
        }

        $client = new TopClient();
        $client->appkey = config('alimama.app_key');
        $client->secretKey = config('alimama.secret_key');
        $client->format = config('alimama.format');
        $this->client = $client;
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * 推荐类目商品
     * @param array $params
     * @return bool|\SimpleXMLElement
     */
    public function tbkDgOptimusMaterial(array $params)
    {
        $client = $this->client;
        $standard = ['adzone_id', 'page_size', 'page_no', 'material_id'];
        $request = new \TbkDgOptimusMaterialRequest();
        $request = self::options($request, $params, $standard);
        $response = $client->execute($request);
        $result = empty($response->result_list->map_data) ? false : $response->result_list->map_data;
        return $result;
    }

    /**
     * 获取商品详细信息
     * @param array $params
     * @return bool|\SimpleXMLElement
     */
    public function tbkItemInfoGet(array $params)
    {
        $client = $this->client;
        $standard = ['platform', 'num_iids'];
        $request = new \TbkItemInfoGetRequest();
        $request = self::options($request, $params, $standard);
        $response = $client->execute($request);

        if (empty($response->results->n_tbk_item)) {
            return false;
        }
        return $response->results->n_tbk_item[0];
    }

    /**
     * 商品关键词搜索
     * @param array $params
     * @return bool|\SimpleXMLElement
     */
    public function tbkDgMaterialOptional(array $params)
    {
        $client = $this->client;
        $standard = [
            'start_dsr',
            'page_size',
            'page_no',
            'platform',
            'end_tk_rate',
            'start_tk_rate',
            'end_price',
            'start_price',
            'is_overseas',
            'is_tmall',
            'sort',
            'itemloc',
            'cat',
            'q',
            'adzone_id',
            'has_coupon',
            'ip',
            'include_rfd_rate',
            'include_good_rate',
            'include_pay_rate_30',
            'need_prepay',
            'need_free_shipment',
            'npx_level'
        ];
        $request = new \TbkDgMaterialOptionalRequest();
        $request = self::options($request, $params, $standard);
        $response = $client->execute($request);
        if (empty($response->result_list)) {
            return false;
        }
        return $response->result_list->map_data;
    }

    /**
     * 淘口令创建
     * @param array $params
     * @return bool|\SimpleXMLElement
     */
    public function tbkTpwdCreate(array $params)
    {
        $client = $this->client;
        $standard = ['user_id', 'text', 'url', 'logo', 'ext'];
        $request = new \TbkTpwdCreateRequest();
        $request = self::options($request, $params, $standard);
        $response = $client->execute($request);
        if (empty($response->data)) {
            return false;
        }
        return $response->data->model;
    }

    /**
     * 淘宝客商品关联推荐查询 / taobao.tbk.item.recommend.get
     */
    public function tbkItemRecommendGet(array $params)
    {
        $client = $this->client;
        $standard = [
            //  需返回的字段列表 / String / true
            'fields',
            // 商品Id / Number / true
            'num_iid',
            // 返回数量，默认20，最大值40 / Number / false
            'count',
            // 链接形式：1：PC，2：无线，默认：１ / Number / false
            'platform'
        ];
        $request = new \TbkItemRecommendGetRequest();
        $request = self::options($request, $params, $standard);
        $response = $client->execute($request);
        if (empty($response->request_id)) {
            return false;
        }
        return $response->request_id;

    }

    /**
     * 设置类的多个对象，格式为$obj->setOption()
     * $obj 传入的对象
     * $datas 设置对象属相的值
     * $standard 所有可以设置的对象属性字符串
     */
    private static function options($obj, Array $datas, Array $standard)
    {
        foreach ($datas as $key => $value) {
            if (in_array($key, $standard) && !empty($value) && $key !== 0) {
                $setstr = self::setKey($key);
                $obj->$setstr($value);
            }
        }

        return $obj;
    }

    /**
     * 设置类的多个对象，格式为$obj->page_size = $page
     * $obj 传入的对象
     * $datas 设置对象属相的值
     * $standard 所有可以设置的对象属性字符串
     */
    private static function toOptions($obj, Array $datas, Array $standard)
    {
        foreach ($datas as $key => $value) {
            if (in_array($key, $standard) && !empty($value) && $key !== 0) {
                $obj->$key = $value;
            }
        }

        return $obj;
    }

    /**
     * 将字符串组合成骆驼形式的字符串，例如：end_tk_rate 变为 setEndTkRate
     */
    private static function setKey($key)
    {
        $str = '';
        $keyArr = explode('_', $key);
        foreach ($keyArr as $v) {
            $str .= ucfirst($v);
        }

        return 'set'.$str;
    }

    private function __clone()
    {
        // disable cloning
    }

    private function __wakeup()
    {
        // disable unserialize
    }
}
