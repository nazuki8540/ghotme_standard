<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class ProductController extends Controller
{
    public function index()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Produtos',
                'url' => route('products.index'),
                'active' => true
            ],
        ];

        $products = Product::paginate(10);
        
        return view('products.index',[
            'breadcrumbItems' => $breadcrumbsItems,
            'pageTitle' => 'Produtos'], compact('products'));
    }

    public function create()
    {
        $breadcrumbsItems = [
            [
                'name' => 'Produtos',
                'url' => route('products.index'),
                'active' => false
            ], 
            [
                'name' => 'Criar produtos',
                'url' => route('products.create'),
                'active' => true
            ],
        ];
        $roles = Role::all();
        return view('products.create',[
            'roles' => $roles,
            'breadcrumbItems' => $breadcrumbsItems,
            'pageTitle' => 'Criar produtos']);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        Product::create($validated);

        return redirect()->route('products.index');
    }

    public function edit(Product $product)
    {
        $breadcrumbsItems = [
            [
                'name' => 'Produtos',
                'url' => route('products.index'),
                'active' => false
            ],
            [
                'name' => 'Editar',
                'url' => '#',
                'active' => true
            ],
        ];

        return view('products.edit', [
            'product' => $product,
            'breadcrumbItems' => $breadcrumbsItems,
            'pageTitle' => 'Editar produto',
        ],compact('product'));
    }

      /**
     * Display the specified resource.
     *
     * @param  Product  $user
     * @return Application|Factory|View
     *
     */
    public function show(Product $product)
    {
        $breadcrumbsItems = [
            [
                'name' => 'Produtos',
                'url' => route('products.index'),
                'active' => false
            ],
            [
                'name' => 'Exibir',
                'url' => '#',
                'active' => true
            ],
        ];

        return view('products.show', [
            'product' => $product,
            'breadcrumbItems' => $breadcrumbsItems,
            'pageTitle' => 'Exibir produto',
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
        ]);

        $product->update($validated);

        return redirect()->route('products.index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index');
    }
}
