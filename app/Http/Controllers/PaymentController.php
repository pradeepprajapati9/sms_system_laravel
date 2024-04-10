<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Payment;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        //
        $payments=Payment::all();
        return view("payments.index")->with("payments",$payments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        //
        return view("payments.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        //
        $input=$request->all();
        Payment::create($input);
        return redirect("payments")->with("flash_message","payments Added !");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id):View
    {
        //
        $payments=Payment::find($id);
        return view("payments.show")->with("payments",$payments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id):View
    {
        //
        $payments=Payment::find($id);
        return view("payments.edit")->with("payments",$payments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id):RedirectResponse
    {
        //
        $payments=Payment::find($id);
        $input=$request->all();
        $payments->update($input);
        return redirect("paymentss")->with("flash_message","payments updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        //
        Payment::destroy($id);
        return redirect("payments")->with("flash_message","payments Deleted");

    }
}
