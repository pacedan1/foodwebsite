<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;
use App\Exceptions\Handler;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $recipes = Recipe::all();
        $recipes = Recipe::orderBy('id')->Paginate(15);

        return view('recipes.index')->with('recipes', $recipes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('recipes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate data
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        // Create and store recipe in DB
        $recipe = new Recipe;
        $recipe->title = $request->input('title');
        $recipe->body = $request->input('description');
        $recipe->save();

        // redirect with success message
        return redirect('/recipes')->with('success', 'Recipe Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //get recipe with ID
        $recipe = Recipe::find($id);

        // if recipe exists return show page else 404 page
        if($recipe){
            return view('recipes.show')->with('recipe', $recipe);
        }
        else{
            return view('404');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // get recipe with ID
        $recipe = Recipe::find($id);

        // if recipe exists return edit page else 404 page
        if($recipe){
            return view('recipes.edit')->with('recipe', $recipe);
        }
        else{
            return view('404');
        }

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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required'
        ]);

        $recipe = Recipe::find($id);
        $recipe->title = $request->input('title');
        $recipe->body = $request->input('description');
        $recipe->save();

        return redirect("/recipes/$id")->with('success', 'Recipe Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = Recipe::find($id);
        $recipe->delete();

        return redirect("/recipes")->with('success', 'Recipe Delete Successfully');
    }
}
