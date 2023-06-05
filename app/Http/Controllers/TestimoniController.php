<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class TestimoniController extends Controller
{

    public function index(Request $request)
    {
        if (isset($request->search)) {
            $testimoni = Testimoni::where('customer_name', 'LIKE', "%" . $request->search . "%")->paginate(10)->toArray();
        } else {
            $testimoni = Testimoni::paginate(10)->toArray();
        }
        $uri = $request->route()->getPrefix();

        // dd($testimoni);
        /**
         * pages adalah nama folder
         * schedule adalah nama file
         */
        return view('pages.testimoni.index', ['testimoni' => $testimoni]);
    }

    public function create()
    {
        return view('pages.testimoni.create');
    }

    public function store(Request $request)
    {
        try {
            $imageName = "";
            $data = $request->only(['customer_name', 'customer_date', 'massage', 'image']);
            if (!empty($request->image)) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
            }
            $validator = Validator::make($data, [
                'customer_name' => 'required',
                'customer_date' => 'date',
                'massage' => 'required'], [
                'customer_name.required' => 'tidak boleh kosong',
                'customer_date.required' => 'tidak boleh kosong',
                'massage.required' => 'photo tidak boleh kosong']);

            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Error');
            }
            if (!empty($imageName)) {
                $data['image'] = $imageName;
            }

            // dd($data);

            $query = Testimoni::create($data);
            return redirect('testimoni')->with('success', 'Testimoni Berhasil ditambahkan');
        } catch (\Throwable$th) {
            return redirect()->back()->with('error', 'Tidak Berhasil ditambahkan');
        }
    }

    public function edit($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        return view('pages.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'customer_name' => 'required',
            'customer_date' => 'date',
            'massage' => 'required',
        ]);

        $testimoni = Testimoni::findOrFail($id);

        $testimoni->update([
            'customer_name' => $request->customer_name,
            'customer_date' => $request->customer_date,
            'massage' => $request->massage,
            'slug' => Str::slug($request->title),
        ]);

        if ($testimoni) {
            return redirect()
                ->route('testimoni.index')
                ->with([
                    'success' => 'Testimoni berhasil diedit',
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
        $testimoni = Testimoni::findOrFail($id);
        $testimoni->delete();

        if ($testimoni) {
            return redirect()
                ->route('testimoni.index')
                ->with([
                    'success' => 'testimoni berhasil dihapus',
                ]);
        } else {
            return redirect()
                ->route('testimoni.index')
                ->with([
                    'error' => 'Error',
                ]);
        }
    }
    // public function destroy(Request $request, $id)
    // {
    //     $deleteTesti = DB::table('testimoni')->where('id', $id)->delete();
    //     if ($deleteTesti) {
    //         return response()->json(['code' => 200, 'message' => 'Berhasil hapus testimoni']);
    //     } else {
    //         return response()->json(['code' => 400, 'message' => 'Gagal hapus testimoni']);
    //     }
    // }
}
