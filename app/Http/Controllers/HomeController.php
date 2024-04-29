<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use function Laravel\Prompts\search;

class HomeController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }
    public function index(Request $request){

        $data = new User;
        if($request->get('search')){
            $data = $data->where('name', 'LIKE', '%' .$request->get('search'). '%')
            ->orwhere('email', 'LIKE', '%' .$request->get('search'). '%');
        }

        $data = $data-> get();

        return view('userdata', compact('data','request'));
    }

    public function create(){
        return view('usercreate');
    }
    public function store(Request $request){

        $validator = Validator::make($request->all(),[
            'photo' => 'required|mimes:png,jpg,jpeg|max:2048',
            'nama' => 'required',
            'nisn' => 'required',
            'email'=> 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
        
        $photo      = $request->file('photo');
        $filename   = date('Y-m-d').$photo->getClientOriginalName();
        $path       = 'photo-user/'.$filename;

        Storage::disk('public')->put($path, file_get_contents($photo));

        $data['name'] = $request->nama;
        $data['nisn'] = $request->nisn;
        $data['email'] = $request->email;
        $data['password'] = Hash::make( $request->password);
        $data['image'] = $filename;

        User::create($data);

        return redirect()->route('admin.index');
    }

    public function edit(Request $request,$id){
        $data = User::find($id);
        return view('useredit', compact('data'));
    }

    public function update(Request $request,$id){
        $validator = Validator::make($request->all(),[

            'nama' => 'required',
            'nisn' => 'required',
            'email'=> 'required|email',
            'password' => 'nullable',
        ]);

        if ($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);

        $data['email'] = $request->email;
        $data['name'] = $request->nama;
        $data['nisn'] = $request->nisn;

        if ($request->password) {
            $data['password'] = Hash::make( $request->password);
        }

        User::whereId($id)->update($data);

        return redirect()->route('admin.index');
    }

    public function delete(Request $request, $id){
        $data = User::find($id);

        if($data){
            $data->delete();
        }
        return redirect()->route('admin.index');
    }
}
