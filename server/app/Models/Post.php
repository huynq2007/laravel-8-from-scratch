<?php


namespace App\Models;


class Post
{
    public static function find($slug)
    {
        if (!file_exists($path = resource_path("/posts/{$slug}.html"))) {
            abort(404);
        }

        return Cache::remember("posts.{$slug}", 3600, function () use ($path) {
            return file_get_contents($path);
        });
    }
}
