<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use App\Models\GuestDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminDashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('admin')){
            return $this->create();
        }
        return \redirect()->back()->withErrors(['email' => 'The provided credentials do not match our records.']);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guest = DB::table('guest_details')
        ->join('programs', 'programs.Program_ID', '=', 'guest_details.Program ID')
        ->select()
        ->get();
                                    
        return view('admin_profile',['guest'=>$guest]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'dob'=>'required',
            'adult'=>'min:1|max:20|numeric',
            'child'=>'max:20|numeric',
            'activities'=>'required',
            'destination'=>'required',
            'date_travel'=>'required',
        ]);
        $walk_in = 0;
        $credit = 1;
        if ($request->destination == "WI"){
            $walk_in = 1;
            $credit = 0;
        }
        $date = \date_create($request->date_travel);
        $dob =  date_create($request->dob);


        $guest_check = GuestDetail::where('First_name', $request->first_name)
            ->where('Last_name', $request->last_name)
            ->where('Reservation_Date', $date)
            ->where('Booking_Date', now()->toDateString())
            ->count();

            // dd($guest_check);
        if ($guest_check != 0){
            if ($request->child != 0){
                GuestDetail::where('First_name', $request->first_name)
                ->where('Last_name', $request->last_name)
                 ->where('Reservation_Date', $date)
                ->where('Booking_Date', now()->toDateString())
                 ->increment('N_Adults', $request->adult);
                

                GuestDetail::where('First_name', $request->first_name)
                ->where('Last_name', $request->last_name)
                ->where('Reservation_Date', $date)
                ->where('Booking_Date', now()->toDateString())
                ->increment('N_Child', $request->child);

                // DB::table('guest_details')->increment('N_Child', $request->child, ['First_name' => $request->first_name, 'Last_name'=>$request->last_name,'Reservation_Date'=>$date]);
            }else{
                GuestDetail::where('First_name', $request->first_name)
            ->where('Last_name', $request->last_name)
            ->where('Reservation_Date', $date)
            ->where('Booking_Date', now()->toDateString())
            ->increment('N_Adults', $request->adult );
            }        
        }else{
            
        $guest = new GuestDetail();
        $guest->First_name = $request->first_name;
        $guest->Last_name = $request->last_name;
        $guest->N_Adults = $request->adult;
        $guest->N_Child = $request->child;
        $guest->{'Program ID'} = $request->activities;
        $guest->{'Hotel Name'} = $request->hotel;
        $guest->{'Tour Company'} = $request->destination;
        $guest->Reservation_Date = $date;
        $guest->Booking_Date = \now();
        $guest->Walkings = $walk_in;
        $guest->Credit = $credit;

        $guest->save();
        }

        $guest_count = Guest::where('FirstName', $request->first_name)->where('LastName',$request->last_name)->count();
        $guest_unique_id = "AB1";
        $i = 1;

        if ($guest_count == 0){
            while (Guest::where('Guest_ID',$guest_unique_id)->count() == 1){
                $guest_unique_id = "AB".$i++;
            }

            $g = new Guest();
            $g->Guest_ID = $guest_unique_id;
            $g->FirstName = $request->first_name;
            $g->LastName = $request->last_name;
            $g->DOB = $dob;
            $g->save();
        }
        return redirect('/')->withSuccess('Successfully Booked! Enjoy your trip '.$request->first_name.' '.$request->last_name);

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
