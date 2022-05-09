<?php
class Pages extends Controller
{
    public function index()
    {
        $data = [
            "title" => "home"
        ];
        $this->view("pages/index", $data);
    }

    public function about()
    {
        $employees = $this->model("Employee")->getEmployees();
        $data = [
            "title" => "About Us",
            "employees" => $employees
        ];
        $this->view("pages/about", $data);
    }

    public function products()
    {
        $products = $this->model("Product")->getProducts();
        $data = [
            "title" => "Products",
            "products" => $products
        ];
        $this->view("pages/products", $data);
    }

    public function product($id)
    {
        $product = $this->model("Product")->getProduct($id);
        $data = [
            "title" => "product",
            "product" => $product
        ];
        $this->view("pages/product", $data);
    }
}
