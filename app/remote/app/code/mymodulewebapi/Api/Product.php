<?php 

namespace App\Mymodulewebapi\Api;

class Product extends \App\Apiconnect\Api\Base
{
    protected $_component = "Product";

    public function get($params){
        
        $response = array("Hello" => "World");
        return [
            'success' => true,
            'data'    => $response
        ];
    }
}