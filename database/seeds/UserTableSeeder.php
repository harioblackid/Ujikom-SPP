<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Siswa;
use App\Kelas;
use App\Spp;
use App\Pembayaran;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
         ]);
         
         User::create([
            'name' => 'petugas',
            'email' => 'petugas@gmail.com',
            'password' => Hash::make('petugas'),
            'level' => 'petugas',
            'created_at' => now(),
            'updated_at' => now()
         ]);

        Kelas::create([
            'nama_kelas' => 'XII RPL',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
        ]);

        Kelas::create([
            'nama_kelas' => 'XII MM',
            'kompetensi_keahlian' => 'Multimedia'
        ]);

        Kelas::create([
            'nama_kelas' => 'XII TKJ',
            'kompetensi_keahlian' => 'Teknik Komputer dan Jaringan'
        ]);

        Spp::create([
            'tahun' => 2019,
            'nominal' => 250000
        ]);

        Spp::create([
            'tahun' => 2020,
            'nominal' => 250000
        ]);

        Spp::create([
            'tahun' => 2021,
            'nominal' => 250000
        ]);

        Siswa::create([
            'nisn' => '123456789000',
            'nis'  => '22373687',
            'nama' => 'Apriani Lestari',
            'id_kelas' => 1,
            'nomor_telp' => '089689957106',
            'alamat' => 'Bogor',
            'id_spp' => 2
        ]);

        Siswa::create([
            'nisn' => '123456789876',
            'nis'  => '22373600',
            'nama' => 'Apriani',
            'id_kelas' => 2,
            'nomor_telp' => '089689957100',
            'alamat' => 'Bogor',
            'id_spp' => 1
        ]);

        Siswa::create([
            'nisn' => '123456789999',
            'nis'  => '22373622',
            'nama' => 'Apri',
            'id_kelas' => 3,
            'nomor_telp' => '089689957121',
            'alamat' => 'Bogor',
            'id_spp' => 3
        ]);

        Pembayaran::create([
            'id_petugas' => 2,
            'id_siswa' => 1,
            'spp_bulan' => 'januari',
            'jumlah_bayar' => 250000

        ]);

        Pembayaran::create([
            'id_petugas' => 2,
            'id_siswa' => 2,
            'spp_bulan' => 'maret',
            'jumlah_bayar' => 250000

        ]);

        Pembayaran::create([
            'id_petugas' => 2,
            'id_siswa' => 3,
            'spp_bulan' => 'februari',
            'jumlah_bayar' => 250000

        ]);
    }
}
