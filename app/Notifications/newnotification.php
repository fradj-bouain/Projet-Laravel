<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\category;

class newnotification extends Notification
{
    use Queueable;

    protected  $category;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(category $category)
    {
       $this->category=$category;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
        public function toDatabase($notifiable)
    {
        return [
            
            
            'user'  => 'you have a new category ' .$this->category->name ." added by " .auth()->user()->name." "

        ];
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [ 'data'  => 'we have new category' .$this->category->name ."added by " .auth()->user()->name
        ];
    }
}
