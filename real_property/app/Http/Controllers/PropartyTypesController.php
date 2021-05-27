<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\PropartyType;
use Illuminate\Http\Request;
use Exception;

class PropartyTypesController extends Controller
{

    /**
     * Display a listing of the proparty types.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $propartyTypes = PropartyType::paginate(25);

        return view('proparty_types.index', compact('propartyTypes'));
    }

    /**
     * Show the form for creating a new proparty type.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('proparty_types.create');
    }

    /**
     * Store a new proparty type in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            PropartyType::create($data);

            return redirect()->route('proparty_types.proparty_type.index')
                ->with('success_message', 'Proparty Type was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified proparty type.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $propartyType = PropartyType::findOrFail($id);

        return view('proparty_types.show', compact('propartyType'));
    }

    /**
     * Show the form for editing the specified proparty type.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $propartyType = PropartyType::findOrFail($id);
        

        return view('proparty_types.edit', compact('propartyType'));
    }

    /**
     * Update the specified proparty type in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $propartyType = PropartyType::findOrFail($id);
            $propartyType->update($data);

            return redirect()->route('proparty_types.proparty_type.index')
                ->with('success_message', 'Proparty Type was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified proparty type from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $propartyType = PropartyType::findOrFail($id);
            $propartyType->delete();

            return redirect()->route('proparty_types.proparty_type.index')
                ->with('success_message', 'Proparty Type was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'type_name' => 'string|min:1|max:255|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
