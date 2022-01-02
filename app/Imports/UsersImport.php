<?php

namespace App\Imports;

use App\User;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToCollection,WithHeadingRow
{
   public function collection(Collection $rows)
    {
        $data = [];
        foreach ($rows as $row) 
        {
            $data[] = [
                'role_id'     => $row['role_id'],
                'name'        => $row['name'],
                'email'       => $row['email'],
                'mobile_no'   => $row['mobile_no'],
                'district_id' => $row['district_id'],
                'upazila_id'  => $row['upazila_id'],
                'postal_code' => $row['postal_code'],
                'address'     => $row['address'],
                'status'      => $row['status'],
                'password'      => $row['password'],
            ];
        }

        User::insert($data);
    }
}
