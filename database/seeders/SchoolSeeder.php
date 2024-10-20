<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('schools')->insert([ 'image' => 'img/genebra1.jpg', 'title' => 'São Francisco I',  'phone' => '21 3254-6293', 'address' => 'Av. Rui Barbosa, 391, São Francisco, Niterói - RJ', 'urlScheduleVisite' => 'https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20S%C3%A3o%20Francisco%20II.%20', 'urlHowToGetThere' => 'https://maps.app.goo.gl/d4EFysa6kfi5HmnZ7', 'enrollment' => 'https://escolacrista148114.rm.cloudtotvs.com.br/FrameHTML/Web/App/Edu/PortalProcessoSeletivo/?c=1&f=1#/eb/informacoes' ]);
        DB::table('schools')->insert([ 'image' => 'img/genebra2.jpg', 'title' => 'Icaraí I',         'phone' => '21 2610-1144', 'address' => 'Av. Sete de Setembro, 157, Icaraí, Niterói - RJ',   'urlScheduleVisite' => 'https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20Icara%C3%AD%20I',               'urlHowToGetThere' => 'https://maps.app.goo.gl/MXV22TjDBEXARhTr6', 'enrollment' => 'https://escolacrista148114.rm.cloudtotvs.com.br/FrameHTML/Web/App/Edu/PortalProcessoSeletivo/?c=2&f=1#/eb/informacoes' ]);
        DB::table('schools')->insert([ 'image' => 'img/genebra3.jpg', 'title' => 'São Francisco II', 'phone' => '21 3254-4703', 'address' => 'Rua Tamoios, 32, São Francisco, Niterói - RJ',      'urlScheduleVisite' => 'https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20S%C3%A3o%20Francisco%20II.%20', 'urlHowToGetThere' => 'https://maps.app.goo.gl/d4EFysa6kfi5HmnZ7', 'enrollment' => 'https://escolacrista148114.rm.cloudtotvs.com.br/FrameHTML/Web/App/Edu/PortalProcessoSeletivo/?c=1&f=2#/eb/informacoes' ]);
        DB::table('schools')->insert([ 'image' => 'img/genebra5.jpg', 'title' => 'Icaraí II',        'phone' => '21 2610-1144', 'address' => 'Av. Sete de Setembro, 296, Icaraí, Niterói – RJ',   'urlScheduleVisite' => 'https://wa.me/552127105028?text=Ol%C3%A1!%20Gostaria%20de%20agendar%20uma%20visita%20a%20unidade%20de%20Icara%C3%AD%20I',               'urlHowToGetThere' => 'https://maps.app.goo.gl/7eWpCTCRXqZdoZQ18', 'enrollment' => 'https://escolacrista148114.rm.cloudtotvs.com.br/FrameHTML/Web/App/Edu/PortalProcessoSeletivo/?c=3&f=1#/eb/informacoes' ]);
    }
}
