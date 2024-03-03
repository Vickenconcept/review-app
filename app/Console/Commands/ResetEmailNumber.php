<?php

namespace App\Console\Commands;

use App\Models\Site;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Console\Command;

class ResetEmailNumber extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'reset:email-number';
    protected $description = 'Reset email number for sites after 30 days';

    /**
     * The console command description.
     *
     * @var string
     */

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // $sites = Site::where('email_number_reset_date', '<', Carbon::now()->subDays(1))->get();
        // $sites = Site::where('email_number_reset_date', '<', Carbon::now()->subHour())->get();


        // foreach ($sites as $site) {
        //     // Reset email_number to 0
        //     $site->update(['email_number' => 0]);
        //     // Update the reset date to today
        //     $site->update(['email_number_reset_date' => Carbon::now()]);
        // }

        // $this->info('Email numbers reset successfully.');

        // $users = User::where('created_at', '<', Carbon::now()->subMinutes(12))->get();
        $users = User::where('created_at', '<', Carbon::now()->subDays(30))->get();

        foreach ($users as $user) {
            // Reset email_number to 0 for all sites associated with the user
            $user->sites()->update(['email_number' => 0]);
        }

        $this->info('Email numbers reset successfully.');
    }
}
