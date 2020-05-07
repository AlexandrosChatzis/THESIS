<?php

namespace App\Notifications;
use App\Notifications\MailResetPasswordNotification;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MailResetPasswordNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    protected $token;
    public function __construct($token)
    {
        $this->token = $token;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        return ( new MailMessage )
        ->greeting('Γεια σας!')
        ->subject( 'Επαναφορά Κωδικού' )
        ->line( "Λαμβάνετε αυτό το μήνυμα επειδή λάβαμε ένα αίτημα επαναφοράς κωδικού πρόσβασης για το λογαριασμό σας." )
        ->action('Reset Password', url('password/reset', $this->token))
        ->line('Εάν δεν ζητήσατε επαναφορά κωδικού πρόσβασης, δεν απαιτείται περαιτέρω ενέργεια.');
       
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
