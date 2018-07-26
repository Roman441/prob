<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendReminderEmail implements ShouldQueue
{
  use InteractsWithQueue, Queueable, SerializesModels;

  protected $podcast;

  /**
   * Создание нового экземпляра задачи.
   *
   * @param  Podcast  $podcast
   * @return void
   */
  public function __construct(Podcast $podcast)
  {
    $this->podcast = $podcast;
  }

  /**
   * Выполнение задачи.
   *
   * @param  AudioProcessor  $processor
   * @return void
   */
   if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://dev.krsn.biz');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  }
  public function handle(AudioProcessor $processor)
  {
    // Обработка загруженного подкаста...
	if( $curl = curl_init() ) {
    curl_setopt($curl, CURLOPT_URL, 'http://dev.krsn.biz');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    $out = curl_exec($curl);
    echo $out;
    curl_close($curl);
  }
  }
}
