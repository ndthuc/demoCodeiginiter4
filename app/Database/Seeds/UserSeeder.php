<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
            $data = [
                [
                    'name' => 'John Doe',
                    'email'    => 'john@gmail.com'
                ],
                [
                    'name' => 'Vanya Hargreeves',
                    'email'    => 'vanya@gmail.com'
                ]
                ,
                [
                    'name' => 'Luther Hargreeves',
                    'email'    => 'luther@gmail.com'
                ],
                [
                    'name' => 'Diego Hargreeves',
                    'email'    => 'diego@gmail.com'
                ],
                [
                    'name' => 'Klaus Hargreeves',
                    'email'    => 'klaus@gmail.com'
                ],
                [
                    'name' => 'Ben Hargreeves',
                    'email'    => 'ben@gmail.com'
                ],
                [
                    'name' => 'The Handler',
                    'email'    => 'handler@gmail.com'
                ]
            ];

            
                // // Simple Queries
                // $this->db->query("INSERT INTO users (name, email) VALUES(:name:, :email:)",
                //         $data
                // );

                // Using Query Builder
            $this->db->table('users')->insertBatch($data);
        }
}