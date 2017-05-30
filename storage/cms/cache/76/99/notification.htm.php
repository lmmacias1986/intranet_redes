<?php 
class Cms592e00e8639d4715839648_3966462677Class extends \Cms\Classes\PartialCode
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
