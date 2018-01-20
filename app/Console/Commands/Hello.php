<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Hello extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Hello {name=tarikul} {--L|lastname=oashi}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is make command ,command ';

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
     * @return mixed
     */
    public function handle()
    {
        // $name = $this->argument('name');
        // $lname = $this->option('lastname');
        // $this->info($name.' '.$lname);


        //$name = $this->ask('What is your Name:');
        //Show this on error message
        //  $this->error($name);
        
        //  show secret type writing
        $name = $this->secret('What is your Name:');
        $confirm = $this->confirm('Do you think you print your name');
        if($confirm){
            $this->info($name);
        }
        
    }
}
