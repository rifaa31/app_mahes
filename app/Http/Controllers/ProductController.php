<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index(Request $request)
    {

        $uri = $request->route()->getPrefix();
        $product = Product::paginate()->toArray();
        /**
         * pages adalah nama folder
         * schedule adalah nama file
         */
        return view('pages.product.index', ['product' => $product]);

    }

    public function create()
    {

        return view('pages.product.create');
    }
    public function store(Request $request)
    {
        try {
            $imageName = "";
            $data = $request->only(['title', 'price', 'description', 'type', 'image']);

            if (!empty($request->image)) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('storage/images'), $imageName);

                // $image = $request->file('image');
                // $imageName = time() . '.' . $image->extension();
                // $image->move(public_path('storage'), $imageName);

            }
            $validator = Validator::make($data, ['title' => 'required', 'price' => 'numeric', 'description' => 'required'],
                ['title.required' => 'tidak boleh kosong',
                    'price.numeric' => 'harus bertype angka',
                    'description.required' => 'deskripsi tidak boleh kosong']);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'error simpan');
            }
            if (!empty($imageName)) {
                $data['image'] = $imageName;
            }

            Product::create($data);
            return redirect()->route('product.index')->with('success', 'Produk Berhasil ditambahkan');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Error');
        }
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.product.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'price' => 'numeric',
            'description' => 'required',
        ]);

        $product = Product::findOrFail($id);

        $product->update([
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'slug' => Str::slug($request->title),
        ]);

        if ($product) {
            return redirect()
                ->route('product.index')
                ->with([
                    'success' => 'produk berhasil diedit',
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'error',
                ]);
        }
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        if ($product) {
            return redirect()
                ->route('product.index')
                ->with([
                    'success' => 'Product berhasil dihapus',
                ]);
        } else {
            return redirect()
                ->route('product.index')
                ->with([
                    'error' => 'Error',
                ]);
        }
    }
}
