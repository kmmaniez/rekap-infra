<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Infrastruktur;
use App\Models\Role;
use App\Models\Ruangan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $alphabet = ['A','B','C','D','E'];
        for ($i=0; $i < count($alphabet); $i++) { 
            Ruangan::create([
                'nama_ruangan' => 'Ruangan '.$alphabet[$i]
            ]);
        }

        for ($i=0; $i < 2; $i++) { 
            Role::create([
                'nama_role' => $i%2==0 ? 'admin' : 'pengguna'
            ]);
        }

        for ($i=0; $i < 2; $i++) { 
            User::create([
                'id_role' => $i%2==0 ? 1 : 2,
                'name' => $i%2==0 ? 'Admin User' : 'Pengguna User',
                'email' => $i%2==0 ? 'admin@gmail.com' : 'pengguna@gmail.com',
                'password' => Hash::make('password')
            ]);
        }

        for ($i=0; $i < 10; $i++) { 
            User::create([
                'id_role' => 2,
                'name' => fake('id_ID')->name(),
                'email' => fake('id_ID')->email(),
                'password' => Hash::make('password')
            ]);
        }

        $barang = ['Kamera','Laptop','Tripod','Komputer','Dokumen'];
        for ($i=0; $i < 10; $i++) { 
            Infrastruktur::create([
                'id_user' => rand(3,12),
                'id_ruang' => rand(1,5),
                'nama_barang' => 'Barang '.$barang[rand(0,4)],
                'tanggal_dipakai' => fake()->date()
            ]);
        }
        
    }
}
