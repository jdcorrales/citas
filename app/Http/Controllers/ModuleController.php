<?php

namespace App\Http\Controllers;

use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    public $modules = [];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $this->modules = $this->children();

        return response()->json($this->modules);
    }

    public function children($parent = null, $branch = [])
    {
        $modules = Module::where('parent', $parent)
            //->orderBy('orden', 'asc')
            ->get();

        $tree = [];

        foreach ($modules as $module) {
            if ($module->parent == $parent) {
                $branch = $module;
                $children = $this->children($module->id, $tree);

                if ($children) {
                    $branch['children'] = $children;
                }

                $tree[] = $branch;
            }
        }

        return $tree;
    }
}
