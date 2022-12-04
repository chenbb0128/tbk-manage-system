<?php
/**
 * TOP SDK 入口文件
 * 请不要修改这个文件，除非你知道怎样修改以及怎样恢复
 * @author xuteng.xt
 */

/**
 * 定义常量开始
 * 在include("JdSdk.php")之前定义这些常量，不要直接修改本文件，以利于升级覆盖
 */
if (!defined('JD_SDK_DIR')) {
    define('JD_SDK_DIR', dirname(__FILE__));
}

if (!defined("JD_SDK_REQUEST_DIR"))
{
	define("JD_SDK_REQUEST_DIR", JD_SDK_DIR . '/request/');
}

/**
* 不要删除，除非你自己加载文件。
**/
require("Autoloader.php");