<?php

namespace Database\Seeders;

use App\Models\About;
use App\Models\SocialMedia;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        About::create([
            "name" => "Colonial Guest House",
            "alias" => "Kolonial",
            "logo_primary" => "",
            "logo_secondary" => "",
            "icon" => "",
            "header_img" => "",
            "about_img" => "",
            "address" => "Jl. Brawijaya Desa No.01, RT.04/RW.08, Kadipaten, Kec. Kadipaten, Kabupaten Majalengka, Jawa Barat 45452",
            "google_maps" => "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0508156150363!2d108.16738675117112!3d-6.76365886799851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f29ad694bb385%3A0xa5a96d4ab293e0a8!2sRedDoorz%20Syariah%20%40%20Kolonial%20Guest%20House!5e0!3m2!1sid!2sid!4v1676963649817!5m2!1sid!2sid",
            "telp" => "123",
        ]);

        SocialMedia::create([
            "facebook" => "facebook",
            "instagram" => "instagram",
            "whatsapp" => "whatsapp",
            "twitter" => "twitter",
            "youtube" => "youtube",
        ]);
    }
}
