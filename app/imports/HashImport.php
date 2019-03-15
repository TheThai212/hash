<?php

namespace App\Imports;

use App\HashTable;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');

class HashImport implements ToModel,WithHeadingRow
{

    /**
     * @param array $row
     *
     * @return User|null
     */

    public function model(array $row)
    {
//        dd($row);
         HashTable::create([
            'index' =>  $row['STT'],
            'student_code' => $row['Mã sinh viên'],
            'student_phone' => $row['Số điện thoại'],
            'student_birthday' => $row['Ngày sinh'],
            'student_credits' => $row['Số tín chỉ tích lũy'],
            'student_address' => $row['Địa chỉ'],
            'student_email' => $row['Email'],
            'student_gender' => $row['Giới tính'],
//            'mobile' => $row['Số điện thoại'],
            'student_name' => $row['Tên sinh viên'],
        ]);
    }
}