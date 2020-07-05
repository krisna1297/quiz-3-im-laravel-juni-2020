<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ArticleModel;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = ArticleModel::get_all();

        return view('articles.index', compact('articles'));
    }

    public function show($id)
    {
        $article = ArticleModel::show($id);

        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        ArticleModel::save($request->all());

        return redirect()->route('artikel.index');
    }

    public function edit($id)
    {
        $article = ArticleModel::show($id);

        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $question = ArticleModel::update($id, $request->all());

        return redirect()->route('artikel.index');
    }

    public function destroy($id)
    {
        $deleted = ArticleModel::delete($id);
        return redirect()->route('artikel.index');
    }
}
