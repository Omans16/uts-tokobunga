<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) : RedirectResponse
    {
        $this->validate($request,[
            'NamaProduk' => 'required',
            'JenisTanaman' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'Deskripsi' => 'required',
            'stock'=>'required',
            'harga'=>'required',
            
        ]);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->storeAs('images', $imageName, 'public');
        } else {
            $imageName = null; // No image uploaded
        }
    
    
        DB::table('products')->insert([
            'NamaProduk' => $request->NamaProduk,
            'JenisTanaman' => $request->JenisTanaman,
            'image' => $imageName,
            'Deskripsi' => $request->Deskripsi,
            'stock'=> $request->stock,
            'harga'=> $request->harga,
        ]);
 
        return redirect()->route('products')->with('success', 'Product added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'product deleted successfully');
    }
    

    public function dashboard() 
    {
        $product = Product::get();
  
        return view('dashboard', compact('product'));
    }
    
    public function indexxx()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('welcome', compact('product'));
    }
}


