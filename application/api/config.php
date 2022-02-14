<?php

//配置文件
return [
    'exception_handle'        => '\\app\\api\\library\\ExceptionHandle',
    "app_info" =>array(
        "linanpecans"=>array(
            "app_secret"=>'7e520304f5267391',
            "status" => 1,
        )
    ),
    "serviceKey"=>array(
        'c76c12a2ef54ba0cdcb0babefad23983'=>1//鸿程
    ),
    "iptable"=>array(
        '127.0.0.1'=>1,
        '220.184.154.58'=>1
    ),

    //临安市街道和镇配置
    "linanStreet" => array(
        "锦城街道","玲珑街道","青山湖街道","锦南街道","锦北街道","板桥镇","高虹镇","太湖源镇","於潜镇","天目山镇","太阳镇","潜川镇","昌化镇","龙岗镇","河桥镇","湍口镇","清凉峰镇","岛石镇","临安区"
    ),

    //临安市街道和镇的经纬度配置
    "linan_street" => array(
        "锦城街道"=>[119.638544,30.263384],
        "玲珑街道"=>[119.627496,30.178368],
        "青山湖街道"=>[119.771796,30.344114],
        "锦南街道"=>[119.708298,30.21038],
        "锦北街道"=>[119.72152,30.287146],
        "板桥镇"=>[119.751745,30.150548],
        "高虹镇"=>[119.662145,30.358405],
        "太湖源镇"=>[119.563985,30.332175],
        "於潜镇"=>[119.389388,30.223423],
        "天目山镇"=>[119.469005,30.278722],
        "太阳镇"=>[119.300152,30.218948],
        "潜川镇"=>[119.37965,30.05226],
        "昌化镇"=>[119.190435,30.209569],
        "龙岗镇"=>[119.031801,30.222402],
        "河桥镇"=>[119.160356,30.102424],
        "湍口镇"=>[119.148419,30.050754],
        "清凉峰镇"=>[118.967021,30.09749],
        "岛石镇"=>[118.946992,30.276054],
        "临安区"=>[119.638544,30.263384],
    ),

];
