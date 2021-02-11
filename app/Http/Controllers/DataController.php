<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\postTable;
// use Dotenv\Validator;
// use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\Validator;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post =  postTable::orderBy('content_time', 'DESC')->get();
        return view('post.post')->with('post', $post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('insert.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,[
        'title' => 'required', 
        'content' => 'required',
        'author_id' => 'required',
       ]);
        $post = new  postTable;
        $post->title= $request->title;
        $post->content= $request->content;
        $post->author_id= $request->author_id;
        $post->save();
        // return redirect('/post')->with('errors', 'Inserted');
        return redirect('/post')->with('message', 'Insert successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = postTable::find($id);
        return view('insert.edit')->with('post', $post);
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
        $this->validate($request,[
            'title' => 'required', 
            'content' => 'required',
            'author_id' => 'required',
           ]);
            $post = postTable::find($id);
            $post->title= $request->title;
            $post->content= $request->content;
            $post->author_id= $request->author_id;
            $post->save();
            // return redirect('/post')->with('errors', 'Inserted');
            return redirect('/post')->with('message', 'Changes updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = postTable::find($id);
        $post->delete();
        return redirect('/post')->with('message', 'Post Deleted');
    }
}
