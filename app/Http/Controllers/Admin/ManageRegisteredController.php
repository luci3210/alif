<?php

namespace App\Http\Controllers\Admin;

use App\Exports\RegisteredMember;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MembershipImport;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Services\Registered;



class ManageRegisteredController extends Controller
{

    public function __construct() {
        $this->middleware('role:admin');
    }

    public function index(Registered $list)
    {
        $data = $list->getRegisteredList();
        return view('admin.manage_registered.index',compact('data'));
    }

    public function export() {

        return Excel::download(new RegisteredMember, 'members.xlsx');
    
    }
    public function import(Request $request) {

        $file = $request->file('file');

        Excel::import(new MembershipImport,$file);
        
        return back()->with('success', 'All good!');
    
    }

    // public function export_all() {

    //     $data = $list->getAllRegistered();
    // }

    // /**
    //  * Show the form for creating new Permission.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('admin.permissions.create');
    // }

    // /**
    //  * Store a newly created Permission in storage.
    //  *
    //  * @param  \App\Http\Requests\StorePermissionsRequest  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => ['required','unique:permissions','max:20'],
    //     ]);

    //     $permission = Permission::create($request->all());

    //     return redirect()->route('permissions.index')->with('success', "The $permission->name was saved successfully");
    // }


    // /**
    //  * Show the form for editing Permission.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $permission = Permission::findOrFail($id);

    //     return view('admin.permissions.edit', compact('permission'));
    // }

    // /**
    //  * Update Permission in storage.
    //  *
    //  * @param  \App\Http\Requests\UpdatePermissionsRequest  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => ['required','unique:permissions','max:20'],
    //     ]);

    //     $permission = Permission::findOrFail($id);
    //     $permission->update($request->all());

    //     return redirect()->route('permissions.index')->with('warning', "The $permission->name was updated successfully");
    // }


    // /**
    //  * Remove Permission from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $permission = Permission::findOrFail($id);
    //     $permission->delete();

    //     return redirect()->route('permissions.index')->with('danger', "The $permission->name was deleted successfully");
    // }

    // /**
    //  * Delete all selected Permission at once.
    //  *
    //  * @param Request $request
    //  */
    // public function massDestroy(Request $request)
    // {
    //     if ($request->input('ids')) {
    //         $entries = Permission::whereIn('id', $request->input('ids'))->get();

    //         foreach ($entries as $entry) {
    //             $entry->delete();
    //         }
    //     }
    // }

}
