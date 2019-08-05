<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/4
 * Time: 23:12
 */

include_once "AopSdk.php";
$aop = new AopClient;
$aop->gatewayUrl = "https://openapi.alipaydev.com/gateway.do";
$aop->appId = "2016101000655055";
$aop->rsaPrivateKey = 'MIIEpAIBAAKCAQEA36/hU+NqzRl0jDz6OzXfhfDOqwJC4GUY0+gX0F9xU9Xv2Hj/QjZG1JxBbBMLkhAMqIgx5c3S+BScWyGm3SbWEIbH2LtpcKe4NKXEjSo5bShTv9WpYpJ9sDNB9z3OWfpL20XamnNjEoL6uBqM4QSsFYf7/0jtjpKLJFcMLrgar8N3sQHQRi/SGdLnBGYvA4UPspK5CW93Mq37CJ0HH6QSToPGvUReTR063D4xCFzWz0qqTuMZXHobNqlfAHdFq7Yn4wlkkK+SruqyUJMLg1tDCLHxq0SO4NZTf9k+6kXuIud2a1CDLO+zY08Z4SAd1k9UzKfIVSsP8QlRJ9cfTGYJSwIDAQABAoIBAQCUFEHNn/pe5mASSne45NQhPiYCbU/KbwK9naLOLbC/OBw8KPWKZpYDP6HLotwBCKDonKizocrssfBEIAXv1zrU2/TGlGKb0lwOdkKk1PQJQC4ZC5/Dgoi0MWqU+xR02k6HTToHDyXh5lWFtQXYHJiy9D+tYyDoRjjYiMumzffUrAvg0Ii4hiYiwmvhW5loz6IYiDk+D781e6BeCSQ/+onwvA/PS+l5SBNMSue+nkZfuV/BKEIFPWjCXKi26MdFrC2DAb3nNSeLzD/Ou0kl/SQ0oWNZhEvTuI+xpQ9R3AxSpS1NlhJQOx70riCzJOWVzLtkJOirXBV4u+Qg5nyfY6exAoGBAPISU3MF5td8ecxhibcYqKyWhk+G99xZ2e1lq/Ya5VbClGaBne6LoM4zXyG5lfi7Rl3TkeFx/3bApuVy345WH2xT0BjOY5xmJZdGS0Z4tqzZwODr6Je5sDevfgkXm0eav0qOGoLjzPhtQyUblKgXTz6x8Mzs61Pai3mMvDzGjtKZAoGBAOyOwLfR6HzOqZdUhXDmLO6BdhCSwMoD9o4noHGxtlYhYwsUGYS2u1b4+jnoSceOLfjm08BvvizqPoZ9aP5hqKzrObEaYaL5IUa2BjnU52eQSYW0eYCJrn/4bdnC514At1heRhfBuAubSEU5uygT2ZPZHAgrM8TpEPDEe5HnIo2DAoGAG+Mclf2yEFUYuwDpmpxOokNdCcBkwY/gWUcDPoDutsYHzp9UEG0pg1fLt9jnfBYnDxwWjEBTy9x53akUNBOb3yDwskrkktn5rqm8dkvlz5fubnr++qu7r06aWHXNv7wGGZKxXy7bKCt+NsIsqAi3amOZeCI7IhflRYV/EglV3tECgYEAuP7aj+bEXfZwgjxDLwuSz+LGpideRZ3bz0gGHWPRKIJrplpNqpAM6fNEHM0gBcOXCDPcHX5Fx3JY+2xQE7/j3XcHYw0ylfUmpNns/IUXgtI/7SQ6cN87bDCoF8hokAcXWzA+uI1ylQEW/6wqRSlg2lLLrUe78J4j9WZzDKMpTmkCgYBHyplVwTktCe62ZQMDCfILJcq/6oAiyN9EmxZX2A20rc4r9mRjiHiNgpoWuaDcWuOjGhjxtXu00NDRZLl6Ysd/NpTDkJmYGNAeNsSI/p1uvdoWvcJEotYkDz1ljGgdhzWeMdsV9nWOHRHJl+ZWagJwbjgEZO7ssHVlH956iVqbpg==';
$aop->format = "json";
$aop->postCharset = "UTF-8";
$aop->signType = "RSA2";
$aop->alipayrsaPublicKey = 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAu0fFgKWgPf1ku6ii8zmYGxwP3d2cYUBU4yBQ9IqARAqx1ObLJ2FJRLNdLJm8B33dHw228c2f67+i/Hxg4tj6GG4PATZ8YLmyJvXAfqkEVIM2RpREz+GPr4FMm9CrX0kGQCt2/MCo8GFxA3XxZGKVmKmR18pX6TH1aFVXkyMGIlxbGudvR02bcJMhJ9s+OHIlytZUavTttpvZJjZ+wTp+u4viNaFpVtbo8A6Gm72izp0AHUy729eFmN51rdNcbxUUGqs7essSyDuT2nkydKypANdTr/vPvFFAyPHp2Rrm0540IAHykyHafXeoZHly/hxGArZ1cfHgvTB1e9JXbsxeVwIDAQAB';


$request = new AlipayTradePagePayRequest();
//$request->setNotifyUrl("http://pc.yssp888.com/test.php");
//$request->setReturnUrl("http://pc.yssp888.com/test.php");


$bizcontent = "{\"out_trade_no\":\"1564986701629\","
        ."\"product_code\":\"FAST_INSTANT_TRADE_PAY\","
        ."\"total_amount\":\"0.01\","
        ."\"subject\":\"Iphone6 16G\","
        ."}";

//echo $bizcontent;
$request->setBizContent($bizcontent);
$result = $aop->pageExecute( $request);
echo $result;