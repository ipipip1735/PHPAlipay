<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/4
 * Time: 23:12
 */

include_once "AopSdk.php";
include_once "config.php";

$aop = new AopClient;
$aop->gatewayUrl = $config['gatewayUrl'];
$aop->appId = $config['appId'];
$aop->rsaPrivateKey = $config['rsaPrivateKey'];
$aop->format = $config['format'];
$aop->postCharset = $config['postCharset'];
$aop->signType = $config['signType'];
$aop->alipayrsaPublicKey = $config['alipayrsaPublicKey'];


$request = new AlipayTradeQueryRequest();

$request = new AlipayTradePagePayRequest();
$request->setNotifyUrl($config['notify_url']);
//$request->setReturnUrl($config['return_url']);


$bizcontent = array(
    'out_trade_no' => time(),
    "product_code" => 'FAST_INSTANT_TRADE_PAY',
    'subject' => 'XXXX',
    'total_amount' => 10.10);
$bizcontent = json_encode($bizcontent);
//echo $bizcontent;


$request->setBizContent($bizcontent);
$result = $aop->pageExecute($request);
echo $result;