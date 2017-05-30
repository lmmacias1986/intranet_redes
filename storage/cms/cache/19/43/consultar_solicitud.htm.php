<?php 
class Cms592dd62754d7c063517230_1190157881Class extends \Cms\Classes\PageCode
{
public function onStart(){    
	$solicitud = DB::table('help_desk')
    ->where('reportado_por','=', $this->user['username'])
    ->where('id','=', $this->param('id'))->first();
    $this['solicitud'] = $solicitud;


    $control = DB::table('help_desk')
    ->where('id','=', $this->param('id'))->first();
    $this['control'] = $control;
}
public function onRegresar(){
	return Redirect::to('solicitud');
}
public function onRegresaradm(){
    return Redirect::to('control');    
}
public function onSave(){
    $validator = false;
    if (input('reportado_por') == ""){
        $this['error'] = "Debe indicar quien generó la solicitud.";
    }elseif(input('clasificacion')==""){   
        $this['error'] = "Debe clasificar la solicitud.";
    }elseif(input('medio')==""){
        $this['error'] = "debe seleccionar el canal por el cual se reporto la solicitud.";
    }else{        
        $validator= true;
    }
    
    if ($validator) {


        Db::table('help_desk')->where('id', $this->param('id'))->update([
            'actualizacion' => date_format(date_create(), 'Y-m-d H:i:s'),
            'estado' => input('estado'),
            'prioridad' => input('prioridad'),
            'clasificacion' => input('clasificacion'),
            'medio' => input('medio'),
            'actividades' => input('actividades'),
            'atendido' => input('atendido_por'),
            'reportado_por' => input('reportado_por')
            ]
        );
        $id_not = Db::table('notification')->insertGetId(
            [
            'id_solicitud' => $this->param('id'),
             'notificado_por' => input('atendido_por'),
            'notificado_a' => input('reportado_por'),
            'titulo' => "Solicitud actualizada - ". input('estado'),
            'mensaje' => "Su solicitud fue atendida y actualizada al estado: " . input('estado') .", usuario responsable: ". input('atendido_por'),            
            'created_at' => date_format(date_create(), 'Y-m-d H:i:s'),
            'updated_at' => date_format(date_create(), 'Y-m-d H:i:s'),                        
            'estado' => 1]
        );

        $this['mensaje'] = "La solicitud fúe actualizada correctamente. - Notificación enviada.";

        return Redirect::to('consultar_solicitud/'.$this->param('id'));
    }
}
}
