<?php

namespace App\Mymodule\Controllers;

use App\Core\Controllers\BaseController;
use App\Mymodule\Models\Order;  // If working with Models
// use MongoDB\BSON\ObjectId;

class OrderController extends BaseController
{

    public function testAction()
    {
        echo "Hello";
    }

    public function placeorderAction()
    {
        $data = $this->request->getpost();
        if (isset($data['product_name']) && isset($data['product_price']) && isset($data['product_id']) && isset($data['customer_name']) && isset($data['quantity'])) {

            $obj = new Order();
            $obj->customer_name = $this->request->getpost('customer_name');
            $obj->product_id = $this->request->getpost('product_id');
            $obj->product_name = $this->request->getpost('product_name');
            $obj->product_price = $this->request->getpost('product_price');
            $obj->quantity = $this->request->getpost('quantity');
            $obj->status = "Paid";
            $result = $obj->save();
            echo "Order placed successfully";
        }
    }

    public function updateOrderStatusAction()
    {
        $obj = new Order();
        $container = $obj->getCollectionForTable(false);
        $data = $this->request->getput();
        $id = $data['_id'];
        echo "<pre>";
        $updatedResult = $container->updateOne(['_id' =>  new \MongoDB\BSON\ObjectID($id)], ['$set' => ['status' => $data['status']]]);
        echo "Order updated successfully";
    }
    public function deleteOrderAction()
    {
        $obj = new Order();
        $container = $obj->getCollectionForTable(false);
        $data = $this->request->getpost();
        $id = $data['_id'];
        echo "<pre>";
        $updatedResult = $container->deleteOne(['_id' =>  new \MongoDB\BSON\ObjectID($id)]);
        echo "Deleted successfully";
    }

}