<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContract;
use App\Models\Contract;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

use Barryvdh\DomPDF\Facade\Pdf;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function __construct()
    {
        $this->middleware("can:admin.contracts.index")->only("index");
        $this->middleware("can:admin.contracts.edit")->only("edit");
        $this->middleware("can:admin.contracts.create")->only("create");
        $this->middleware("can:admin.contracts.show")->only("show");
        $this->middleware("can:admin.contracts.store")->only("store");
        $this->middleware("can:admin.contracts.update")->only("update");
        $this->middleware("can:admin.contracts.destroy")->only("destroy");
        $this->middleware("can:admin.contracts.viewConfirmDelete")->only("viewConfirmDelete");
        $this->middleware("can:admin.contracts.inactive")->only("inactive");
        $this->middleware("can:admin.contracts.inactivate")->only("inactivate");
        $this->middleware("can:admin.contracts.activate")->only("activate");
    }
    public function index()
    {
        //


        $contracts = Contract::where("status", 1)->get();
        return view("admin.contract.index", compact("contracts"));
    }

    /**
     * Show the form for creating a new resource.
     */


    public function create()
    {
        //

        return view("admin.contract.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreContract $request)
    {
        //
        $contract = Contract::create($request->all());
        return redirect()->route('admin.contracts.index')->with("message", "Se creo correctamente el contrato.");
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
    public function edit(Contract $contract)
    {
        //

        return view("admin.contract.edit", compact('contract'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contract $contract)
    {
        //



        $request->validate([
            'type_contract' => "required|unique:contracts,type_contract,$contract->id",

            'description' => "required|max:20",
        ]);

        $contract->type_contract = $request->type_contract;
        $contract->description = $request->description;

        $contract->update();

        return redirect()->route("admin.contracts.index")->with("message", "Se actualizó el contrato correctamente.");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contract $contract)
    {
        //

        $contract->delete();

        return redirect()->route("admin.contracts.index")->with("message-danger", "Se eliminó el contrato PERMANENTEMENTE.");
    }

    public function inactive()
    {
        $contracts = Contract::where("status", 0)->get();

        return view("admin.contract.inactive", compact("contracts"));
    }

    public function inactivate($id)
    {

        $contract = Contract::find($id);
        $contract->status = 0;
        $contract->save();
        return redirect()->route("admin.contracts.index")->with("message-danger", "Se inhabilitó el contrato.");
    }

    public function activate($id)
    {

        $contract = Contract::find($id);
        $contract->status = 1;
        $contract->save();
        return redirect()->route("admin.contracts.index")->with("message", "Se reestableció el contrato.");
    }
    public function viewConfirmDelete($id)
    {

        $contract = Contract::find($id);
        return view("admin.contract.confirmDelete", compact("contract"));
    }

    public function pdfList()
    {
        $actives = Contract::where('status', 1)->get();
        $inactives = Contract::where('status', 0)->get();

        $pdf = Pdf::loadView('admin.contract.pdf.list', compact("actives", "inactives"));
        return $pdf->stream();
    }
}
