<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\File;
class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('Admin.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $this->validate($request, [
    'name' => 'required',
    'email' => 'required|email|unique:users,email',
    'password' => 'required|same:confirm-password',
    'image' => 'image',
    'status' => 'required',
    ]);
     try{
            $data = new User();
            if($request->hasfile('image')){
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/user-img/', $filename);
                $data->image = $filename;
            }
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->status = $request->status;
            $data->phone = $request->phone;
            $data->address = $request->address;
            $data->save();
            // toastr()->success(__('user create successfully'));
            return redirect()->route('users.index');

        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
         }
}

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('Admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => ['required',Rule::unique('users')->ignore($id),],
            // 'password' => 'required|same:confirm-password',
            'image' => 'image',
            'status' => 'required',
            ]);
             try{
                    $data = User::find($id);
                    if($request->hasFile('image')){
                        $path = 'uploads/user-img/' . $data->image;
                        if(File::exists($path)){
                            File::delete($path);
                        }
                        $file = $request->file('image');
                        $ext  = $file->getClientOriginalExtension();
                        $filename = time() . '.' . $ext ;
                        $file->move('uploads/user-img',$filename);
                        $data->image = $filename;
                    }
                    $data->name = $request->name;
                    $data->email = $request->email;
                    $data->password = Hash::make($request->password);
                    $data->status = $request->status;
                    $data->phone = $request->phone;
                    $data->address = $request->address;
                    $data->update();
                    // toastr()->success(__('user update successfully'));
                    return redirect()->route('users.index');

                } catch (\Exception $e) {
                    return redirect()->back()->withErrors(['error' => $e->getMessage()]);
                 }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $data = User::find($id);
            if($data->image != 'default.jpg'){
                $path = 'uploads/user-img/' . $data->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $data->delete();
            // toastr()->error(__('user delete successfully'));
            return redirect()->route('users.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
    }
}

