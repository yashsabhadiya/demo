<?php

namespace App\Http\Controllers;

use App\Events\DemoEvent;
use App\Events\SendTypeEvent;
use App\Notifications\TaskComplete;
use App\Repos\Exa;
use Illuminate\Http\Request;
use App\Service\Faces\UserInterface;
use App\User as L;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Jobs\SendJob;
use Illuminate\Support\Str;
use Throwable;
use App\Repos\Demo;

trait aaa
{
    public function demo()
    {
        return 'my aaa first static demos';
    }
}

trait bbb
{
    public function demo()
    {
        return 'my bbb first static demos';
    }
}

trait ccc
{
    public function demo()
    {
        return 'my first static demos';
    }
}

class UserController extends Controller
{
    use aaa,bbb{
        aaa::demo insteadof bbb;
        bbb::demo as bbbb;
    }

    use ccc{
        aaa::demo insteadof ccc;
    }

    public function index()
    {
        return static::bbbb();
        return $d;
        $rt = new Ds();
        return $rt->ll();

        dd(app());
        return 'hello';
        return Notification::send(L::first(),new TaskComplete());
//        dd($d);
        return ($d->billings());
        return 'hello';

        return L::all();
//        Cache::rememberForever('users', function () {
//            return L::first();
//        });
//
//        return Cache::get('users');
//
//        $lock = Cache::lock('processing', 120);
//        if($lock){
//            return $lock->get();
//        }
//        return 'm';
//        Cache::put('lash', 'aaa');
//        Cache::tags(['people', 'artists'])->put('Yash', 'Yash');
//        Cache::tags(['people', 'artists'])->put('Jay', 'Jay');
//        Cache::tags(['people', 'artists'])->put('Manav', 'Manav');
//        Cache::tags(['people', 'artists'])->put('Raj', 'Raj');
//
//        Cache::tags(['people', 'artists'])->flush();
//        return Cache::get('lash').' - 2 - '.Cache::tags(['people', 'artists'])->get('John');
//        return ;
//
//        app()->bind('demos',function (){
//            return Str::random();
//        });

//        dump(app()->make('demos'));
//        dd(app()->make('demos'));
//        $d = new Demo(34);

    }










    public function sendTypeEvent(Request $request)
    {
        event(new SendTypeEvent($request->name));

        return response()->json(['lol' => 'lol']);
    }

    public function submit(Request $request)
    {
//        return L::all();
//        return $request->text;
        event(new DemoEvent($request->text,100,1));
//        event(new DemoEvent('demo'));
//        return $request->all();
//        return $d;
        return back();
    }

    public function data(Request $request)
    {
        return $request->all();
        auth()->user()->AauthAcessToken()->delete();
        // return auth()->user()->token()->id;
        // auth()->user()->logout();
        return auth()->user();
    }

    public function register(Request $request)
    {
        // return auth()->logout();
        // return $request->all();
        $request['password'] = Hash::make($request->password);

        $user = User::create($request->all());
        $token = $user->createToken($request->email)->accessToken;

        return response()->json(['token' => $token]);
    }

    public function login(Request $request)
    {
        if(auth()->attempt(['email' => $request->email,'password' => $request->password])){

            $token = auth()->user()->createToken($request->email)->accessToken;
            return response()->json(['token' => $token]);
        }
    }

	public const data = '1';

    public function indexa(Request $request)
    {
        // app()->setlocale('guj');
        return view('welcome');
        $dd['name'] = 'yash';
        $dd['email'] = 'yash@gmail.com';
        $dd['pass'] = Hash::make('yash');

        // $d = (new SendJob($dd))->delay(now()->addSeconds(10));
        // $db = DB::select('insert into users (name,email,password) values ("yash","yash@gmail.com","919191")');
        // dispatch($d);
        // Mail::send(['text' => 'welcome'],['subject' => 'lol'],function($mail){
        //     $mail->to('yashsabhadiya06@gmail.com');
        //     $mail->from('yashsabhadiya06@gmail.com');
        // });
        // dispatch($job);
        // return 'hello';

    	// $this->index2(1,function(){
    	// 	return 'l'
    	// })->catch(function(Throwable $e){
     //        return 'lol';
     //    });

    	return $r;

    	$data = User::all();
    	app()->bind('game',function()use($data){
    		return $data;
    	},true);

    	return view('welcome');
    	// return $this->index2();
    	dd(app());
    	// $d = app()->make('game');
    	// return $d;
    	// return UserController::data;
    	// return $service->userData(1);
    }

    public function index2($data,$d)
    {
    	return $d;
    	// print_r($d);die;
    	// dd(app());
    	// $service = new UserInterface();
    	// return $service->userData(1);
    }
}
