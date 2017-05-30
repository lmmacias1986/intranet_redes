<?php 
class Cms592e0130e29c0005360270_2124745090Class extends \Cms\Classes\PageCode
{
public function onStart(){
		$nuevas = Db::table('help_desk')->where('estado','=','Abierto')->orderby('creacion','asc')->paginate(20);
		$this['nuevas'] = $nuevas;
		$this['cont_nuevas'] = count($nuevas);	   
	}	
}
