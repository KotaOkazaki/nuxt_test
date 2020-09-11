<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Spot;

class SpotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$response = array();
        //$spotQuery = Spot::query();
        //$spots = $spotQuery->get();
        //$response['spots'] = $spots;
        //$response['message'] = 'success';
        //return new JsonResponse($response);
        //return $response;
        $response = Spot::all();
        return $response->toArray();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spot = new Spot;
        $form = $request->all();
        unset($form['_token']);
        $spot->fill($form)->save();
        return redirect('api/spot');
        /*$spot->place = $request->input('place');
        $spot->address =$request->input('address');
        $spot->budget = $request->input('budget');
        $spot->averageTime =$request->input('averageTime');
        $spot->regularHoliday = $request->input('regularHoliday');
        $spot->businessHours =$request->input('businessHours');
        $spot->genre = $request->input('genre');
        $spot->keyword =$request->input('keyword');
        $spot->season = $request->input('season');
        $spot->title =$request->input('title');
        $spot->overview = $request->input('overwiew');
        $spot->comment =$request->input('comment');
        $spot->like = $request->input('like');
        $spot->save();*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $response = Spot::find($id);
        return $response->toArray();

    }
    public function create()
    {
        return view('spotCreate');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
