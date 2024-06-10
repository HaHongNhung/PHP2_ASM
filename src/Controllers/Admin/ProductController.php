<?php

namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Models\Products;
use Ductong\FpolyBaseWeb3014\Models\Category;
use Rakit\Validation\Validator;

class ProductController extends Controller
{
    private Products $product;
    private Category $category;
    // khởi tạo đối tượng product khi sử dụng class
    public function __construct(){
        $this->product = new Products();
        $this->category = new Category();
    }
    //Hàm render ra trang view list sản phẩm
    public function index(){

        //lấy tất cả sản phẩm 
        $products = $this->product->all();
        //Lấy tên danh mục sản phẩm thông qua id
        
        //Sử dụng foreach để lấy tên danh mục theo id cate ở trong sản phẩm
        foreach ($products as $cate){
            //lấy id từ sản phẩm để sử dụng lấy tên danh mục
            $id = $cate['id_categories'];
            $categories = $this->category->getCategory($id);
        }
        $this->renderViewAdmin('products.index',['products' => $products,'categories'=>$categories]);
    }
}