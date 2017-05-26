<?php 
class Cms5928327cdea81366044626_1011685626Class extends \Cms\Classes\PageCode
{
public function onStart(){
		$nuevas = Db::table('help_desk')->where('estado','=','Abierto')->orderby('creacion','asc')->paginate(20);
		$this['nuevas'] = $nuevas;
		$this['cont_nuevas'] = count($nuevas);	   
	}	
}
