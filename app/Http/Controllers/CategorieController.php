<?php

namespace App\Http\Controllers;

use App\Models\Categorie;

use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use App\Models\GeneralSetting;
use constGuards;
use constDafaults;
use GrahamCampbell\ResultType\Success;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    { $catogris = new Categorie();
        if ($request->ajax()) {
            $data = Categorie::select('id', 'name', 'status', 'parent_id')->get();
            return DataTables::of($data)->addIndexColumn()

                ->addColumn('action', function ($row) {
                    $btn = '<td><div class="dropdown">
                    <a
                        class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                        href="#"
                        role="button"
                        data-toggle="dropdown"
                    >
                        <i class="dw dw-more"></i>
                    </a>
                    <div
                        class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">'.
                    ' <a class="dropdown-item" href="categorie/'.$row->id.'"
                            ><i class="dw dw-eye"></i> View</a>
                        <a class="dropdown-item" href="categorie/'.$row->id.'/edit"
                            ><i class="dw dw-edit2"></i> Edit</a
                        >
                        <form action="categorie/'.$row->id.'" method="POST">
                            '.@csrf_field().'
                            '.@method_field("DELETE").'
                            <button  type="submit" class="dropdown-item"onclick="return confirm(\'Are You Sure Want delet\')" href=""
                            ><i class="dw dw-delete-3"></i> Delete</button
                        >

                            </form>

                    </div>
                </div></td>';
                    return $btn;
                })
                ->rawColumns(['action'])

                ->make(true);
        }
        return view('back.pages.admin.categorie.index',['catogris'=>$catogris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.admin.categorie.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'parent_id' => 'nullable',
            'picture' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'summary' => 'nullable',
            'description' => 'nullable',
             'status' => 'required'

        ]);
        $name = $request->name;
        $parent_id = $request->parent_id;
        $summary=$request->summary;
        $description=$request->description;
        $status=$request->status;


        $path = 'images/site/';
        $file = $request->file('picture');

        $categories = new Categorie();
        $categories->name = $name;
        $categories->parent_id = $parent_id;
        $categories->summary = $summary;
        $categories->description = $description;
        $categories->status = $status;
        $categories->save();
        if($file!= null){
        $categories_id = $categories->id;

        $old_logo = $categories->get('picture')->where('id', $categories_id);
        $file_path = $path . $old_logo;
        $file_getCilent = $request->file('picture')->getClientOriginalExtension();
        $file_name = 'CATPC_' . uniqid() . '.' . $file_getCilent; //getClientOriginalExtension();
        $upload = $file->move(public_path($path), $file_name);



        if ($upload) {
            // if($old_logo != null && File::exists(public_path($path.$old_logo))){
            //    File::delete(public_path(($path.$old_logo)));
            // }
            $Categories = $categories->where('id', $categories_id)->first();
            $Categories->picture = $file_name;
            $Categories->save();

          //  return redirect()->route('admin.categorie.index')->with('success','mmmmmmmmmmmmmmmmmmm');
            return back()->with('success','mmmmmmmmmmmmmmmmmmm');
        } else {
            return response()->json(['status' => 0, 'msg' => 'Something went weong.']);
        }
    }
    return back()->with('success','mmmmmmmmmmmmmmmmmmm');
  // return redirect()->route('admin.categorie.index')->with('success','mmmmmmmmmmmmmmmmmmm');
       // return redirect()->route('admin.categorie.index');
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories =  Categorie::find($id);

        return view('back.pages.admin.categorie.show',['catogris'=>$categories]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $categories =  Categorie::find($id);

        return view('back.pages.admin.categorie.edit',['catogris'=>$categories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {

        $request->validate([
            'name' => 'required',
            'parent_id' => 'nullable',
            'picture' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
            'summary' => 'nullable',
            'description' => 'nullable',
            'status' => 'required'

        ]);



        $name = $request->name;
        $parent_id = $request->parent_id;
        $summary=$request->summary;
        $description=$request->description;
        $status=$request->status;

        $path = 'images/site/';
        $file = $request->file('picture');

        // $categories =Categorie::find($request->id);
        // $categories->update([
        //     'name'=>$name,
        //     'parent_id'=>$parent_id,


        //    ]);
         $categories = new Categorie();
        // $categories->name = $name;
        // $categories->parent_id = $parent_id;
        // $categories->save();
        // $categories_id = $categories->id;

        $old_logo = $categories->get('picture')->where('id', $id);
        $file_path = $path . $old_logo;
        $file_getCilent = $request->file('picture')->getClientOriginalExtension();
        $file_name = 'CATPC_' . uniqid() . '.' . $file_getCilent; //getClientOriginalExtension();
        $upload = $file->move(public_path($path), $file_name);



        if ($upload) {
            if($old_logo != null && File::exists(public_path($path.$old_logo))){
               File::delete(public_path(($path.$old_logo)));
            }

            //$Categories = $categories->id;//where('id', $categories->id)->first();
            //$Categories->picture = $file_name;
            //$Categories->save();
            $Categorie=Categorie::where('id',$id)->update([
                'name'=>$name,
                'parent_id'=>$parent_id,
                'picture' =>$file_name,
                'summary' => $summary,
            'description' => $description,
             'status'=>$status
               ]);
               $messge='message ';
             //Session()->flash('success', $messge);
             return back()->with('success', $messge);
        } else {
            return response()->json(['status' => 0, 'msg' => 'Something went weong.']);
        }
      return  redirect(url('admin/categorie/'.$id.'/edit'));// return redirect()->route('admin.categorie.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $path = 'images/site/';
        $categories = Categorie::find($id);
        $old_logo = $categories->picture;
        // if($old_logo != null && File::exists(public_path($path.$old_logo))){

        //  }
         File::delete(public_path(($path.$old_logo)));
           $categories->delete();
           if( $categories){
            session()->flash('success','Delete');
           }else{
            session()->flash('erorr','Delete');
           }

        return back();
    }
}
