<?php 
class Cms592de1f8059ea984130484_581618405Class extends \Cms\Classes\PartialCode
{
public function onStart(){
    $notifications = DB::table('notification')
    ->where('notificado_a','=', $this->user['username'])
    ->where('estado','=', 1)
    ->orderBy('id', 'desc')->get();
    $this['notifications'] = $notifications;    
    $this['total'] = count($notifications);
}    
}
