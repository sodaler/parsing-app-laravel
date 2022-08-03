<?php

namespace App\Console\Commands;

use App\Components\ImportNasaHttp;
use App\Models\Card;
use Illuminate\Console\Command;

class ImportRandomPostsCommand extends Command
{
    protected $signature = 'import:randomposts';

    protected $description = 'Get 10 random posts from Nasa';

    public function handle()
    {
        $import = new ImportNasaHttp();
        $response = $import->client->request('GET', 'planetary/apod?api_key=DEMO_KEY&count=10');
        $data = json_decode($response->getBody()->getContents());

        foreach ($data as $item) {
            Card::firstOrCreate([
                'title' => $item->title
            ], [
                'title' => $item->title,
                'explanation' => $item->explanation,
                'url' => $item->url,
                'date' => $item->date,
            ]);
        }

        dd('done!');
    }
}
