<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Requests\New\StoreNew;
use App\Models\Employee;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function __construct()
    {
        $this->middleware("can:news.index")->only("index");
        $this->middleware("can:news.edit")->only("edit");
        $this->middleware("can:news.create")->only("create");
        $this->middleware("can:news.show")->only("show");
        $this->middleware("can:news.store")->only("store");
        $this->middleware("can:news.update")->only("update");
        $this->middleware("can:news.destroy")->only("destroy");
        $this->middleware("can:news.viewConfirmDelete")->only("viewConfirmDelete");
        $this->middleware("can:news.inactive")->only("inactive");
        $this->middleware("can:news.inactivate")->only("inactivate");
        $this->middleware("can:news.activate")->only("activate");
    }
    public function index()
    {
        //





        $News = News::orderBy("id", "desc")->where("status", 1)->get();

        return view("admin.new.index", compact("News"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //



        $user = Auth::user();


        return view("admin.new.create", compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreNew $request)
    {
        //

        $new = News::create($request->all());
        return redirect()->route("news.index")->with("message", "Noticia creada");
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
    public function edit(string $id)
    {
        //

        $new = News::find($id);
        $user = Auth::user();
        return view("admin.new.edit", compact("new", "user"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $new = News::find($id);




        $request->validate([
            "title" => "required",
            "body" => "required"

        ]);

        $new->title = $request->title;
        $new->body = $request->body;
        $new->user_id = $request->user_id;

        $new->update();

        return redirect()->route("news.index")->with("message", "Sé actualizo con éxito.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

        $new = News::find($id);

        $new->delete();

        return redirect()->route("news.index")->with("message-danger", "Sé eliminó permanentemente la noticia.");
    }


    public function inactive()
    {

        $News = News::orderBy("id", "desc")->where("status", 0)->get();

        return view("admin.new.inactive", compact("News"));
    }


    public function viewConfirmDelete(string $id)
    {

        $new = News::find($id);

        return view("admin.new.confirmDelete", compact("new"));
    }
    public function inactivate(string $id)
    {
        $new = News::find($id);

        $new->status = 0;
        $new->save();
        return redirect()->route("news.index")->with("message-danger", "Sé eliminó la noticia.");
    }

    public function activate(string $id)
    {
        $new = News::find($id);

        $new->status = 1;
        $new->save();
        return redirect()->route("news.index")->with("message", "Sé Habilitó la noticia.");
    }
}
