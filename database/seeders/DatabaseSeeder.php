<?php

namespace Database\Seeders;

use App\Models\Advert;
use App\Models\AdvertAddress;
use App\Models\AdvertPhoto;
use App\Models\AdvertStatus;
use App\Models\AnimalType;
use App\Models\Locality;
use App\Models\Region;
use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\AdvertFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Role::create([
        //     'name' => 'admin',
        // ]);
        // Role::create([
        //     'name' => 'user',
        // ]);

        // User::create([
        //     'second_name' => 'Балдин',
        //     'first_name' => 'Даниил',
        //     'patronymic' => 'Александрович',
        //     'telephone' => '89125919145',
        //     'email' => 'steiden@mail.ru',
        //     'login' => 'Steiden',
        //     'password' => '!SteidenNew',
        //     'role_id' => 1
        // ]);

        // AnimalType::create([
        //     'name' => 'Кошка',
        // ]);
        // AnimalType::create([
        //     'name' => 'Собака',
        // ]);
        // AnimalType::create([
        //     'name' => 'Попугай',
        // ]);
        // AnimalType::create([
        //     'name' => 'Птица',
        // ]);
        // AnimalType::create([
        //     'name' => 'Хомяк',
        // ]);
        // AnimalType::create([
        //     'name' => 'Рыба',
        // ]);
        // AnimalType::create([
        //     'name' => 'Ящерица',
        // ]);

        // AdvertStatus::create([
        //     'name' => 'На рассмотрении',
        // ]);
        // AdvertStatus::create([
        //     'name' => 'Опубликован',
        // ]);
        // AdvertStatus::create([
        //     'name' => 'Отклонено',
        // ]);
        // AdvertStatus::create([
        //     'name' => 'Закрыто',
        // ]);

        // Region::factory(10)->create();
        Locality::factory(10)->create();
        AdvertAddress::factory(10)->create();
        
        // User::factory(10)->create();
        Advert::factory(10)->create();
        AdvertPhoto::factory(10)->create();
    }
}
