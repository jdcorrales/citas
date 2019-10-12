<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

//Models
use App\Models\Module;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $modules = [
            [
                'descripcion'=> 'navbar',
                'name'=> 'Navbar',
                'children'=> [
                    [
                        'name'=> 'Usuario',
                        'class'=> 'img-avatar',
                        'image' => '/img/avatars/6.jpg',
                        'children'=> [
                            [
                                'title'=> true,
                                'name'=> 'Account',
                                'class'=> 'text-center'
                            ],
                            [
                                'name'=> 'Logout',
                                'icon'=> 'fa fa-lock',
                                'method'=> 'logout'
                            ]
                        ]
                    ]
                ]
            ]
        ];

        foreach ($modules as $module) {
            $this->addModule($module);
        }
    }

    public function addModule($module, $parent = null)
    {
        $data  = $module;
        $data['parent'] = $parent;
        $data['descripcion'] = isset($data['descripcion'])? $data['descripcion'] : Str::snake($data['name']);
        unset($data['children']);

        $_module = Module::firstOrCreate(['descripcion' => $data['descripcion']], $data);

        if(array_key_exists('children', $module)) {
            foreach ($module['children'] as $_module_) {
                $this->addModule($_module_, $_module->id);
            }
        }
    }
}
