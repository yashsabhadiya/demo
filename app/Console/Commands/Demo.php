<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use Illuminate\Support\Facades\DB;

class Demo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    // protected $signature = 'demo {name} {--L|lastname=yash}';
    protected $signature = 'printrash:table {first} {to}'; /*{--L|laravel}*/

    /**
     * The console command description. 
     *
     * @var string
     */
    protected $description = 'Laravel Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = $this->argument('first');
        $d = User::all();
        // $this->info($d);
        // $this->info(DB::table('users')->get());die;
        // $this->table('',User::get());die;
        $header = ['Name','Email'];
        $data = User::all();
        // $d = DB::table('users')->select('*')->get();

        $this->table($header,$d);die;
        // $from = $this->argument('first');
        // $to = $this->argument('to');

        // DB::statement("ALTER TABLE $from RENAME TO $to");
        // $this->info('Table name '.$from.' to '.$to);
        // die;
        
        // $this->question('lol');
        // $this->line('lol');
        // $this->withProgressBar(100,function(){
        //     return User::all();
        // });
        $this->table($header,$data);
        // $name = $this->argument('name');
        // $lastname = 'l';
        // $lastname = $this->option('lastname');

        // $name = $this->ask('what is your name');
        
        // $name = $this->secret('confirm what is your name');
        // $confirm = $this->confirm('confirm what is your name');
        // if($confirm){$this->info($name);}
    }
}
