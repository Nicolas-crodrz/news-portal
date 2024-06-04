<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Facades\Storage;


class NewsSeeder extends Seeder
{
  public function run()
  {
    // Crea 50 noticias utilizando la factoría
    $newsItems = News::factory()->count(10)->create();

    $url_image = 'https://cpmr-islands.org/wp-content/uploads/sites/4/2019/07/Test-Logo-Small-Black-transparent-1.png';

    foreach ($newsItems as $news) {
      $news->addMediaFromUrl($url_image)->toMediaCollection('images');
    }
  }
}
