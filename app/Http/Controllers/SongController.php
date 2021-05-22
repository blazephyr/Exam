<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\song;

class SongController extends Controller
{
    //
    public function index(){
        $songs = DB::select('select * from songs');
        return view('songs',['songs'=>$songs ]);
        }




        public function get($song){
            $song = DB::select('select * from songs where id='.$song);
            // dd($song);
            return view('song',['song'=>$song]);
            }

            public function delete($song){
                $song = DB::delete('delete from songs where id='.$song);
                // dd($song);
                return redirect('songs')->with('status',"Song has been deleted");
                }
    

            public function create(){
                return view('add-song');
            }

            public function edit($song){
                $song = DB::select('select * from songs where id='.$song);
                // dd($song);
                return view('update',['song'=>$song]);
                }


            public function update(Request $request,$songid){
                $title = $request->input('title');
                $artist = $request->input('artist');
                $lyrics = $request->input('lyrics');
                DB::update('update songs set title = ?,artist=?,lyrics=? where id = ?',[$title,$artist,$lyrics,$songid]);
                return redirect('songs/'.$songid)->with('status',"Song has been Updated!");
                // dd($song);
                // return view('song',['song'=>$song]);
                }
            public function store(Request $request){
                $rules = [
                    'title' => 'required|string|min:1|max:255',
                    'artist' => 'required|string|min:1|max:255',
                    'lyrics' => 'required|string|max:255'
                ];

                // dd($request);
                $validator = Validator::make($request->all(),$rules);
                // dd($validator);
                if ($validator->fails()) {
                    return redirect('songs/add')
                    ->withInput()
                    ->withErrors($validator);
                }
                else{
                    $data = $request->input();
                    try{
                        $song = new song;
                        $song->title = $data['title'];
                        $song->artist = $data['artist'];
                        $song->lyrics = $data['lyrics'];
                      
                        $song->save();
                        return redirect('songs/add')->with('status',"Song has been Added!");
                    }
                    catch(Exception $e){
                        return redirect('songs/add')->with('failed',"Failed to add song");
                    }
                }
                // dd($song);
                // return view('song',['song'=>$song]);
                }
}
