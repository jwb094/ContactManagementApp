<?php

namespace App\Services;

use App\Models\Contact;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardService{

    public function dashboardHomeInfo(): array{

   
    

        return[
            "totalContact" => Contact::count(),
            "newContactsThisMonth" => Contact::whereMonth('created_at', now()->month)->count(),
            'favourites' => Contact::where('is_favourite',1)->count(),
            "birthdaysUpcoming" =>Contact::whereMonth("date_of_birth",now()->month) 
                                            ->orderBy("date_of_birth","ASC")
                                            ->limit(5)->get(),
            "RecentlyAdded" => Contact::latest()->limit(5)->get(),
            "chartContactsByMonthCart" => new LaravelChart($this->contactsByMonthCart()),
            'chartContactsByCountyChart' => new LaravelChart($this->contactsByCountyChart()) ,
        ];
    }

    private function contactsByMonthCart(){
         $chart_options = [
       'chart_title' => 'Contacts Added - Last 4 Months',
        'report_type' => 'group_by_date',
        'model' => 'App\Models\Contact',
        'group_by_field' => 'created_at',
        'group_by_period' => 'month',
        'chart_type' => 'line',
        'filter_field' => 'created_at',
        'month_format' => 'F',
        'range_date_start' => now()->subMonths(4)->startOfMonth(),
        'range_date_end' => now()->subMonth()->endOfMonth(),
    ];
        return $chart_options;
    }
    private function contactsByCountyChart() {
        $county_chart_options = [
        'chart_title' => 'Contacts by County',
            'report_type' => 'group_by_string',
            'model' => 'App\Models\Contact',
            'group_by_field' => 'county',
            'chart_type' => 'bar',
            'chart_color' => "0,0,0"
        ];
       return $county_chart_options; 
    }
}