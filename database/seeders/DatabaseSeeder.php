<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => 999999999,
            'avatar' => 'https://www.getillustrations.com/photos/pack/3d-avatar-male_lg.png',
            'full_name' => 'Trần Trung Kiên',
            'email' => 'kienhee.it@gmail.com',
            'phone_number' => "+84 376 1736 28",
            'fb' => 'https://www.facebook.com/kien.itt/',
            'ins' => 'https://www.instagram.com/kienhee.it/',
            'linkedin' => 'https://www.linkedin.com/in/kien-hee/',
            'web' => 'https://kienhee.com/',
            'address' => 'Alley 63 Le Duc Tho, My Dinh 2, Nam Tu Liem, Hanoi',
            'description' => 'Freelance  & Full Stack Developer',
            'content' => 'My name is Tran Trung Kien',
            'skills' => 'JavaScription',
            'password' => Hash::make('trantrungkien202'),
            'created_at' => Date('y-m-d h:m:s'),
            'updated_at' => Date('y-m-d h:m:s'),

        ]);
        DB::table('categories')->insert([
            [
                'id' => 1, 'name' => "Web",
            ],
            [
                'id' => 3, 'name' => "Design",
            ]
        ]);
        $technologies = [
            ['id' => 1, 'name' => 'HTML'],
            ['id' => 2, 'name' => 'CSS'],
            ['id' => 3, 'name' => 'JavaScript'],
            ['id' => 4, 'name' => 'React.js'],
            ['id' => 5, 'name' => 'Vue.js'],
            ['id' => 6, 'name' => 'Angular'],
            ['id' => 7, 'name' => 'Node.js'],
            ['id' => 8, 'name' => 'Express.js'],
            ['id' => 9, 'name' => 'MongoDB'],
            ['id' => 10, 'name' => 'MySQL'],
            ['id' => 11, 'name' => 'PostgreSQL'],
            ['id' => 12, 'name' => 'PHP'],
            ['id' => 13, 'name' => 'Laravel'],
            ['id' => 14, 'name' => 'Symfony'],
            ['id' => 15, 'name' => 'Ruby'],
            ['id' => 16, 'name' => 'Ruby on Rails'],
            ['id' => 17, 'name' => 'Python'],
            ['id' => 18, 'name' => 'Django'],
            ['id' => 19, 'name' => 'Flask'],
            ['id' => 20, 'name' => 'Java'],
            ['id' => 21, 'name' => 'Spring Framework'],
            ['id' => 22, 'name' => 'Kotlin'],
            ['id' => 23, 'name' => 'Swift'],
            ['id' => 24, 'name' => 'iOS'],
            ['id' => 25, 'name' => 'Android'],
            ['id' => 26, 'name' => 'Firebase'],
            ['id' => 27, 'name' => 'AWS'],
            ['id' => 28, 'name' => 'Docker'],
            ['id' => 29, 'name' => 'Kubernetes'],
            ['id' => 30, 'name' => 'Blockchain'],
            ['id' => 31, 'name' => 'Machine Learning'],
            ['id' => 32, 'name' => 'Artificial Intelligence'],
            ['id' => 33, 'name' => 'Big Data'],
            ['id' => 34, 'name' => 'IoT (Internet of Things)'],
            ['id' => 35, 'name' => 'AR (Augmented Reality)'],
            ['id' => 36, 'name' => 'VR (Virtual Reality)'],
            ['id' => 37, 'name' => 'Cybersecurity'],
            ['id' => 38, 'name' => 'DevOps'],
            ['id' => 39, 'name' => 'Microservices'],
            ['id' => 40, 'name' => 'GraphQL'],
            ['id' => 41, 'name' => 'RESTful API'],
            ['id' => 42, 'name' => 'Serverless Computing'],
            ['id' => 43, 'name' => 'Data Science'],
            ['id' => 44, 'name' => 'Cloud Computing'],
            ['id' => 45, 'name' => 'Rust'],
            ['id' => 46, 'name' => 'Golang (Go)'],
            ['id' => 47, 'name' => 'TensorFlow'],
            ['id' => 48, 'name' => 'Vue.js'],
            ['id' => 49, 'name' => 'Tailwind CSS'],
        ];

        DB::table('tags')->insert($technologies);
    }
}
