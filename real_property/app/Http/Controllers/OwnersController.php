<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Owner;
use App\Models\Property;
use Illuminate\Http\Request;
use Exception;

class OwnersController extends Controller
{

    /**
     * Display a listing of the owners.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $owners = Owner::paginate(25);

        return view('owners.index', compact('owners'));
    }

    /**
     * Show the form for creating a new owner.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('owners.create');
    }

    /**
     * Show the form for creating a new owner.
     *
     * @return Illuminate\View\View
     */
    public function ownercreate(Request $request)
    {
        
        $pro_id = $request->input('id');
        return view('owners.ownercreate', compact('pro_id'));
    }

    /**
     * Store a new owner in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Owner::create($data);

            return redirect()->route('owners.owner.index')
                ->with('success_message', 'Owner was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Store a new owner in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function ownerstore(Request $request)
    {
        $request->validate([
        'name' => 'string|min:1|max:255|nullable',
        'contact_no' => 'string|min:1|nullable',
        'email' => 'email|min:1|nullable',
        'adderss' => 'string|min:1|max:255|nullable', 
        ]);

        try {
            $owner = new Owner([
                'name' => $request->get('name'),
                'contact_no' => $request->get('contact_no'),
                'email' => $request->get('email'),
                'address' => $request->get('address')
            ]);
            $owner -> save();

            $email =$request -> email;
            $pro_id =$request -> pro_id;
            $owner_id = Owner::where('email', '=', $email)->value('id');
            //dd($owner_id);
            $property = Property::findOrFail($pro_id);

            $property->owner = $owner_id;
            $property->save();
            //dd($property);

           return redirect()->route('proparties.proparty.index')
               ->with('success_message', 'Owner was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified owner.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $owner = Owner::findOrFail($id);

        return view('owners.show', compact('owner'));
    }

    /**
     * Show the form for editing the specified owner.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $owner = Owner::findOrFail($id);
        

        return view('owners.edit', compact('owner'));
    }

    /**
     * Update the specified owner in the storage.
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
            
            $owner = Owner::findOrFail($id);
            $owner->update($data);

            return redirect()->route('owners.owner.index')
                ->with('success_message', 'Owner was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified owner from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $owner = Owner::findOrFail($id);
            $owner->delete();

            return redirect()->route('owners.owner.index')
                ->with('success_message', 'Owner was successfully deleted.');
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
                'name' => 'string|min:1|max:255|nullable',
            'contact_no' => 'string|min:1|nullable',
            'email' => 'email|min:1|nullable',
            'address' => 'string|min:1|max:255|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
