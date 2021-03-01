<?php


namespace thirdly\acl\Helper;


use twilio\acl\Models\EmailLog;

class Mail
{
    public static function send($view, $to, $title, $data = [])
    {
        try {
            \Illuminate\Support\Facades\Mail::send($view, $data, function ($m) use($title, $to){
                $m->from(env('MAIL_USERNAME'), 'thirdly.co.uk');
                $m->to($to, $title)->subject($title);
            });
            EmailLog::create([
                'view' => $view,
                'email' => $to,
                'title' => $title,
                'data'  => json_encode($data),
                'is_sent'  => 1
            ]);
        }
        catch (\Exception $exception)
        {
            EmailLog::create([
                'view' => $view,
                'email' => $to,
                'title' => $title,
                'data'  => json_encode($data),
                'is_sent'  => 0,
                'error'  => json_encode($exception->getMessage())
            ]);
        }
    }
}
