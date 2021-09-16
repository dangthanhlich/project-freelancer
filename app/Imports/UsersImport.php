<?php

namespace App\Imports;

// use App\User;
// use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\User;
use App\Models\Pageusers;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pageusers([
            'id'     => $row['id'],
            'name'    => $row['name'], 
            'ten'    => $row['ten'], 
            'title'    => $row['title'], 
            'TomTat'    => $row['TomTat'], 
            'description'    => $row['description'], 
            'price'    => $row['price'], 
            // 'password' => \Hash::make($row['password']),
        ]);
    }
}
