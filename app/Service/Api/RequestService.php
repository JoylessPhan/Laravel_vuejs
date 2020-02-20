<?php
namespace App\Service\Api;

use Illuminate\Http\Request;
use App\Employees;
use App\RequestOff;

class RequestService {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()
            ->json([
                'model' => RequestOff::DataTablePaginate()
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $input              = $request->all();
        $timeOff            = explode(' ~ ', $input['time_off']);
        $intervalTimeStart  = date_format(date_create($timeOff[0]),"d-m-Y H:i:s");
        $intervalTimeEnd    = date_format(date_create($timeOff[1]),"d-m-Y H:i:s");
        dd(date_create($timeOff[0]));
        /*$input = [
            'interval_time_start'   => $intervalTimeStart ?? '',
            'interval_time_end'     => $intervalTimeEnd ?? '',
            'employee_id'           => 1,
        ];*/
/*        $input['date']                  = date_format(date_create($input['date']),"d-m-Y H:i:s");
        $input['interval_time_start']   = $intervalTimeStart ?? '';
        $input['interval_time_end']     = $intervalTimeEnd ?? '';
        $input['employee_id']           = 1;
        unset($input['time_off']);*/

        RequestOff::create([
            'reason'                => (string)$input['reason'],
            'interval_time_start'   => date_create($timeOff[0]),
            'interval_time_end'     => date_create($timeOff[1]),
            'date'                  => date_create($input['date']),
            'to'                    => (string)$input['to'],
            'carbon_copy'           => (string)$input['carbon_copy'],
            'employee_id'           => 1,
        ]);
        return response()
            ->json([
                'save' => true,
            ]);
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
        return response()
            ->json([
                'request' => Employees::findOrFail($id)
            ]);
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
        Employees::findOrFail($id)->delete();
        return response()
            ->json([
                'deleted' => true,
            ]);
    }
}
