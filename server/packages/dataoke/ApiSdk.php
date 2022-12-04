<?php
/**
 * Api SDK 入口文件
 * 请不要修改这个文件，除非你知道怎样修改以及怎样恢复
 * @author
 */

/**
 * 定义常量开始
 * 在include("ApiSdk.php")之前定义这些常量，不要直接修改本文件，以利于升级覆盖
 */

if (!defined("API_AUTOLOADER_PATH"))
{
	define("API_AUTOLOADER_PATH", dirname(__FILE__));
}

/**
* 注册autoLoader
* 不要删除，除非你自己加载文件。
**/
require(API_AUTOLOADER_PATH."/Autoloader.php");
require(API_AUTOLOADER_PATH."/CheckSign.php");