
<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;
class ProductsController extends Controller
{
	  public function index()
    {
        return view('products');
    }
    public function cart()
    {
        return view('cart');
    }
    public function addToCart($id)
    {
    }
}