<?php

namespace App\Imports;

use App\Role;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RolesImport implements ToCollection,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function collection(Collection $rows)
    {
        $data = [];
        foreach ($rows as $row) 
        {
            $data[] = [
                'role_name'     => $row['role_name']
            ];
        }

        Role::insert($data);
    }
}
