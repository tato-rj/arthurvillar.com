<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProjectsController extends Controller
{
    public function file(Request $request)
    {
        $file = request()->file('file');
        $filename = '/upload/file.jpeg';
        Storage::put($filename, File::get($file));
        return back();
    }
}
