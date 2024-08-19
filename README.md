    Intro to your project: 1 Paragraph
    Using an existing database and tables to show characters and weapons from a game that I play.
    
    Explain the features and database schema: 1-3 Paragraphs
    Database schema: one to one relationship between characters and weapons, i.e., one character can only have one weapon, and each weapon can only be wielded by one character at a time. 
    Note: There can be duplicates of weapons, so you can in actuality have multiple of the same weapon and many characters can each have one. But in entity relation terms, one to one.
    
    Add 4-10 screenshots to demo the user flow
    N/A
    
    If you were unable to complete the assignment, explain what you wanted to do and why you couldn't complete it - 1-2 paragraphs
    I think the database wasn't being connected to the application. The connection credentials are correct. At first I tried to use
    the data from the existing table, but then tried to use the database seeder. Still, I got this error:
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
    
    I had the same problem for both of my tables, and so nothing displays.
    
    Your thoughts on Laravel and if you wanted to cover anything else in the class to supplement your learnings - 1 paragraph
    I wish we learned how to use tables/databases with existing data in our projects.
    
