<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('admin.comments');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        /** My Work*/
        if($id=="editpetitions")
        {
            return view('admin.editpetitions');
        }
        else if($id=="mostviewed")
        {
            return view('admin.mostviewed');
        }
        else if($id=="mostsupport")
        {
            return view('admin.mostsupport');
        }
        else if($id=="settings")
        {
            return view('admin.settings');
        }
        else if($id=="changepassword")
        {
            return view('admin.changepassword');
        }
        else if($id=="practice")
        {
            return view('admin.practice');
        }
        else if($id=="adminprofilepage")
        {
            return view('admin.adminprofilepage');
        }
        else if($id=="addadmin")
        {
            return view('admin.addadmin');
        }
        else if($id=="adminmessages")
        {
            return view('admin.adminmessages');
        }
        else if($id=="admincomments")
        {
            return view('admin.admincomments');
        }
        else if($id=="adminapprovecomments")
        {
            return view('admin.adminapprovecomments');
        }
        else if($id=="admindeletecomments")
        {
            return view('admin.admindeletecomments');
        }
        else if($id=="adminspam")
        {
            return view('admin.adminspam');
        }
        else if($id=='adminflaggedcomments')
        {
            return view('admin.adminflaggedcomments');
        }
        else if($id=="useradmin")
        {
            return view('admin.useradmin');
        }
        else if($id=="searchuser")
        {
            return view('admin.searchuser');
        }
        else if($id=="blockuser")
        {
            return view('admin.blockuser');
        }
        /** Completed*/
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
