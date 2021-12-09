<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Repository\MainRepo;
use App\Events\PodcastProcessed;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\HTTP;
use App\Notifications\TaskComplete;
use App\Http\Requests\ValidateRequest;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DataController extends Controller
{
    public function index()
    {

        return Http::get('http://localhost/vue3/api/demos')->body();
//        User::create(['name' => 'yash','email' => 'yash1@gmail.com','password' => 123456]);
////        $role = Role::find(2);
////        $permission = Permission::find(1);
////        return $role->givePermissionTo($permission);
        auth()->loginUsingId(2);
//        return auth()->user()->hasRole('super-admin');
        ;
//        return auth()->user()->assignRole('super-admin');
//        return auth()->user()->givePermissionTo('edit');
        return view('welcome');
//        return auth()->user();
//        if(Auth::attempt(['email' => 'yash@gmail.com','password' => '123456']))
//        {
//            return auth('web')->user();
//        }
//        return 'hello';
//        User::create(['name' => 'yash','email' => 'yash@gmail.com','password' => \Illuminate\Support\Facades\Hash::make(123456)]);
//        Role::create(['name' => 'admin','guard_name' => 'web']);
//        Role::create(['name' => 'super-admin','guard_name' => 'web']);
//        Permission::create(['name' => 'create','guard_name' => 'web']);
//        Permission::create(['name' => 'edit','guard_name' => 'web']);
        // Post::create(['name' => 'football','users_id' => 1]);
        // return User::find(1)->posts;
//        $role = Role::find(1);
//        $permission = Permission::find(1);
//        return $role->givePermissionTo($permission);
//        $role->givePermissionTo('edit post');
//        $user = User::find(2);
//        return auth()->user()->assignRole('admin');
//        return auth()->user()->givePermissionTo('create');
//        return 'done';
        // return User::search('Exa')->get();

        // for($i=0;$i<=10;$i++)
        // {
        //     User::create(['name' => Str::random(5),'email' => Str::random(5).'@gmail.com','password' => Str::random(5)]);
        // }
        // return view('welcome');
        // return event(new PodcastProcessed(1));
    //     return 'hello';
    // 	return Http::post('http://localhost/demo/public/telescope/telescope-api/requests?tag=&before=&take=50&family_hash=',[
    // 			'tag' => '',
				// 'before' => '',
				// 'take' => '50',
				// 'family_hash' => ''
    // 	])->json();
    	// $data = User::find(27);

    // 	return $data;
    	// Notification::send($data,new TaskComplete);
    	// return 'hello';
return User::find(1)->unreadNotifications;
		return User::find(1)->unreadNotifications()->where('id','2db00aed-5cc4-4611-95db-4b196f7b1c9e')->update(['read_at' => now()]);
        $data = User::find(1)->notify(new TaskComplete);
    	// return now()->addSeconds(5);

		// Notification::route('mail','yashsabhadiya06@gmail.com')->notify(new TaskComplete());
        // Notification::send($data,(new TaskComplete())->delay(now()->addSeconds(5)));

        return 'hello';
    	Mail::send(['text' => 'welcome'],['titel' => 'lol'],function($mail){
    		// $mail->from('yashsabhadiya06@gmail.com');
    		$mail->to('yashsabhadiya06@gmail.com');
    	});
  //   	RateLimiter::clear('send-message:'.$id);
  //   	if (RateLimiter::tooManyAttempts('send-message:'.$id, $perMinute = 5)) {
		//     $seconds = RateLimiter::availableIn('send-message:'.$id);

		//     return 'You may try again in '.$seconds.' seconds.';
		// }

  //   	if (RateLimiter::remaining('send-message:'.$id, $perMinute = 5)) {

		//     RateLimiter::hit('send-message:'.$id);

		//     return 'hello';
		// }

		// return RateLimiter::attempt('send-message:'.$id,$perMinute = 5,function(){
  //   		return 'hello';
  //   	});

    	// return 'none';
    	// Cache::get('as');
    	// return 'lol';

    	return event(new PodcastProcessed(1));
    	return MainRepo::allData(1);
    	return User::all();
    }
}
