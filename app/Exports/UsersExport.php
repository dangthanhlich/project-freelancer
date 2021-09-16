<?php

namespace App\Exports;

 
use App\Models\User;
use App\Models\Pageusers;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Pageusers::all();
    }
    
}
