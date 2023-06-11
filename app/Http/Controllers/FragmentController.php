<?php

namespace App\Http\Controllers;

use App\Models\Fragment;
use Illuminate\Http\Request;

class FragmentController extends Controller
{
    public function show(Fragment $fragment)
    {
        return view('public.show', compact('fragment'));
    }
}
