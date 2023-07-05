<?php

namespace App\Http\Controllers;

use App\Models\rac_teams;
use Illuminate\Http\Request;

class TeamDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $rac_teams = rac_teams::all();
        return view('teams.index', ['rac_teams'=>$rac_teams]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('teams.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        

        $validData = $request->validate([
            'penyiar1' => 'required|max:255',
            'penyiar2' => 'required|max:255',
            'operator' => 'required|max:255',
            'institusi' => 'required|max:255',
            'nims1' => 'required|max:255',
            'nims2' => 'required|max:255',
            'nimop' => 'required|max:255',
            'contact_wa' => 'required|max:255',
            'contact_line' => 'required|max:255',
            'payment_proof' => 'required|image|file|max:10240'
        ]);

        // $team = new rac_teams();
        rac_teams::create([
            'penyiar1'=>$request->penyiar1,
            'penyiar2'=>$request->penyiar2,
            'operator'=>$request->operator,
            'institusi'=>$request->institusi,
            'nims1'=>$request->nims1,
            'nims2'=>$request->nims2,
            'nimop'=>$request->nimop,
            'contact_wa'=>$request->contact_wa,
            'contact_line'=>$request->contact_line,
            'payment_proof'=>$request->file('payment_proof')->storePublicly('payment_images', 'public')
        ]);
        // $team->penyiar1 = $request->penyiar1;
        // $team->penyiar2 = $request->penyiar2;
        // $team->operator = $request->operator;
        // $team->institusi = $request->institusi;
        // $team->nims1 = $request->nims1;
        // $team->nims2 = $request->nims2;
        // $team->nimop = $request->nimop;
        // $team->contact_wa = $request->contact_wa;
        // $team->contact_line = $request->contact_line;
        // $team->payment_proof = $request->file('payment_proof')->storePublicly('payment_images', 'public');
        // $team->save();
        return redirect('/teams')->with('success', "Pendaftaran berhasil.");
    }

    /**
     * Display the specified resource.
     */
    public function show(rac_teams $rac_teams)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rac_teams $rac_teams)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rac_teams $rac_teams)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rac_teams $rac_teams)
    {
        //
    }
}
