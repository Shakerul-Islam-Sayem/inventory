<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        $suppliers = [
            [
                'supplier_title' => 'HomeGoods',
                'owner_name' => 'Owner 1',
                'contact_person' => 'Contact Person 1',
                'email' => 'supplier1@example.com',
                'phone' => '123-456-7890',
                'address' => '123 Main Street',
                'tax' => '12345',
                'bin_number' => '67890',
                'status' => '1',
                'notes' => 'Notes for Supplier 1',
            ],
            [
                'supplier_title' => 'FashionHub ',
                'owner_name' => 'Owner 2',
                'contact_person' => 'Contact Person 2',
                'email' => 'supplier2@example.com',
                'phone' => '223-456-7890',
                'address' => '223 Main Street',
                'tax' => '22345',
                'bin_number' => '67890',
                'status' => '1',
                'notes' => 'Notes for Supplier 2',
            ],
            [
                'supplier_title' => 'BookWorld ',
                'owner_name' => 'Owner 3',
                'contact_person' => 'Contact Person 3',
                'email' => 'supplier3@example.com',
                'phone' => '323-456-7890',
                'address' => '323 Main Street',
                'tax' => '32345',
                'bin_number' => '34540',
                'status' => '1',
                'notes' => 'Notes for Supplier 3',
            ],
            [
                'supplier_title' => 'SportsGear ',
                'owner_name' => 'Owner 4',
                'contact_person' => 'Contact Person 4',
                'email' => 'supplier4@example.com',
                'phone' => '43-456-7890',
                'address' => '43 Main Street',
                'tax' => '43445',
                'bin_number' => '67890',
                'status' => '1',
                'notes' => 'Notes for Supplier 4',
            ],
            [
                'supplier_title' => 'SportsGear ',
                'owner_name' => 'Owner 5',
                'contact_person' => 'Contact Person 5',
                'email' => 'supplier5@example.com',
                'phone' => '523-456-7890',
                'address' => '523 Main Street',
                'tax' => '52345',
                'bin_number' => '67890',
                'status' => '0',
                'notes' => 'Notes for Supplier 5',
            ],
            [
                'supplier_title' => 'ApplianceMaster ',
                'owner_name' => 'Owner 6',
                'contact_person' => 'Contact Person 6',
                'email' => 'supplier6@example.com',
                'phone' => '63-456-7890',
                'address' => '63 Main Street',
                'tax' => '6345',
                'bin_number' => '67890',
                'status' => '1',
                'notes' => 'Notes for Supplier 6',
            ],
            // Add more supplier data as needed
        ];

        foreach ($suppliers as $supplierData) {
            Supplier::create($supplierData);
        }
    }
}
