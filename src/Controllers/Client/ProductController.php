<?php 

namespace Ductong\FpolyBaseWeb3014\Controllers\Client;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Models\Products;

class ProductController extends Controller
{
    private Products $product;
    public function __construct(){
        $this->product = new Products();
    }

    public function index() {
        $products = $this->product->all();
        $this->renderViewClient('Product.listProduct',['products' => $products]);
    }

    public function detail($id){
        $productOne = $this->product->findByID($id);
        $this->renderViewClient('Product.detailProduct',['productOne'=>$productOne]);
    }

}