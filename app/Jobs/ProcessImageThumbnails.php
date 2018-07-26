<?php

namespace App\Jobs;
 
use App\Image as ImageModel;
use App\Article as ArticleModel;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\DB;
 
class ProcessImageThumbnails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
 
    protected $image;
 
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ImageModel $image)
    {
        $this->image = $image;
    }
 
    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
	$res = App\Article::create(['title'=>'ssss', 'body'=>'sssss']);
	 $user = new Article;

$user->title = 'John';
$user->body = 'John';
$user->save();

        // access the model in the queue for processing
        $image = $this->image;
        $full_image_path = public_path($image->org_path);
        $resized_image_path = public_path('thumbs' . DIRECTORY_SEPARATOR .  $image->org_path);
 
        // create image thumbs from the original image
        $img = \Image::make($full_image_path)->resize(300, 200);
        $img->save($resized_image_path);
 	
	$jsonurl = "http://93.92.68.108/ccr";
	$json = file_get_contents($jsonurl);
	var_dump(json_decode($json));
 
 //       if (!$json) {
		$res = App\Article::create(['title'=>'ssss', 'body'=>'sssss']);

	$user = new Article;

$user->title = 'John';
$user->body = 'John';

$user->save();
//	}

}
}
