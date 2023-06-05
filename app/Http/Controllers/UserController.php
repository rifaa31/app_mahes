<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index(Request $request)
    {
        if (isset($request->search)) {
            $user = User::where('name', 'LIKE', "%" . $request->search . "%")->paginate(10)->toArray();
        } else {
            $user = User::paginate(10)->toArray();
        }
        $uri = $request->route()->getPrefix();

        /**
         * pages adalah nama folder
         * schedule adalah nama file
         */
        return view('pages.user.index', ['user' => $user]);

    }

    public function create()
    {
        return view('pages.user.create');
    }

    public function store(Request $request)
    {
        try {
            $data = $request->only(['name', 'email', 'role']);
            $validator = Validator::make($data, [
                'name' => 'required', 
                'email' => 'required', 
                'role' => 'required'], [
                    'name.required' => 'Nama tidak boleh kosong', 
                    'email.required' => 'Email tidak boleh kosong', 
                    'role.required' => 'Role tidak boleh kosong']);
            if ($validator->fails()) {
                return redirect()->back()->with('error', 'Error Simpan');
            }

            $data['password'] = password_hash('admin', PASSWORD_BCRYPT);

            $query = User::create($data);
            return redirect('user')->with('success', 'Berhasil ditambahkan');
        } catch (\Throwable$th) {
            return redirect()->back()->with('error', 'Tidak Berhasil ditambahkan');
        }
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required', 
            'email' => 'required', 
            'role' => 'required',
            
        ]);

        $user = User::findOrFail($id);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'slug' => Str::slug($request->title),
        ]);

        if ($user) {
            return redirect()
                ->route('user.index')
                ->with([
                    'success' => 'User berhasil diedit',
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
        $user = User::findOrFail($id);
        $user->delete();

        if ($user) {
            return redirect()
                ->route('user.index')
                ->with([
                    'success' => 'User berhasil dihapus',
                ]);
        } else {
            return redirect()
                ->route('user.index')
                ->with([
                    'error' => 'Error',
                ]);
        }
    }
}
