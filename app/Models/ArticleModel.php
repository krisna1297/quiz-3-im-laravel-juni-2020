<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class ArticleModel
{
    /**
     * Membuat teks slug dari judul
     */
    protected static function make_slug($judul)
    {
        $slugs = explode(' ', strtolower($judul));
        return implode('-', $slugs);
    }

    public static function get_all()
    {
        $items = DB::table('articles')->get();

        return $items;
    }

    public static function show($id)
    {
        return DB::table('articles')->where('id', $id)->first();
    }

    public static function save($request)
    {
        $now = date_create()->format('Y-m-d H:i:s');
        $slug = self::make_slug($request['judul']);
        return DB::table('articles')->insert([
            'judul' => $request['judul'],
            'isi' => $request['isi'],
            'slug' => $slug,
            'tag' => $request['tag'],
            'created_at' => $now,
            'updated_at' => $now
        ]);
    }

    public static function update($id, $request)
    {
        $now = date_create()->format('Y-m-d H:i:s');
        $slug = self::make_slug($request['judul']);
        return DB::table('articles')
            ->where('id', $id)
            ->update([
                'judul' => $request['judul'],
                'isi' => $request['isi'],
                'slug' => $slug,
                'tag' => $request['tag'],
                'updated_at' => $now
        ]);
    }

    public static function delete($id)
    {
        return DB::table('articles')
            ->where('id', $id)
            ->delete();
    }
}
