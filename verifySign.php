<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/6
 * Time: 5:07
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


$notify = array(
    "gmt_create" =>"2019-08-05 20:41:19",
    "charset" => "UTF-8",
    "gmt_payment" => "2019-08-05 20:41:29",
    "notify_time" => "2019-08-05 20:47:26",
    "subject" => "XXXX",
    "sign" => "SLSXrLTYlCC77EAukggPk6q7b1P4kLGHUZ0VikfdTjENwOdqbw5Kp8RilVKqwtfKPoEdFALgklXfe7qjAP/6ELd+Rvp9aVp9V5nyRzfPrpTdo6Bq8Xhr1NXzp/MLbF3mjODiua0qHxQ7MrHe3r3ESo1+U8VvrLohBsx5XEcUH/KU/R0RgvHojqNXQdNpOCfC71LjLVuAUkVPMZmRlHX+NUCIZcVI30Z053yttB30ufSCSP+couDkMCoseo3kzF9Ac8zgKMjqqyuioVZzcDhI50cCrybVdtrND+rk+ZqTMxqZvr6fRWkHWNO0i6kgdBIH9dYMmrlI/6S4AGNQDH+myw==",
    "buyer_id" => "2088102179135715",
    "invoice_amount" => "10.10",
    "version" => "1.0",
    "notify_id" => "2019080500222204129035711000445330",
    "fund_bill_list" => "[{\"amount\":\"10.10\",\"fundChannel\":\"ALIPAYACCOUNT\"}]",
    "notify_type" => "trade_status_sync",
    "out_trade_no" => "1565008871",
    "total_amount" => "10.10",
    "trade_status" => "TRADE_SUCCESS",
    "trade_no" => "2019080522001435711000046935",
    "auth_app_id" => "2016101000655055",
    "receipt_amount" => "10.10",
    "point_amount" => "0.00",
    "app_id" => "2016101000655055",
    "buyer_pay_amount" => "10.10",
    "sign_type" => "RSA2",
    "seller_id" => "2088102178971635",
);


//var_dump($notify);


$request = new AlipayTradeQueryRequest();
$signVerified = $aop->rsaCheckV1($notify, null, 'RSA2');
if ($signVerified) {
    echo 'ok';
}