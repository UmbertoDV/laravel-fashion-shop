<?php

namespace App\Http\Controllers;

use App\Models\Shoes;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class ShoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shoes = Shoes::all();
        // dd($shoes);
        return view('shoes.index', compact('shoes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shoes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $shoe = new Shoes;
        $shoe->fill($data);
        $shoe->img = 'https://picsum.photos/200/300';

        $shoe->save();

        return redirect ()->route('shoes.show', $shoe);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function show(Shoes $shoe)
    {
        return view('shoes.show', compact('shoe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoes $shoe)
    {
        return view('shoes.edit', compact('shoe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoes $shoe)
    {
        $data = $request->all();

        $shoe->update($data);
        
        return redirect() ->route('shoes.show', $shoe);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoes  $shoes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoes $shoe)
    {
        $shoe->delete();
        return redirect ()-> route("shoes.index");
    }
}