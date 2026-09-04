<?php

namespace App\Services;

use App\Models\Contact;


class ContactsService
{

    public function Index(object $inputData): array
    {


        $query =  Contact::query();

        if (!empty($inputData['first_name'])) {
            $query->where(
                'first_name',
                'LIKE',
                '%' . $inputData['first_name'] . '%'
            );
        }
        if (!empty($inputData['last_name'])) {
            $query->where('last_name', 'LIKE', '%' . $inputData['last_name'] . '%');
        }

        if (!empty($inputData['email'])) {
            $query->where('email', 'LIKE', '%' . $inputData['email'] . '%');
        }

        if (!empty($inputData['facebook'])) {
            $query->whereNotNull('facebook');
        }

        if (!empty($inputData['linkedin'])) {
            $query->whereNotNull('linkedin');
        }

        if (!empty($inputData['twitter'])) {
            $query->whereNotNull('twitter');
        }

        if (!empty($inputData['favourite'])) {
            $query->where('is_favourite', 1);
        }


        $contacts = $query
            ->orderBy('first_name', 'ASC')
            ->latest()
            ->paginate(10)
            ->withQueryString();



        return [
            "contacts" => $contacts
        ];
    }


    public function createContact(array $newUserData): Contact{

        $user = Contact::create($newUserData);
 
        return $user;
    }

    public function updateContact(array $updatedUserData,int $updatedUserDataId): Contact{
        
        $contact = Contact::findOrFail($updatedUserDataId);

        $contact->update($updatedUserData);
        
        return $contact->refresh();

        
    }

}
