<?php

namespace Tests\Feature\Auth;

namespace App\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class DatabaseDosenTest extends TestCase
{
    use DatabaseTransactions;

    // Function untuk testing insert data dosen ke dalam tabel dosen
    public function test_insert_into_tabel_dosen()
    {
        $dosen = Dosen::create([
            'nipy' => '033',
            'nidn' => '0528058401',
            'nama' => 'Jefree Fahana, ST., M.Kom.',
            'jabfung' => 'AA',
            'email_dosen' => 'jefree.fahana@tif.uad.ac.id',
            'avatar' => 'jefree.jpg'
        ]);

        $this->assertEquals('033', $dosen->nipy);
        $this->assertEquals('0528058401', $dosen->nidn);
        $this->assertEquals('Jefree Fahana, ST., M.Kom.', $dosen->nama);
        $this->assertEquals('AA', $dosen->jabfung);
        $this->assertEquals('jefree.fahana@tif.uad.ac.id', $dosen->email_dosen);
        $this->assertEquals('jefree.jpg', $dosen->avatar);
    }
}
