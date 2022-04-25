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
        $data = [
            "title" => "about"
        ];
        $this->view("pages/about", $data);
    }

    public function products()
    {
        $data = [
            "title" => "products"
        ];
        $this->view("pages/products", $data);
    }

    public function product()
    {
        $data = [
            "title" => "product"
        ];
        $this->view("pages/product", $data);
    }
}
