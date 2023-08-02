<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ControllerTest extends TestCase
{
    public function testKategoriRequest()
    {
        // $this->post('/kategori', ['kategori' => 'infaq'])
        //     ->assertSeeText('infaq');
        $this->post('/kas', ['kategori' => '1'])
            ->assertSeeText('1');
    }

    // public function kasControllerTest()
    // {
    //     $this->post('/kas', ['kategori' => '1'])
    //         ->assertSeeText('2');
    // }
}
