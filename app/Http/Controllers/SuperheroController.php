<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SuperheroController extends Controller
{
    public function index()
    {
        $superheroes = \App\Superhero::orderby('name', 'asc')->get();

        $view = view('superhero/index');
        $view->superheroes = $superheroes;
        return $view;
    }


    public function show($superhero_slug)
    {
        $superhero = \App\Superhero::where('slug', $superhero_slug)->first();

        if (!$superhero) {
            abort(404, 'Superhero not found');
        }

        $view = view('superhero/show');
        $view->superhero = $superhero;
        return $view;
    }

    public function emergency(Request $request, $slug)
    {
        $superhero_id = \App\Superhero::where('slug', $slug)->pluck('id');
        $subject = $request->input('subject');
        $description = $request->input('description');

        $emergency = \App\Emergency::create([
            'superhero_id' => $superhero_id,
            'user_id' => auth()->user()->id,
            'subject' => $subject,
            'description' => $description
         ]);

         return redirect(action('SuperheroController@show', $slug));
        
    }
}
