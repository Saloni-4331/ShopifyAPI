<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CustomerController extends Controller
{
    public function index() {
        return Http::withBasicAuth($_ENV['SHOPIFY_API_KEY'], $_ENV['SHOPIFY_ACCESS_TOKEN'])->get($_ENV['SHOPIFY_SHOP_DOMAIN'].'customers.json')->json();
    }

    public function store(Request $request) {
        return Http::withBasicAuth($_ENV['SHOPIFY_API_KEY'], $_ENV['SHOPIFY_ACCESS_TOKEN'])->post($_ENV['SHOPIFY_SHOP_DOMAIN'].'customers.json',$request->all())->json();
    }

    public function update(Request $request, int $id) {
        return Http::withBasicAuth($_ENV['SHOPIFY_API_KEY'], $_ENV['SHOPIFY_ACCESS_TOKEN'])->put($_ENV['SHOPIFY_SHOP_DOMAIN'].'customers/'. $id .'.json',$request->all())->json();
    }

    public function destroy(int $id) {
        return Http::withBasicAuth($_ENV['SHOPIFY_API_KEY'], $_ENV['SHOPIFY_ACCESS_TOKEN'])->delete($_ENV['SHOPIFY_SHOP_DOMAIN'].'customers/'. $id .'.json');
    }
}
