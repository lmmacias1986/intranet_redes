<?php 
class Cms592dd83b59624851157109_119706324Class extends \Cms\Classes\PageCode
{
public function onStart(){
		$nuevas = Db::table('help_desk')->where('estado','=','Abierto')->orderby('creacion','asc')->paginate(20);
		$this['nuevas'] = $nuevas;
		$this['cont_nuevas'] = count($nuevas);	   
	}	
}
