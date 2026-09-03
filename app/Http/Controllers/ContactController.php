<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ContactsService;
use App\Models\Contact;
use App\Http\Requests\UpdateContactRequest;
use App\Http\Requests\CreateContactRequest;
class ContactController extends Controller
{   
     protected ContactsService $contactService;
     public function __construct(ContactsService $contactsService){

      $this->contactService = $contactsService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {   
        $data = $this->contactService->Index($request);
        return view('contacts.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('contacts.create');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        return view('contacts.edit', [
        'contact' => $contact,
    ]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateContactRequest $request)
    {
        $newUser = $this->contactService->createContact($request->validated());

        if (!$newUser->id) {
            return  redirect(route('admin.contact.new'))
                ->with('status', false)->with('message', "New Contact didn't save, try again please");;
        }
        return  redirect(route('admin.contacts.index'))
                    ->with('status', true)
                    ->with('message', "Registration successfully");;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactRequest $request, string $id)
    {

        $updatedUser = $this->contactService
                    ->updateContact($request->validated(),
                                    (int)$id);
        
     
            return redirect()->
                    route('admin.contacts.index')
                    ->with('success', "Contact was updated");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
