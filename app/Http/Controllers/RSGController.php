<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\RSGInterface;

class RSGController extends Controller
{
    public function __construct(RSGInterface $RSG)
    {
        $this->RSG = $RSG;
    }
    public function index()
    {
        $RSGindex = $this->RSG->all();
        return view('index', compact('RSGindex'));
    }

    public function create()
    {
        return view('create');
    }
    
    public function store(Request $request)
    {
        $RSGdata = $this->RSG->createAll($request);
        return redirect()->route('generate.index');
    }
    
    public function show($id)
    {
        $RSGindex = $this->RSG->all();
        $RSGshow = $this->RSG->getById($id);
        $ctr = 0;
        foreach($RSGindex as $RSGindexrow){
            if(($RSGindexrow->score == $RSGshow->score)&&(date('Y-m-d',strtotime($RSGindexrow->created_at)) == date('Y-m-d',strtotime($RSGshow->created_at)))){
                $ctr++;
            }
        }
        return view('show', compact('RSGshow','ctr' , 'RSGindex'));
    }
    
    public function edit($id)
    {
    }
    
    public function update(Request $request, $id)
    {
    }
    
    public function destroy($id)
    {
    }
    
    public function getAllJSON() {
        $RSGindex = $this->RSG->getJSON();
        return response($RSGindex, 200);
    }
    
    public function getJSON($id) {
        $RSGindex = $this->RSG->getJSONById($id);
        return response($RSGindex, 200);
    }

}
