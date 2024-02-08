<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use App\Models\Korisnik;

class KorisnikController extends Controller
{
    public function index()
    {
        $korisnik = Korisnik::all();
        return response()->json($korisnik); 
        $lozinka = Input::get('lozinka'); // password is form field
        $hashed = Hash::make($lozinka);
    }   
    public function store(Request $request)
    {
        $korisnik = new Korisnik([
            'korisničko_ime' => $request->input('korisničko_ime'),
            'mail' => $request->input('mail'),
            'lozinka' => $request->input('lozinka'),
            
        ]);
        
        
        $korisnik->save();
        return response()->json('Korisnik kreiran!');
    }
    public function show($id)
    {
        $contact = Korisnik::find($id);
        return response()->json($contact);
    }
    public function update(Request $request, $id)
    {
       $korisnik = Korisnik::find($id);
       $korisnik->update($request->all());
       return response()->json('Korisnik ažuriran');
    }
    public function destroy($id)
    {
        $korisnik = Korisnik::find($id);
        $korisnik->delete();
        return response()->json('Korisnik izbrisan!');
    }
}
