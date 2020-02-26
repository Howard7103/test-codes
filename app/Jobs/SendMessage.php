<?php

namespace App\Jobs;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMessage implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $notice;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    //構造函數
    public function __construct(\App\Notice $notice)
    {
        //
        $this->notice = $notice;
    }

    /**
     * Execute the job.
     *
     * @return void
     */

    //具體處理函數
    public function handle()
    {
        //通知每個用戶系統消息
        $users= User::all();
        foreach ($users as $user)
        {
            $user->addNotice($this->notice);
        }
    }
}
