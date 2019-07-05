<?php

namespace Modules\IuguMarketplace\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Kris\LaravelFormBuilder\FormBuilder;
use Modules\IuguMarketplace\Forms\IuguAccountForm;

class IuguMarketplaceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(IuguAccountForm::class, [
            'method' => 'POST',
            'url' => route('iugumarketplaceaccount.index')
        ]);
        return view('iugumarketplace::index', compact('form'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('iugumarketplace::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('iugumarketplace::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('iugumarketplace::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
