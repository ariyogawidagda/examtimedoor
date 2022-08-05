<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\Rating;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        return view('tablebooks', [
            'databooks' => Books::with('Author', 'Category')->get(),
            'ratings' => Rating::with('Bookrating')->orderby('average', 'desc')->paginate(10),
            'k' => 0,
            'j' => 0,
            'l' => 0
        ])->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $pagination = $request->get('pagination');
        $search = $request->search;

        $book
            = Books::with(
                'Author',
                'Category'
            )->whereRelation('Author', 'name', 'LIKE', "%{$search}%")
            ->orWhere('book', 'LIKE', "%{$search}%")->first();
        $books
            = Books::with(
                'Author',
                'Category'
            )->whereRelation('Author', 'name', 'LIKE', "%{$search}%")
            ->orWhere('book', 'LIKE', "%{$search}%")->get();
        $bookscount = $books->count();
        // ddd(Rating::with('Bookrating')->whereRelation('Bookrating', 'id_book', $book->id)->get());
        // ddd(Rating::with('Bookrating')->whereRelation('Bookrating', 'id_book', $book->id)->take(5)->get());
        if ($request->search == '' && $request->get('pagination')) {
            return view('tablebooks', [
                'databooks' => Books::with('Author', 'Category')
                    ->get(),
                'ratings' => Rating::with('Bookrating')->orderby('average', 'desc')->paginate($pagination),
                'k' => 0,
                'j' => 0,
                'l' => 0

            ])->with('i', (request()->input('page', 1) - 1) * $pagination);
        } elseif ($request->search && $request->get('pagination') == '') {
            return view('tablebooks', [
                'databooks' => Books::with('Author', 'Category')->whereRelation('Author', 'name', 'LIKE', "%{$search}%")
                    ->orWhere('book', 'LIKE', "%{$search}%")
                    ->get(),
                'ratings' => Rating::with('Bookrating')->whereRelation('Bookrating', 'id_book', $book->id)->orderby('average', 'desc')->paginate($bookscount),
                'k' => 0,
                'j' => 0,
                'l' => 0

            ])->with('i', (request()->input('page', 1) - 1) * $bookscount);
        } elseif ($request->search && $request->get('pagination')) {
            return view('tablebooks', [
                'databooks' => Books::with('Author', 'Category')->whereRelation('Author', 'name', 'LIKE', "%{$search}%")
                    ->orWhere('book', 'LIKE', "%{$search}%")
                    ->get(),
                'ratings' => Rating::with('Bookrating')->whereRelation('Bookrating', 'id_book', $book->id)->orderby('average', 'desc')->paginate($pagination),
                'k' => 0,
                'l' => 0,
                'j' => 0
            ])->with('i', (request()->input('page', 1) - 1) * $pagination);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
