<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WritersController extends Controller
{
    public function index()
    {
        return view('writer', [
            'pagetitle' => 'My Library',
            'maintitle' => 'Writers in my library',
            'writers' => Writer::index()
        ]);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
        return view('show', [
            'pagetitle' => 'Writer',
            'maintitle' => 'The Writer',
            'writers' => Writer::showWriter($id)
        ]);
    }

    public function edit(Writer $writer)
    {
    }

    public function update(Request $request, Writer $writer)
    {
    }

    public function destroy(Writer $writer)
    {
    }
}
