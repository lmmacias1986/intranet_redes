<?php 
class Cms592e010390564912687435_229932941Class extends \Cms\Classes\PageCode
{
public function onStart(){
	$solicitudes = DB::table('help_desk')
    ->where('reportado_por','=', $this->user['username'])
    ->where('estado','<>', 'Resuelto')->orderby('actualizacion','desc')->paginate(10);
    if (count($solicitudes)>0){
        $this['solicitudes'] = $solicitudes;    
    }
    
}
public function onSave()
{
    $validator = false;
    if (input('asunto') == ""){
        $this['error'] = "Debe indicar un asunto.";
    }elseif(input('tipificacion')==""){   
        $this['error'] = "Debe seleccionar el tipo de solicitud.";
    }elseif(input('prioridad')==""){
        $this['error'] = "debe seleccionar la prioridad que considera debe tener esta solicitud.";
    }elseif(input('descripcion')==""){
        $this['error'] = "debe ingresar la descripción de la solicitud.";
    }else{
        	$validator= true;
    }
    
    if ($validator) {
        $id = Db::table('help_desk')->insertGetId(
            ['creacion' => date_format(date_create(), 'Y-m-d H:i:s'),
            'actualizacion' => date_format(date_create(), 'Y-m-d H:i:s'),
            'asunto' => input('asunto'),
            'tipificacion' => input('tipificacion'),
            'prioridad' => input('prioridad'),
            'descripcion' => input('descripcion'),
            'estado' => 'Abierto',
            'reportado_por' => input('reportado_por')]
        );  
        $this['id'] = $id;        
        $this['mensaje'] = "La solicitud fúe registrada con el id: " . $id;

        return Redirect::to('solicitud');
    }
}
}
