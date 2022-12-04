<?php
    //加载
    include "ApiSdk.php";

    $c = new CheckSign;

    //接口地址 必填
    $c->host = 'https://openapi.dataoke.com/xxxxxx';

    //appKey  必填
    $c->appKey = 'xxxxxxxx';

    //appSecret  必填
    $c->appSecret = 'xxxxxxxxxxx';

    //版本号  必填
    $c->version = 'v1.0.2';

    //其他请求参数 根据接口文档需求选填
    $params = array();
    $params['pageSize'] = 100;
    $params['pageId'] = 1;


    //$request = $c->request($parame,'POST'); //接口特别说明需要POST请求才使用
    $request = $c->request($params);
    var_dump($request);
?>