<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response()->json([
            'message' => 'ok',
            'data' => $books,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = Book::create($request->all());
        return response()->json([
            'message' => 'Book created successfully',
            'data' => $book
        ], 201, [], JSON_UNESCAPED_UNICODE);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = Book::find($id);
        if ($book) {
            return response()->json([
                'message' => 'ok',
                'data' => $book
            ], 200, [], JSON_UNESCAPED_UNICODE);
        }
        return response()->json([
            'message' => 'Book not found',
        ], 404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = [
            'title' => $request->title,
            'author' => $request->author
        ];
        $book = Book::where('id', $id)->update($update);
        if ($book) {
            return response()->json([
                'message' => 'Book updated successfully',
            ], 200);
        }
        return response()->json([
            'message' => 'Book not found',
        ], 404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::where('id', $id)->delete();
        if ($book) {
            return response()->json([
                'message' => 'Book deleted successfully',
            ], 200);
        }
        return response()->json([
            'message' => 'Book not found',
        ], 404);
    }
}
