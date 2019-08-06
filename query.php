<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/6
 * Time: 8:06
 */

include_once "AopSdk.php";
include_once "config.php";

$aop = new AopClient;
$aop->gatewayUrl =$config['gatewayUrl'];
$aop->appId =$config['appId'];
$aop->rsaPrivateKey =$config['rsaPrivateKey'];
$aop->format =$config['format'];
$aop->postCharset =$config['postCharset'];
$aop->signType =$config['signType'];
$aop->alipayrsaPublicKey =$config['alipayrsaPublicKey'];


$request = new AlipayTradeQueryRequest();

$request = new AlipayTradeQueryRequest();
$bizcontent = <<<EOB
{
    "out_trade_no":"1565008757",
    "trade_no":"2019080522001435711000044937"
}
EOB;
$request->setBizContent($bizcontent);

$result = $aop->execute ( $request);
var_dump($result);

