<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Layanan;
use Illuminate\Support\Facades\File;
class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function card(Request $request)
     {
         $search = $request['search'] ?? "";
          if ($search != ""){
            
             $layanans = Layanan::where('nama_layanan','LIKE',"%$search%")->get();
          }else{
         
             $layanans = Layanan::orderBy('id', 'ASC')->get();
          }
             return view('card.index1', compact('layanans'));
     }
    
    public function index(Request $request)
    {
        
        $search = $request['search'] ?? "";
         if ($search != ""){
           
            $layanans = Layanan::where('nama_layanan','LIKE',"%$search%")->get();
         }else{
        
            $layanans = Layanan::orderBy('id', 'ASC')->get();
         }
            return view('index', compact('layanans'));
    }

    function fetch($id)
    {
        $layanans=Layanan::find($id);
        return view('Layanan.video',compact('layanans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $layanans = layanan::all();
        return view('layanan.create',compact('layanans'));
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
            'nama_lembaga'=> 'required|max:15',
            'nama_layanan'=> 'required',
            'senin_kamis'=> 'required',
            'jumat'=> 'required',
            'jenis_lembaga'=> 'required',
            'gambar1'=> 'required|mimes:jpg,jpeg,png',
            'denah'=>'required|mimes:jpg,jpeg,png',
        ]);
        
 
        
       
        $data=layanan::create($request->all());

        if($request->hasfile('gambar1')){
            $request->file('gambar1')->move('assets/img/portfolio/', $request->file('gambar1')->getClientOriginalName());
            $data->gambar1 = $request->file('gambar1')->getClientOriginalName();
            $data->save();
        
         }
         if($request->hasfile('denah')){
            $request->file('denah')->move('assets/denah/', $request->file('denah')->getClientOriginalName());
            $data->denah = $request->file('denah')->getClientOriginalName();
            $data->save();
        
         }
        // //Redirect jika sukses menyimpan data
        // return redirect()->route('students.index')
        // ->with('success','Item created successfully.');
        return redirect()->route('layanans.index')
            ->with('success','Item created successfully.');
    
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
        $layanans = Layanan::find($id);
    
        return view('Layanan.edit',compact('layanans'));
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
        $request->validate([
            'nama_lembaga'=> 'required',
            'nama_layanan'=> 'required',
            'senin_kamis'=> 'required',
            'jumat'=> 'required',
            'jenis_lembaga'=> 'required',
            'gambar1'=> 'mimes:jpg,jpeg,png',
            'denah'=>'mimes:jpg,jpeg,png',
           
        ]);
        
        //Mengubah data berdasarkan request dan parameter yang dikirimkan
        $data=layanan::find($id);
        if($request->hasfile('gambar1')){
            if($request->gambar1 != ''){        
                $path = public_path().'/assets/img/portfolio/';
            
                //code for remove old file
                if($data->gammbar1 != ''  && $data->gambar1 != null){
                     $old= $path.$data->gambar1;
                     unlink($old);
                }
                
                $request->file('gambar1')->move($path, $request->file('gambar1')->getClientOriginalName());
                $data->gambar1 = $request->file('gambar1')->getClientOriginalName();
                
          
           }
          
         }
         if($request->hasfile('denah')){
            if($request->denah != ''){        
                $path = public_path().'/assets/denah/';
            
                //code for remove old file
                if($data->denah != ''  && $data->denah != null){
                     $old= $path.$data->denah;
                     unlink($old);
                }
                
                $request->file('denah')->move($path, $request->file('denah')->getClientOriginalName());
                $data->denah= $request->file('denah')->getClientOriginalName();
                
          
           }
          
         }
     
         layanan::find($id)->update($request->all());
         $data->update(['gambar1' => $data->gambar1]);
         $data->update(['denah' => $data->denah]);
        //  $data->update(['denah' => $data->denah]);
      
        //Setelah berhasil mengubah data melempar ke students.index
        return redirect()->route('layanans.index')
                        ->with('success','Item updates successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        layanan::find($id)->delete();

        //Melakukan hapus data berdasarkan parameter yang dikirimkan
        //$students-delete();
        return redirect()->route('layanans.index')
                        ->with('success','Item deleted successfully');
    
    }
}
