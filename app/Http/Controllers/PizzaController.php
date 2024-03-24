<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza; 
use Carbon\Carbon;

class PizzaController extends Controller
{

    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index(){


        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name','desc')->get();
        // $pizzas = Pizza::where('type','hawaiian')->get();
        $pizzas = Pizza::latest()->get();

    
        return view('pizzas.index', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        


       // Use the current time in UTC+8 as the created_at and updated_at timestamps
        $nowUtc8 = Carbon::now('Asia/Kuala_Lumpur'); // Adjust 'Asia/Kuala_Lumpur' to your desired timezone
        $pizza->created_at = $nowUtc8;
        $pizza->updated_at = $nowUtc8;

        // Save the pizza with the updated timestamp
        $pizza->save();
  
        return redirect('/')->with('mssg','Thanks for your order');
    }

    public function destroy($id) {

        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
    
        return redirect('/pizzas');
    
      }
}
