<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Saint;

class MainController extends Controller
{

    // Mostra lista santi ordinati per creazione
    public function home() {
        $saints = Saint::orderBy('created_at', 'DESC') -> get();

        return view('pages.home', compact('saints'));
    }


    // Mostra informazioni singolo santo
    public function saintShow($id) {

        $saint = Saint::find($id);

        $data = [
            'saint' => $saint
        ];

        return view('pages.saintShow', $data);

    }


    // Elimina un santo
    public function saintDestroy($id) {

        $saint = Saint::find($id);

        $saint -> delete();

        return redirect() -> route('home');

    }

    // Crea un nuovo santo
    public function saintCreate() {

        return view('pages.saintCreate');

    }

    // Salva dati del form di un nuovo santo
    public function saintStore(Request $request) {
        $data = $request -> all();

        $saint = new Saint();
        
        $saint -> name = $data['name'];
        $saint -> birth_place = $data['birth_place'];
        $saint -> blessing_date = $data['blessing_date'];
        $saint -> number_of_miracles = $data['number_of_miracles'];

        $saint -> save();

        return redirect() -> route('home');
    }
}
