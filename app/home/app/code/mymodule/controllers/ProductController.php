<?php

namespace App\Mymodule\Controllers;

use App\Core\Controllers\BaseController;
use App\Mymodule\Models\Product;  // If working with Models
// use MongoDB\BSON\ObjectId;

class ProductController extends BaseController
{

    public function testAction()
    {
        echo "Hello";
    }

    public function addAction()
    {
        $obj = new Product();
        $obj->name = "XBox";
        $obj->price = 23;
        $result = $obj->save();
        print_r($result);
    }

    public function addBulkAction()
    {
        $obj = new Product();
        $container = $obj->getCollectionForTable(false); // This gives an object with which we can directly call methods of mongodb php library
        $result = $container->insertMany([
            array(
                "name" => "Play Station",
                "price" => 45
            ),
            array(
                "name" => "Oculus",

                "price" => 40
            )
        ]);
        print_r($result);
    }

    public function addproductAction()
    {
        $data = $this->request->getpost();
        if (isset($data['product_name']) && isset($data['product_price']) && isset($data['product_category']) && isset($data['stock'])) {

            $obj = new Product();
            $obj->product_name = $this->request->getpost('product_name');
            $obj->product_price = $this->request->getpost('product_price');
            $obj->product_category = $this->request->getpost('product_category');
            $obj->stock = $this->request->getpost('stock');
            $result = $obj->save();
            echo "Product added successfully";
        }
    }

    public function updateproductAction()
    {
        $obj = new Product();
        $container = $obj->getCollectionForTable(false);
        $data = $this->request->getput();
        $id = $data['_id'];
        echo "<pre>";
        $updatedResult = $container->updateOne(['_id' =>  new \MongoDB\BSON\ObjectID($id)], ['$set' => ['product_name' => $data['product_name']]]);
        echo "updated successfully";
    }
    public function deleteproductAction()
    {
        $obj = new Product();
        $container = $obj->getCollectionForTable(false);
        $data = $this->request->getpost();
        $id = $data['_id'];
        echo "<pre>";
        $updatedResult = $container->deleteOne(['_id' =>  new \MongoDB\BSON\ObjectID($id)]);
        echo "Deleted successfully";
    }

    public function getProductFromRemoteAction()
    {
        $remoteResponse = $this->di->getObjectManager()->get("\App\Connector\Components\ApiClient")
            ->init("mymodulewebapi", true)
            ->call("getProduct", array(), array(), "GET");

        print_r($remoteResponse);
    }
}
