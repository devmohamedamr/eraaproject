<?php

namespace App\Http\Controllers;

use App\Models\article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(article $article): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(article $article): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, article $article): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(article $article): RedirectResponse
    {
        //
    }
}
