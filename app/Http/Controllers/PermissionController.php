  <?php
/*
namespace App\Http\Controllers;

use App\Models\Permission;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str; 

 class PermissionController extends Controller
{
    public function index()
    {
       return view('admin.permissions.index',[
        'perm_index'=>Permission::all()
      
       ]);
    }

    public function store()
    {
      //مشان ما يحطا فاضية
      request()->validate
      ([
        'name'=>'required'
      ]);

      Permission::create
      ([
      'name'=>Str::ucfirst(request('name')),
      //'slug'=>Str::of(Str::lower(request('name')))->slug('_')
      ]);

      return redirect()->route('perm.index');
     //dd(request('name'));
     
    }

    public function delete(Permission $perm)
    {
    $perm->delete();
    Session::flash('deleting_message','Permission '.$perm->name.' had deleted');
     
    return redirect()->route('perm.index');
    }

    public function edit(Permission $perm)
    {
      return view('admin.permissions.edit',[
        'perm_edit'=>$perm,
       // 'perm_all'=>Permission::all(),
        'user_all'=>User::all()
    
    ]);
    }

    
    public function update(Permission $perm)
    {
      //dd($role);
      request()->validate
      ([
        'name'=>'required'
      ]);

     
      $perm->name = Str::ucfirst(request('name'));
     // $perm->slug = Str::of(Str::lower(request('name')))->slug('_');

      if(!$perm->isClean('name'))
      {
        Session::flash('updating_message','Permission '.$perm->name.' has updated');
        $perm->save();

      }

      else
      {
        Session::flash('updating_message','Nothing has changed' );
      }

     
     
    //Session::flash('updating_message',$role->name);
     return redirect()->route('perm.index');



    }

    public function attach(Permission $perm)
    {

      $perm->users()->attach(request('user'));
      return back();
    }

    public function detach(Permission $perm)
    {

      $perm->users()->detach(request('user'));
      return back();
    }
} */