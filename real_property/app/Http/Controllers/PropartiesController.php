<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Proparty;
use App\Models\PropartyType;
use App\Models\Owner;
use App\Models\Room;
use Illuminate\Http\Request;
use Exception;

class PropartiesController extends Controller
{

    /**
     * Display a listing of the proparties.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {

        $proparties = Proparty::with('propertytype')->paginate(25);

        return view('proparties.index', compact('proparties'));
    }

    /**
     * Display a listing of the proparties.
     *
     * @return Illuminate\View\View
     */
    public function search(Request $request)
    {
        $search =  $request->input('search_pro');
        if($search!=""){
            $proparties = Proparty::with('propertytype')->where(function ($query) use ($search){
                $query->where('catagery', 'like', '%'.$search.'%')
                    ->orWhere('first_pastcode', 'like', '%'.$search.'%')
                    ->orWhere('second_pastcode', 'like', '%'.$search.'%')
                    ->orWhere('post_town', 'like', '%'.$search.'%')
                    ->orWhere('post_city', 'like', '%'.$search.'%')
                    ->orWhere('post_country', 'like', '%'.$search.'%')
                    ->orWhere('heating_type', 'like', '%'.$search.'%');
            })
            ->paginate(5);
            $proparties->appends(['search_pro' => $search]);
        }
        else{
            $proparties = Proparty::with('propertytype')->paginate(10);
        }
        return View('proparties.index', compact('proparties'));

        //$proparties = Proparty::with('propertytype')->paginate(25);

        //return view('proparties.index', compact('proparties'));
    }

    /**
     * Show the form for creating a new proparty.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $propertytypes = PropartyType::pluck('type_name','type_id')->all();
        $owners = Owner::pluck('name','id')->all();

        return view('proparties.create', compact('propertytypes', 'owners'));
    }

    /**
     * Store a new proparty in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Proparty::create($data);

            return redirect()->route('proparties.proparty.index')
                ->with('success_message', 'Proparty was successfully added.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    /**
     * Display the specified proparty.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $proparty = Proparty::with('propertytype')->with('ownerman')->findOrFail($id);
        $rooms = Room::where('property_id', '=', $id)->get();
        //dd($rooms);
        return view('proparties.show', compact('proparty', 'rooms'));
    }

    /**
     * Show the form for editing the specified proparty.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $proparty = Proparty::findOrFail($id);
        $propertytypes = PropartyType::pluck('type_name','type_id')->all();
        $owners = Owner::pluck('name','id')->all();

        return view('proparties.edit', compact('proparty','propertytypes','owners'));
    }

    /**
     * Update the specified proparty in the storage.
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
            
            $proparty = Proparty::findOrFail($id);
            $proparty->update($data);

            return redirect()->route('proparties.proparty.index')
                ->with('success_message', 'Proparty was successfully updated.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }        
    }

    /**
     * Remove the specified proparty from the storage.
     *
     * @param int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $proparty = Proparty::findOrFail($id);
            $proparty->delete();

            return redirect()->route('proparties.proparty.index')
                ->with('success_message', 'Proparty was successfully deleted.');
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
                'catagery' => 'string|nullable',
            'type' => 'nullable',
            'age' => 'string|nullable',
            'minimum_term' => 'string|nullable',
            'door_no' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'door_name' => 'string|min:1|nullable',
            'first_pastcode' => 'string|max:5|nullable|min:0',
            'second_pastcode' => 'string|max:5|nullable|min:0',
            'post_town' => 'string|min:1|nullable',
            'post_city' => 'string|min:1|nullable',
            'post_country' => 'string|min:1|nullable',
            'display_address' => 'string|min:1|nullable',
            'condition_of_property' => 'string|nullable',
            'furnished_property' => 'array|nullable',
            'accessability' => 'array|nullable',
            'heating_type' => 'array|nullable',
            'is_burglar_alarm' => 'boolean|nullable',
            'is_cctv' => 'boolean|nullable',
            'bill' => 'string|nullable',
            'enquiry_contact' => 'string|min:1|nullable',
            'enquiry_email' => 'email|min:1|nullable',
            'sale_condition' => 'array|min:1|nullable',
            'rent_condition' => 'array|min:1|nullable',
            'no_of_bedrooms' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'no_of_bathrooms' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'no_of_halls' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'no_of_reseptions' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'floors' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'parking' => 'array|nullable',
            'garden' => 'array|nullable',
            'internal_area' => 'string|min:1|nullable',
            'land_area' => 'string|min:1|nullable',
            'area_unit' => 'string|nullable',
            'price' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'price_flag' => 'boolean|nullable',
            'rent_frequency' => 'string|nullable',
            'deposite' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'deposite_flag' => 'boolean|nullable',
            'admin_fee_max' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'admin_fee_exe' => 'nullable|numeric|min:-2147483648|max:2147483647',
            'admin_fee_flag' => 'boolean|nullable',
            'date_intake' => 'nullable',
            'date_published' => 'nullable',
            'date_revoked' => 'nullable',
            'property_details' => 'string|min:1|nullable',
            'further_details' => 'array|min:1|nullable',
            'property_details_display' => 'boolean|nullable',
            'owner' => 'string|min:1|nullable',
            'is_publish' => 'boolean|nullable',
        ];

        
        $data = $request->validate($rules);


        $data['is_burglar_alarm'] = $request->has('is_burglar_alarm');
        $data['is_cctv'] = $request->has('is_cctv');
        $data['price_flag'] = $request->has('price_flag');
        $data['deposite_flag'] = $request->has('deposite_flag');
        $data['admin_fee_flag'] = $request->has('admin_fee_flag');
        $data['property_details_display'] = $request->has('property_details_display');
        $data['is_publish'] = $request->has('is_publish');


        return $data;
    }

}
