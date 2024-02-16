<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class BibleController extends Controller
{
    private $API_KEY;
    private $url;

    public function __construct()
    {
        $this->API_KEY = env("BIBLE_APP_KEY", 'null');
        $this->url = 'https://api.scripture.api.bible/v1/bibles/'.env('BIBLE_LANGUAGE', 'null');
    }


    public function getBooks() {
        $response = Http::withHeaders(['api-key' => $this->API_KEY])->get($this->url."/books");

        return view('index')->with(['books' => $response["data"]]);
    }

    public function getChaptersFromBook(string $book) {
        $response = Http::withHeaders(['api-key' => $this->API_KEY])->get($this->url."/books/{$book}/chapters");
        return view('book')->with(['chapters' => $response["data"]]);
    }

    public function getSectionsFromChapter(string $chapter) {
        $response = Http::withHeaders(['api-key' => $this->API_KEY])->get($this->url."/chapters/{$chapter}?content-type=json&include-titles=false")["data"]["content"];
        return view('verses')->with(['verses' => $response]);
    }
}
