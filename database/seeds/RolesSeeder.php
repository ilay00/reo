<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author=\App\Models\Role::create([
            'name'=>'Author',
            'slug'=> 'author',
            'permissions'=>[
              'create-post'=>true,
               'edit-post'=>true,
                    'publish'=>true

            ]
              ]);
                /* при создании пользевателя удолить в роле Author  'edit-post'=>true,
                 *  и    'publish'=>true 
                 */

              $editor=\App\Models\Role::create([
                'name'=>'Editor',
                'slug'=>'editor',
                'permissions'=>[
                    'edit-post'=>true,
                    'publish'=>true
                ]
             ]);
    }
}
