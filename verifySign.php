<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/6
 * Time: 5:07
 */


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

include_once "AopSdk.php";
$aop = new AopClient;
$aop->gatewayUrl = "https://openapi.alipaydev.com/gateway.do";
$aop->appId = "2016101000655055";
$aop->rsaPrivateKey = 'MIIEvQIBADANBgkqhkiG9w0BAQEFAASCBKcwggSjAgEAAoIBAQCxN1yZ6J8nu0nkuenXzRLqhSwAIQFL3wSuhziUs0H848yXC+dJDASOp0psVCagCFZE2deVhgROrYCbk2H4/iTqaBcyDJWgqpNgH54rc6WNxP09lhF/p2JtNqnZm/9offKq7WFwFO05rH8HAtsLa0HFZYcEoVFYu0rPl+5FGtJn+MaCOkG7x8G05Z9px3OsPfxmhPx0YnXba3QsRHoiuemHhD8k12AdPpoG/zV7XjtsAIPdvtJRJSK1IZABIXHn+2YqHsxdmbbJkm4z0m1IrbRDtX3vEpo5dn/WauZLkndy6Xybxdv5Pu3JrJMYdr87zJRsB+6TmXPjvUyUipykmVrXAgMBAAECggEAQCzxPtcr06KSVt8wnLKqF/2T+pP5OTWRJ3bWeZsU2XTRIR3xatWMTPCuFd6/ghKi0xokZQR8SNWyDiToRNgcHDsHs1s1UFKVPikVCV0+5cEhiAzxV04RacVy6tgAPSHnIBkIwSMC6XDbK3nQQylbTxW+OGIG6GAi7lxxr9rPuVCWbiQADeEKJ9fXHU1SXcoQ++JRxSGDoP2nye3QgoHr0PTvewQGR4yggpF01XcneiHxCw9nmxA7WSbWVfFXlsiLADjDwkf9oZvo9qTu7sRiL4kdE12kIl4cc1VRTS/9cBxUrfXtFHCu8t2iyqf4jGJyuuC+DJrZQHOiVxExgD8B+QKBgQDgo42qXRke3mt73dGsJalNLxpv0/5XDTXs0G0mLBXhZgsIic5B8I/DnY57D9KDQahTJwpmjg/D5JzmQpV9eb8e9j8IM0BQQMZd0CY8TQkIgBKB0M4FuqsMNcb7+qXYXXwuobvf0trJIFcaj6RknmWBJyEOFqdL3ef5kp6YiRRkLQKBgQDJ9PRtq3424BPI3JXxhFqk0ZN0wvWUxhrxJel87X/yZZ2Uy5o/0qBGYBl1sDP7M5LIFT69849+Gj47TU/Nd8I38Sk8BsGDryuVpxRiY5+RwifZMlWKxsK/sLcFvbywg4zxtFQ6qmEhKSDFV9pP9CuuwWWAnMdKqpRN8OUS939JkwKBgHvAnmKkNxqSXZQ3dzLm7IXg1SeWGh/K31I+4GKPFt69YIarpD0fUZPqUHvrE4XLvfdRIqGs0XKRlv4i4EfnsipUbhUOZvfPN3inGulNZxSPuaJabaUqWOC5H43hX0v69FacMuvzNSRn9JRlXaMwv6qO697fC/r3nLwY0dYmbl1hAoGBALvMCtdIl29T41HuvYf+uYN2VxZGjLMxnLANvxcqisXO9D//LIqYw+1tQ3+KwGuhQ6bHCrb8G7z5jlD6zXCVIod+vAdTiPN5GqBo462yUhnqX7+67IzF0ycJnse57hJ94byJIaID+ZoqcozP6vRaa5xvvoFgSHoIMSxhC8MdXsH9AoGAMH5ty8kpvYNLL+CLa+zBFVc/kmUGxMFcIv44svJHW3IqQNdutLHHC7Io8G/rImk8EFunkrDwYTPahZupt04uXYs3d8P3f2xGdERho6b6eb3vkyZvyFQDefhGXzdt2NVf0TQ1g65ACYwHAaBqGCQ0aGcy6wRXOOUxa4dhfTz12h4=';
$aop->format = "json";
$aop->postCharset = "UTF-8";
$aop->signType = "RSA2";
$aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAu0fFgKWgPf1ku6ii8zmYGxwP3d2cYUBU4yBQ9IqARAqx1ObLJ2FJRLNdLJm8B33dHw228c2f67+i/Hxg4tj6GG4PATZ8YLmyJvXAfqkEVIM2RpREz+GPr4FMm9CrX0kGQCt2/MCo8GFxA3XxZGKVmKmR18pX6TH1aFVXkyMGIlxbGudvR02bcJMhJ9s+OHIlytZUavTttpvZJjZ+wTp+u4viNaFpVtbo8A6Gm72izp0AHUy729eFmN51rdNcbxUUGqs7essSyDuT2nkydKypANdTr/vPvFFAyPHp2Rrm0540IAHykyHafXeoZHly/hxGArZ1cfHgvTB1e9JXbsxeVwIDAQAB';

$signVerified = $aop->rsaCheckV1($notify, null, $notify['sign_type']);
if ($signVerified) {
    echo 'ok';
}