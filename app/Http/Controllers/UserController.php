<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Barryvdh\DomPDF\Facade\Pdf;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware("can:admin.users.index")->only("index");
        $this->middleware("can:admin.users.edit")->only("edit");
        $this->middleware("can:admin.users.create")->only("create");
        $this->middleware("can:admin.users.show")->only("show");
        $this->middleware("can:admin.users.store")->only("store");
        $this->middleware("can:admin.users.update")->only("update");
        $this->middleware("can:admin.users.destroy")->only("destroy");
        $this->middleware("can:admin.users.rol")->only("rol");
        $this->middleware("can:admin.users.viewConfirmDelete")->only("viewConfirmDelete");
        $this->middleware("can:admin.users.rol.update")->only("assignRole");
        $this->middleware("can:admin.user.pdf.list")->only("pdfList");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
            //
            // $users = User::with('roles')->get();

        ;
        $users = User::OrderBy("id", "desc")->get();


        return view("admin.user.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles = Role::all()->whereNotIn("name", ["super_admin"]);
        return view("admin.user.create", compact("roles"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required'],
        ]);



        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->roles()->sync($request->roles);
        $users->save();
        $roles = Role::all()->whereNotIn("name", ["super_admin"]);
        $user = User::latest()->first();

        $message = "Debe asignar un rol al nuevo usuario.";
        return  view("admin.user.role", compact("user", "roles", "message"));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //


        return view("admin.user.edit", compact("user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => "required|string|email|max:255|unique:users,email,$user->id",

        ]);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->update();
        return redirect()->route("admin.users.index")->with("message", "Se Actualizó el usuario.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //

        $user->delete();

        return  redirect()->route("admin.users.index")->with("danger", "Se elimino el Usuario");
    }


    public function rol($id)
    {

        $roles = Role::all()->whereNotIn("name", ["super_admin"]);

        $user = User::find($id);
        return view("admin.user.role", compact("roles", "user"));
    }

    public function assignRole(Request $request, $id)
    {


        $user = User::find($id);
        $user->roles()->sync($request->roles);

        return redirect()->route("admin.users.index")->with("message", "Se asigno el rol");
    }

    public function viewConfirmDelete($id)
    {
        $user = User::find($id);

        return view("admin.user.confirm", compact("user"));
    }

    public function pdfList()
    {

        $users = User::all()->whereNotIn("id", 1);

        $user = User::find(4);

        /*  $data = $user->roles;



        if(count($data) === 0){
            return "asdsa";
        } */
        /*         return  $data; */

        /*   if (!empty($user->roles)) {
            return "pasa";
        }
 */



        $pdf = Pdf::loadView('admin.user.pdf.all-users', compact("users"));
        return $pdf->stream();
    }
}
