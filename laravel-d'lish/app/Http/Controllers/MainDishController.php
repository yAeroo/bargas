<?php

namespace App\Http\Controllers;

use App\Models\MainDish;
use Illuminate\Http\Request;
use App\Http\Requests\MainDishRequest;
use App\Models\Cafeteria;

class MainDishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MainDishRequest $request)
    {
        // Validar el registro, accede directamente a Rules()
        $data = $request->validated();

        // Crear el usuario
        $mainDish = MainDish::create([
            'name' => $data['name'],
            'cafeteria_id' => $data['idOwner'],
            'price' => 1.50,
        ]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MainDish  $mainDish
     * @return \Illuminate\Http\Response
     */
    public function show(MainDish $mainDish)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MainDish  $mainDish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MainDish $mainDish)
    {
        // Activa o desactiva
        if ($mainDish->active == 1) {
            $mainDish->active = 0;
        } else {
            $mainDish->active = 1;
        }

        $mainDish->save();
        return [
            'mainDish' => $mainDish
        ];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MainDish  $mainDish
     * @return \Illuminate\Http\Response
     */
    public function destroy(MainDish $mainDish)
    {
        $mainDish = MainDish::find($mainDish);

        if (!$mainDish) {
            return response()->json(['error' => 'El elemento no existe'], 404);
        }

        $mainDish->delete();

        return response()->json(['message' => 'Elemento eliminado con éxito']);
    }
}
