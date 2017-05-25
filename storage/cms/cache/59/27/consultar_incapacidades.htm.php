<?php 
class Cms5912699b54f21126157249_868687566Class extends \Cms\Classes\PageCode
{
public function onStart(){
		$incapacidades_alerta = DB::table('incapacidades')
		->where('dias_acumulados','>', 20)
		->where('estado','=', 'Activa')
		->orderBy('id', 'desc')->paginate(15);
    	if(count($incapacidades_alerta)==0){
    		$this['coincidencias'] = "No hay incapacidades con alerta por días acumulados";
    	}else{
    		$this['alertas'] = $incapacidades_alerta;
    	}
	}
public function onConsulta(){
	    $incapacidades = DB::table('incapacidades')->where('cedula','=', input('cedula'))->orderBy('id', 'desc')->paginate(15);
    	if(count($incapacidades)==0){
    		$this['error'] = "No hay registros";
    	}else{
    		$this['incapacidades'] = $incapacidades;
    	}

	}
}
