<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Infrastruktur;
use App\Models\Role;
use App\Models\Ruangan;
use App\Models\User;
use Carbon\Carbon;
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
        // INI BUAT GENERATE NAMA RUANGAN
        $alphabet = ['A','B','C','D','E'];
        for ($i=0; $i < count($alphabet); $i++) { 
            Ruangan::create([
                'nama_ruangan' => 'Ruangan '.$alphabet[$i]
            ]);
        }

        // INI BUAT GENERATE NAMA ROLE (ADMIN & PENGGUNA)
        for ($i=0; $i < 2; $i++) { 
            Role::create([
                'nama_role' => $i%2==0 ? 'admin' : 'pengguna'
            ]);
        }

        // INI BUAT GENERATE ADMIN & PENGGUNA
        for ($i=0; $i < 2; $i++) { 
            User::create([
                'id_role' => $i%2==0 ? 1 : 2,
                'nama' => $i%2==0 ? 'Admin User' : 'Pengguna User',
                'username' => $i%2==0 ? 'iniadmin' : 'inipengguna',
                'email' => $i%2==0 ? 'admin@gmail.com' : 'pengguna@gmail.com',
                'password' => Hash::make('password')
            ]);
        }

        // INI BUAT GENERATE PENGGUNA (8 ORG)
        for ($i=0; $i < 8; $i++) { 
            User::create([
                'id_role' => 2,
                'nama' => fake('id_ID')->name(),
                'username' => fake('id_ID')->userName(),
                'email' => fake('id_ID')->email(),
                'password' => Hash::make('password')
            ]);
        }

        // INI BUAT GENERATE INFRASTRUKTUR (10 BRG RANDOM, RANDOM PENGGUNA, RANDOM RUANG)
        $barang = ['Kamera','Laptop','Tripod','Komputer','Dokumen','Lightning','Map'];
        for ($i=0; $i < 10; $i++) { 
            Infrastruktur::create([
                'id_user' => rand(3,10),
                'id_ruang' => rand(1,5),
                'nama_barang' => $barang[rand(0,6)],
                'tgl_mulai' => fake()->date(),
                'tgl_selesai' => fake()->date()
            ]);
        }
        
    }
}
