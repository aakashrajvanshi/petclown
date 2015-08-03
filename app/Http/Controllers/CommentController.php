<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\Models\Comment;
use App\Models\Petition;

class CommentController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        $data = $request->all();

        if (!empty($data['comment'])) {
            $comment = new Comment;
            $comment->user_id = $request->user()->id;
            $comment->petition_id = $data['post_id'];
            $comment->comment = $data['comment'];

            if (isset($data['anon'])) {
                $comment->anon = 1;
            }
            $comment->save();
        }
        try{
            $request->user()->support()->attach($data['post_id']);
        }
        catch (\Exception $e)
        {
            //do nothing
        }

        if (!empty($data['comment'])) {
            Session::flash('flash_message', 'Thanks! Your comment has been posted!');
        }
        else{
            Session::flash('flash_message', 'Thanks for supporting the petition!');
        }
        if(!empty($data['post_slug'])){
            $url = '/petition/'.$data['post_slug'];
            return redirect($url);
        }
        return redirect()->back();
    }

    /**
 * Store a newly created resource in storage.
 *
 * @return Response
 */
    public function addcomment($id)
    {
        if (is_numeric($id)) {
            $petition = Petition::findorFail($id);
        } else {
            $petition = Petition::where('slug', '=', $id)->firstorFail();
        }
        try{
            Auth::user()->support()->attach($petition->id);
        }
        catch (\Exception $e){
            //do nothing
        }
        return view('petition.comment', ['petition'=>$petition]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function support($id)
    {
        if (is_numeric($id)) {
            $petition = Petition::findorFail($id);
        } else {
            $petition = Petition::where('slug', '=', $id)->firstorFail();
        }
        try{
            Auth::user()->support()->attach($petition->id);
        }
        catch (\Exception $e){
            //do nothing
        }
        Session::flash('flash_message', 'Thanks for supporting the petition. Add a comment!');
        $url = '/petition/'.$petition->slug;
        return redirect($url);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function userlike($id)
    {
        try {
            Auth::user()->likes()->attach($id);
        } catch (\Exception $e) {
        }

        $comment = Comment::findorFail($id);
        $petition = $comment->petition()->firstorFail();
        $slug = $petition->slug;

        $url = '/petition/'.$slug;
        return redirect($url);
    }

    public function userunlike($id)
    {
        try {
            Auth::user()->likes()->detach($id);
        } catch (\Exception $e) {
        }

        $comment = Comment::findorFail($id);
        $petition = $comment->petition()->firstorFail();
        $slug = $petition->slug;

        $url = '/petition/'.$slug;
        return redirect($url);
    }

}
