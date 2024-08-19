<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Character;
use App\Models\User;
use App\Models\Weapon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // Character::factory()->create([
        //   'name' => 'Changli',
        //   'rarity' => '5',
        //   'element' => 'fusion',
        //   'weapon_class' => 'sword',
        //   'description' => "Changli is a counselor serving the Jinzhou Magistrate, and former Secretary-General in the capital. Shrouded in flames, she's fated to burn brightly until her final embers. With her fiery determination and strategic mindset, she rises to power, always thinking ahead to reach her ultimate goal.",
        // ]);        

        Character::factory()->count(4)->create();
        Weapon::factory()->count(4)->create();
    }
}

// php artisan migrate:refresh --seed

//    INFO  Rolling back migrations.

//   2024_08_11_205332_create_characters_table ........................ 6ms DONE
//   2019_12_14_000001_create_personal_access_tokens_table ........... 15ms DONE
//   2019_08_19_000000_create_failed_jobs_table ...................... 19ms DONE
//   2014_10_12_100000_create_password_reset_tokens_table ............ 11ms DONE
//   2014_10_12_000000_create_users_table ............................ 14ms DONE


//    INFO  Running migrations.

//   2014_10_12_000000_create_users_table ............................ 68ms DONE
//   2014_10_12_100000_create_password_reset_tokens_table ............ 32ms DONE
//   2019_08_19_000000_create_failed_jobs_table ...................... 66ms DONE
//   2019_12_14_000001_create_personal_access_tokens_table ........... 99ms DONE
//   2024_08_11_205332_create_characters_table ........................ 4ms FAIL

//    Illuminate\Database\QueryException

//   SQLSTATE[42S21]: Column already exists: 1060 Duplicate column name 'id' (Connection: mysql, SQL: alter table `characters` add `id` bigint unsigned not null auto_increment primary key, add `created_at` timestamp null, add `updated_at` timestamp null, add `name` varchar(255) not null, add `rarity` int not null, add `element` varchar(255) not null, add `weapon_class` varchar(255) not null, add `description` text not null)

//   at vendor\laravel\framework\src\Illuminate\Database\Connection.php:829
//     825▕                     $this->getName(), $query, $this->prepareBindings($bindings), $e
//     826▕                 );
//     827▕             }
//     828▕
//   ➜ 829▕             throw new QueryException(
//     830▕                 $this->getName(), $query, $this->prepareBindings($bindings), $e
//     831▕             );
//     832▕         }
//     833▕     }

//   1   vendor\laravel\framework\src\Illuminate\Database\Connection.php:587
//       PDOException::("SQLSTATE[42S21]: Column already exists: 1060 Duplicate column name 'id'")

//   2   vendor\laravel\framework\src\Illuminate\Database\Connection.php:587
//       PDOStatement::execute()