<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\About;

use App\Models\SocialMedia;
use App\Models\Announcement;
use App\Models\Facility;
use App\Models\FacilityRoomType;
use App\Models\Room;
use App\Models\RoomType;
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
            "name" => "Kolonial Guest House",
            "alias" => "Kolonial",
            "logo_primary" => "logo/8rouWucLQP5qopgan97SsFBeKFC3DGVYlKtOSfZ2.png",
            "logo_secondary" => "logo/cFL2sBqkFBNZJL78WzY6Zv6l0Qrew7i2oU4rDuQX.png",
            "header_img" => "header-img/eKrTENCaoOArd4MxWuxrCYZ2Wl9rN1pcOeF2qwGu.jpg",
            "about_img" => "about-img/XhtbyC9bbItAUzpYGeSFpnvi9IVGrPVNkEO8MmuT.jpg",
            "icon" => "logo/icon/005StjST0Vws6ZROzGzakU9krV1EpV7L14jAM5II.png",
            "motto" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit.",
            "short_descript" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt rerum fugiat distinctio consequuntur sequi illo optio tempora beatae rem! Itaque facilis laboriosam praesentium delectus accusamus voluptates fugiat autem vero aut eum exercitationem esse aperiam quisquam porro nobis doloremque cumque, consequatur blanditiis reprehenderit. Obcaecati perferendis sequi voluptatibus dolor nihil in repellendus explicabo autem excepturi? Inventore neque assumenda error accusantium placeat est corporis ullam repellat soluta, rem, ex reprehenderit, facere explicabo eveniet tenetur pariatur esse quas atque? Fuga, quos id soluta impedit ducimus minus, veniam possimus veritatis nisi ad qui, sapiente expedita! Excepturi voluptate reprehenderit impedit, recusandae possimus aspernatur. Illo, nobis aspernatur?",
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

        Announcement::create([
            'title' => 'Pengumuman',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis eos optio vel nam consectetur ullam sit maiores necessitatibus commodi neque cupiditate alias sint consequatur ab, et provident quia error ad.',
            'status' => 'aktif'
        ]);

        User::create([
            'image' => "profile/d.candra/E2mvGEwQVFwRQzXsd9uQAnrLV5u8mzES69ikwVf3.png",
            'name' => "Dimas Candra Pebriyanto",
            'username' => "d.candra",
            'email' => "dimascndraa18@gmail.com",
            'address' => "Panyingkiran, Jatitujuh",
            'hp' => "6283865284307",
            'whatsapp' => true,
            'password' => bcrypt('password'),
            'level' => 'admin',
            'status' => 'aktif',
        ]);
        User::create([
            'name' => "Dimas Candra",
            'username' => "dmscndraa",
            'email' => "dimasbomz13@gmail.com",
            'address' => "Panyingkiran, Jatitujuh",
            'hp' => "6283865284307",
            'whatsapp' => true,
            'password' => bcrypt('password'),
            'level' => 'user',
            'status' => 'aktif',
        ]);

        Facility::create([
            'name' => 'Air Conditioner',
            'icon' => 'facility-icon/4a6bP3tWDKBF46dKCPewr1zVkU7NGhWuBnV81yrX.png',
            'descript' => '<div>&nbsp;Air Conditioner&nbsp;</div>',
            'status' => '1',
        ]);

        Facility::create([
            'name' => 'Bathtub',
            'icon' => 'facility-icon/p3xUhPvh3xN6bs0VHrzwmYMqBwIGGRMMIPlbPn7n.png',
            'descript' => '<div>Bathtub</div>',
            'status' => '1',
        ]);

        Facility::create([
            'name' => 'Breakfast',
            'icon' => 'facility-icon/gLEcRkn6YjPDHgSZBdCOKyHTJuu95POONNl3Ow4x.png',
            'descript' => '<div>&nbsp;Breakfast&nbsp;</div>',
            'status' => '1',
        ]);

        Facility::create([
            'name' => 'Computer',
            'icon' => 'facility-icon/zJjX2ZWYC4kNqBIg7C6Br3kQwpcqQZWMDmazfp5b.png',
            'descript' => '<div>&nbsp;Computer&nbsp;</div>',
            'status' => '1',
        ]);

        Facility::create([
            'name' => 'First Aid Kit',
            'icon' => 'facility-icon/19vxwBxwWBAX1WCT6vdu8tzApKP8MtRlwatq9DoB.png',
            'descript' => '<div>&nbsp;First Aid Kit&nbsp;</div>',
            'status' => '1',
        ]);

        RoomType::create([
            'name' => "Superior",
            'cost_per_day' => 410000,
            'discount_percentage' => 0,
            'size' => 15,
            'max_adult' => 2,
            'max_child' => 1,
            'descript' => "<div> Superior </div>",
        ]);

        RoomType::create([
            'name' => "Deluxe",
            'cost_per_day' => 450000,
            'discount_percentage' => 0,
            'size' => 20,
            'max_adult' => 4,
            'max_child' => 2,
            'descript' => "<div> Deluxe </div>",
        ]);

        FacilityRoomType::create([
            'facility_id' => 1,
            'room_type_id' => 1
        ]);
        FacilityRoomType::create([
            'facility_id' => 2,
            'room_type_id' => 1
        ]);
        FacilityRoomType::create([
            'facility_id' => 3,
            'room_type_id' => 1
        ]);
        FacilityRoomType::create([
            'facility_id' => 4,
            'room_type_id' => 1
        ]);
        FacilityRoomType::create([
            'facility_id' => 5,
            'room_type_id' => 1
        ]);
        FacilityRoomType::create([
            'facility_id' => 1,
            'room_type_id' => 2
        ]);
        FacilityRoomType::create([
            'facility_id' => 2,
            'room_type_id' => 2
        ]);
        FacilityRoomType::create([
            'facility_id' => 3,
            'room_type_id' => 2
        ]);
        FacilityRoomType::create([
            'facility_id' => 4,
            'room_type_id' => 2
        ]);
        FacilityRoomType::create([
            'facility_id' => 5,
            'room_type_id' => 2
        ]);

        Room::create([
            'room_number' => '01',
            'description' => 'Kamar Superior Nomor 01',
            'status' => 1,
            'room_type_id' => 1,
        ]);
        Room::create([
            'room_number' => '02',
            'description' => 'Kamar Superior Nomor 02',
            'status' => 1,
            'room_type_id' => 1,
        ]);
        Room::create([
            'room_number' => '03',
            'description' => 'Kamar Superior Nomor 03',
            'status' => 1,
            'room_type_id' => 1,
        ]);
        Room::create([
            'room_number' => '04',
            'description' => 'Kamar Superior Nomor 04',
            'status' => 1,
            'room_type_id' => 1,
        ]);
        Room::create([
            'room_number' => '05',
            'description' => 'Kamar Superior Nomor 05',
            'status' => 1,
            'room_type_id' => 1,
        ]);
        Room::create([
            'room_number' => '06',
            'description' => 'Kamar Deluxe Nomor 06',
            'status' => 1,
            'room_type_id' => 2,
        ]);
        Room::create([
            'room_number' => '07',
            'description' => 'Kamar Deluxe Nomor 07',
            'status' => 1,
            'room_type_id' => 2,
        ]);
        Room::create([
            'room_number' => '08',
            'description' => 'Kamar Deluxe Nomor 08',
            'status' => 1,
            'room_type_id' => 2,
        ]);
        Room::create([
            'room_number' => '09',
            'description' => 'Kamar Deluxe Nomor 09',
            'status' => 1,
            'room_type_id' => 2,
        ]);
        Room::create([
            'room_number' => '10',
            'description' => 'Kamar Deluxe Nomor 10',
            'status' => 1,
            'room_type_id' => 2,
        ]);
    }
}
