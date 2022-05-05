<?php

return array(

    'restapi' => [
        "v1" => [
            "GET" => [
                "routes" => [
                    "getProduct" => [
                        "url" => "getProduct",
                        "method" => "get",
                        "resource" => "product/get",
                        "component" => "Product"
                    ]
                ]
            ]
        ]
    ]

);

/*
- getProduct key is the endpoint which we call from Home
- component key is the controller name to be called
- method key is the action that will be called
- resource key is the <controller>/<action> which is being called
- url key is same as endpoint
*/