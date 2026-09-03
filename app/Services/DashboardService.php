<?php

namespace App\Services;

use App\Models\Contact;


class DashboardService{

    public function dashboardHomeInfo(): array{

        return[
            "totalContact" => Contact::count(),
            "NewContactThisMonth" => Contact::whereMonth('created_at', now()->month)->count(),
            'favourites' => Contact::where('is_favourite',1)->count(),
            "BirthdaysUpcoming" =>Contact::whereMonth("date_of_birth",now()->month) 
                                            ->orderBy("date_of_birth","ASC")
                                            ->limit(5)->get(),
            "RecentlyAdded" => Contact::latest()->limit(5)->get()
        ];
    }

}