<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Comment;

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
        else if($id=="petitionlist")
        {
            return view('admin.petitionlist');
        }
        else if($id=="comments")
        {
            $comments = Comment::orderBy('created_at','DESC')->NotReviewed()->paginate(15);
            $comments->load('petition','user');
            return view('admin.comments',compact('comments'));
        }
        else if($id=="blockedusers")
        {
            return view('admin.blockedusers');
        }
        else if($id=="approvedcomments")
        {
            $comments = Comment::orderBy('created_at','DESC')->Approved()->paginate(15);
            $comments->load('petition','user');
            return view('admin.approvedcomments',compact('comments'));
        }
        else if($id=="editcomments")
        {
            return view('admin.editcomments');
        }
        else if($id=="spamcomments")
        {
            return view('admin.spamcomments');
        }
        elseif($id=="flaggedcomments")
        {
            return view('admin.flaggedcomments');
        }
        elseif($id=="deletedcomments")
        {
            $comments = Comment::orderBy('created_at','DESC')->Disapproved()->paginate(15);
            $comments->load('petition','user');
            return view('admin.deletedcomments',compact('comments'));
        }
        else if($id=="spampetitions")
        {
            return view('admin.spampetitions');
        }
        elseif($id=="flaggedpetitions")
        {
            return view('admin.flaggedpetitions');
        }
        elseif($id=="deletedpetitions")
        {
            return view('admin.deletedpetitions');
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

    /*
     * Approve a comment
     */
    public function approve($id){
        $comment = Comment::findorFail($id);
        $comment->approved = 1;
        $comment->save();
        return back();
    }

    /*
     * Disapprove a comment
     */
    public function disapprove($id){
        $comment = Comment::findorFail($id);
        $comment->approved = 0;
        $comment->save();
        return back();
    }

}
