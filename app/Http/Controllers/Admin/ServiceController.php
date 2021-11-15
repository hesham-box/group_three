<?php
namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\storeservices;
use Illuminate\Support\Facades\File;
class ServiceController extends Controller
{

    public function index()
    {
        $services = Service::all();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeservices $request)
    {
        try {
            $validated = $request->validated();
            $serv = new Service();
            if($request->hasfile('image')){
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/serv/', $filename);
                $serv->image = $filename;
            }
            $serv->serve_name = ['en'=>$request->serve_name_en ,'ar'=>$request->serve_name];
            $serv->desc = $request->desc;
            $serv->status = $request->status==true?'1':'0';
            $serv->save();
            toastr()->success(__('services create successfully'));
            return redirect()->route('services.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serv = Service::find($id);
        return view('admin.services.edit',compact('serv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(storeservices $request, $id)
    {
        try{
            $validated = $request->validated();
            $serv = Service::find($id);
            if($request->hasFile('image')){
                $path = 'uploads/serv/' . $serv->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/serv',$filename);
                $serv->image = $filename;
            }
            $serv->serve_name = ['en'=>$request->serve_name_en ,'ar'=>$request->serve_name];
            $serv->desc = $request->desc;
            $serv->status = $request->status==true?'1':'0';
            $serv->update();
            toastr()->success(__('services update successfully'));
            return redirect()->route('services.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $serv = Service::find($id);
            if($serv->image != 'default.jpg'){
                $path = 'uploads/serv/' . $serv->image;
                if(File::exists($path)){
                    File::delete($path);
                }
            }
            $serv->delete();
            toastr()->error(__('services delete successfully'));
            return redirect()->route('services.index');
        }catch (\Exception $e){
                return redirect()->back()->withErrors(['error' => $e->getMessage()]);
            }
        }
}
