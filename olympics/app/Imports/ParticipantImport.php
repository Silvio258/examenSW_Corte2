<?php

namespace App\Imports;

use App\Models\Participant;
use Maatwebsite\Excel\Concerns\ToModel;

class ParticipantImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Participant([
            //
            'cif' => $row[0],
            'first_name' => $row[1],
            'last_name' => $row[2],
            'email' => $row[3],
            'degree' => $row[4],
            'gender' => $row[5]
        ]);
    }
}
