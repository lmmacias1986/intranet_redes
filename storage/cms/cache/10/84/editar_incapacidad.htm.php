<?php 
class Cms598bbbbaeec70934157227_2207803564Class extends \Cms\Classes\PageCode
{
public function onProrroga(){    
    return Redirect::to("crear_prorroga/".$this->param('id'));    
}
public function onConsulta(){
    if (input('cedula') == ""){
        $this['error'] = "Debe ingresar el número del documento.";
    }else{
        $usuario = Db::table('colaboradores')->where('cedula','=', trim(strtoupper(input('cedula'))))->first();
        if (count($usuario)==0 ){
            $this['error'] = "Este número de cédula no esta registrado.";            
        }else{
            $this['nombres'] = $usuario->nombres ." ".$usuario->apellidos;
            $this['empresa'] = $usuario->empresa;
        } 
    }
}
public function onStart()
{
    $incapacidad = DB::table('incapacidades')->where('id','=', $this->param('id'))->first();
    $this['incapacidad'] = $incapacidad;  
    $estados = Db::table('estado_caso')->get();     
    $aplicadas = Db::table('estado_caso_aplicado')->where('id_incapacidad','=', $this->param('id'))->get();
    $this['aplicadas'] = $aplicadas;

    foreach ($estados as $key => $estado) {
        foreach ($aplicadas as $llave => $aplicada) {
            if($aplicada->id_estado == $estado->id){
                $estados[$key]->estado  = "checked";
            }
        }
    }
    $this['estados'] = $estados;
    $this['prorroga'] = "no";
    $this['id'] = $this->param('id');
    $lista_prorrogas = DB::table('prorrogas')
    ->where('id_padre','=', $this->param('id'))    
    ->orderby('id','desc')->get();

    $this['listado'] = $lista_prorrogas;

    if($incapacidad->dias_acumulados > 20){
        $this['alerta'] = true;
    }

}
public function onDelete(){
    Db::table('prorrogas')->where('id_padre', '=', $this->param('id'))->delete();
    Db::table('incapacidades')->where('id', '=', $this->param('id'))->delete();
    $this['mensaje'] = "Incapacidad eliminada correctamente";
    return Redirect::to('consultar_incapacidades');
}
public function onDx(){
    if (input('cod_dx') == ""){
        $this['error'] = "Debe ingresar el número del código asociado al diagnóstico.";
    }else{
        $codigo = Db::table('registro_diagnostico')->where('codigo','=', trim(strtoupper(input('cod_dx'))))->first();
        if (count($codigo)==0 ){
            $this['error'] = "Este diagnóstico no esta registrado.";            
        }else{
            $this['descripcion'] = $codigo->descripcion;
        } 
    }
}
public function onSave()
{
    $validator = false;
    if (input('cedula') == ""){
        $this['error'] = "Debe ingresar el número del documento.";
    }elseif(input('tipo_incapacidad')==""){   
        $this['error'] = "Debe seleccionar el tipo de incapacidad.";
    }elseif(input('dias')=="NaN" || input('dias')=="" ){   
        $this['error'] = "debe seleccionar las fechas de inicio y final de la incapaciadad.";
    }elseif(input('eps')==""){
        $this['error'] = "debe diligenciar la EPS del colaborador.";
    }elseif(input('salario_basico')==""){
        $this['error'] = "debe ingresar el salario para realizar los cálculos necesarios.";
    }elseif(input('salario_basico')==""){
        $this['error'] = "debe ingresar el salario para realizar los cálculos necesarios. (utilice punto(.) como separador de miles)";
    }elseif(input('cod_dx')==""){
        $this['error'] = "debe ingresar un codigo de diagnóstico (verifiquelo si requiere)";
    }else{
        $cedula = Db::table('colaboradores')->where('cedula','=', trim(strtoupper(input('cedula'))))->first();
        $codigo = Db::table('registro_diagnostico')->where('codigo','=', trim(strtoupper(input('cod_dx'))))->first();
        if (count($cedula)==0 ){
            $this['error'] = "Este número de cédula NO esta registrado en la base de datos.";            
        }else if(count($codigo)==0 ){
            $this['error'] = "Este código de diagnóstico NO esta registrado en la base de datos.";                      
        }else{
            $validator= true;
        }
    }
   
    if ($validator) {
        $dias_total = (input('dias_acumulados') - input('dias_temp')) + input('dias');
        Db::table('incapacidades')->where('id', $this->param('id'))->update(
            ['cedula' => input('cedula'),
            'tipo_incapacidad' => input('tipo_incapacidad'),
            'prorroga' => input('prorroga'),
            'eps' => input('eps'),
            'dias' => input('dias'),
            'fecha_inicial' => input('fecha_inicial'),
            'fecha_final' => input('fecha_final'),
            'salario_basico' => input('salario_basico'),
            'valor_prestacion' => input('valor_prestacion'),
            'gestion' => input('gestion'),
            'valor_reconocido' => input('valor_reconocido'),
            'cod_dx' => input('cod_dx'),
            'estado' => input('estado'),            
            'dias_acumulados' => $dias_total,
            'observaciones' => input('observaciones'),
            'ciudad' => input('ciudad')]
        );  
        Db::table('estado_caso_aplicado')->where('id_incapacidad', '=', $this->param('id'))->delete();
        $total_casos = Db::table('estado_caso')->get(); 
        foreach ($total_casos as $key => $prb) {
            if (input('chk_estado_'.$key) <> ""){   
                Db::table('estado_caso_aplicado')->insert(
                ['id_estado' => input('chk_estado_'.$key),
                'id_incapacidad' => $this->param('id')]);
            }
        }

        $this['mensaje'] = "Incapacidad actualizada correctamente";
    }
    $this['prorroga'] = "no";
    return Redirect::to('editar_incapacidad/'.$this->param('id'));
    
}
}
