<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use App\Http\Resources\BookResource;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $data = [
        //     'statue' =>'success',    
        //     'data' => Book::all()
        // ];
    //    return  response()->json($data, 200);
       return BookResource::collection(Book::all());
    }

    public function getgendre(){
        $genres = Book::with('genres:id,name')
        ->whereHas('genres')
        ->get();
        return BookResource::collection($genres);
    }

    public function getdiscount(){
        $genres = Book::with('discount')
        ->whereHas('discount')
        ->get();
        return BookResource::collection($genres);
    }

    

    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        //
    }
}
