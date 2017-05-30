<?php 
class Cms592e04c60dd46099091751_517424689Class extends \Cms\Classes\PageCode
{
public function onStart(){
	if($this->param('id')<>""){
		$notification = DB::table('notification')
		->join('help_desk', 'help_desk.id', '=', 'notification.id_solicitud')
		->select('notification.*', 'help_desk.asunto','help_desk.descripcion')
	    ->where('notification.id','=', $this->param('id'))
	    ->where('notification.notificado_a','=', $this->user['username'])->first();
	    $this['detalle'] = $notification;
 	    

	    Db::table('notification')->where('id', $this->param('id'))->update([
	        'estado' => 0,
	        'updated_at' => date_format(date_create(), 'Y-m-d H:i:s')	        
	        ]
	    );

	    $notifications = DB::table('notification')
	    ->where('notificado_a','=', $this->user['username'])    
	    ->where('id','<>', $this->param('id'))    
	    ->take(20)
	    ->orderBy('id', 'desc')->get();
	    $this['notifications'] = $notifications;    
	    $this['total'] = count($notifications) + 1;
	}else{
		$notifications = DB::table('notification')
	    ->where('notificado_a','=', $this->user['username'])    
	    ->take(20)
	    ->orderBy('id', 'desc')->get();
	    $this['notifications'] = $notifications;    
	    $this['total'] = count($notifications);
	}
}
}
