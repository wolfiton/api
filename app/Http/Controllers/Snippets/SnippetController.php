<?php

namespace App\Http\Controllers\Snippets;

use App\Http\Controllers\Controller;
use App\Snippet;
use App\Transformers\Snippets\SnippetTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SnippetController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:api'])
            ->only('store');
    }

    public function show(Snippet $snippet)
    {
        return fractal()
            ->item($snippet)
            ->transformWith(new SnippetTransformer)
            ->parseIncludes([
                'steps',
                'author',
                'user',
            ])
            ->toArray();
    }

    public function store(Request $request)
    {
        $snippet = $request->user()->snippets()->create();

        dd($snippet);
    }
}
