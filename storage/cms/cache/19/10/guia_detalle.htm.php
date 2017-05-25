<?php 
class Cms591265f86af54026652427_144974349Class extends \Cms\Classes\PageCode
{
public function onStart()
{
    $this['id_guia_actual'] = $this->param('id');
    $guia = DB::table('guia_cliente')->where('id','=', $this->param('id'))->get();
    $this['guia'] = $guia[0];
    $pruebas = Db::table('pruebas_psicotecnicas')->get();
    $aplicadas = Db::table('pruebas_psicotecnicas_aplicadas')->where('id_guia','=', $this->param('id'))->get();
    $this['aplicadas'] = $aplicadas;
    $profesiograma = Db::table('adjuntos_guia_cliente')->where('id_guia','=', $this->param('id'))->first();
    $this['profesiograma'] = $profesiograma;
    
    $portada = DB::table('portada_perfiles')->where('id_guia','=', $this->param('id'))->get();
    if(count($portada)>0){
        $this['id_perfiles'] = $portada[0]->id;    
    }
    

    foreach ($pruebas as $key => $prueba) {
        foreach ($aplicadas as $llave => $aplicada) {
            if($aplicada->id_prueba == $prueba->id){
                $pruebas[$key]->estado  = "checked";
            }
        }
    }
    $this['pruebas'] = $pruebas;
    $this['id_guia'] = $this->param('id');
}
public function onPerfiles(){
    return Redirect::to('perfiles/'.$this->param('id'));
}
public function onSave()
{   
    $validator = false;
    if (input('empresa') == ""){
        $this['error'] = "Debe ingresar el nombre de la empresa.";
    }elseif(input('no_contrato')==""){   
        $this['error'] = "Debe ingresar el No de contrato.";
    }elseif(input('nit')==""){
        $this['error'] = "Debe ingresar el No de NIT.";
    }elseif(input('representante_legal')==""){
        $this['error'] = "Debe ingresar el nombre del representante legal.";
    }elseif(input('cedula')==""){
        $this['error'] = "Debe ingresar el No de cédula.";
    }else{
        $validator= true;
    }

    if ($validator) {
        Db::table('guia_cliente')->where('id', $this->param('id'))->update([
            'empresa' => input('empresa'),
             'no_contrato' => input('no_contrato'),
             'nit' => input('nit'),
             'aiu' => input('aiu'),
             'responsable_cta' => input('responsable_cta'),
             'act_economica' => input('act_economica'),
             'representante_legal' => input('representante_legal'),
             'cargo_representante' => input('cargo_representante'),
             'cedula' => input('cedula'),
             'jefe_rrhh' => input('jefe_rrhh'),
             'direccion' => input('direccion'),
             'ciudad' => input('ciudad'),
             'telefono' => input('telefono'),
             'pagina_web' => input('pagina_web'),
             'fecha_inscripcion_cc' => input('fecha_inscripcion_cc'),
             'info_gestion_comercial' => input('info_gestion_comercial'),
             'info_servicio_cliente' => input('info_servicio_cliente'),
             'cmb_neg_especiales' => input('cmb_neg_especiales'),
             'neg_especiales' => input('neg_especiales'),
             'dotacion' => input('dotacion'),
             'quien_entrega' => input('quien_entrega'),  
             'info_dotacion' => input('info_dotacion'),             
             'contacto_atc' => input('contacto_atc'),               
            'frecuencia_visita' => input('frecuencia_visita'),               
            'facilitador' => input('facilitador'),               
            'cual_facilitador' => input('cual_facilitador'),               
            'horarios_atencion' => input('horarios_atencion'),               
            'contacto_sitio_atc1' => input('contacto_sitio_atc1'),               
            'cargo_sitio_atc1' => input('cargo_sitio_atc1'),               
            'correo_sitio_atc1' => input('correo_sitio_atc1'),               
            'tel_sitio_atc1' => input('tel_sitio_atc1'),               
            'contacto_sitio_atc2' => input('contacto_sitio_atc2'),               
            'cargo_sitio_atc2' => input('cargo_sitio_atc2'),               
            'correo_sitio_atc2' => input('correo_sitio_atc2'),               
            'tel_sitio_atc2' => input('tel_sitio_atc2'),               
            'contacto_sitio_atc3' => input('contacto_sitio_atc3'),               
            'cargo_sitio_atc3' => input('cargo_sitio_atc3'),               
            'correo_sitio_atc3' => input('correo_sitio_atc3'),               
            'tel_sitio_atc3' => input('tel_sitio_atc3'),               
            'info_adiciona_atc' => input('info_adiciona_atc'),
             'contacto_salud' => input('contacto_salud'),
             'cargo_contacto' => input('cargo_contacto'),
             'email_contacto' => input('email_contacto'),
             'telefono_contacto' => input('telefono_contacto'),
             'arl_base' => input('arl_base'),
             'tasa_riesgo' => input('tasa_riesgo'),
             'contacto_seleccion' => input('contacto_seleccion'),
             'cargo_seleccion' => input('cargo_seleccion'),
             'email_seleccion' => input('email_seleccion'),
             'telefono_seleccion' => input('telefono_seleccion'),
             'celular_seleccion' => input('celular_seleccion'),
             'cargo_proveer' => input('cargo_proveer'),
             'require_informe' => input('require_informe'),
             'cual_informe' => input('cual_informe'),
             'restriccion_familiares' => input('restriccion_familiares'),
             'horarios' => input('horarios'),
             'entidad_bancaria' => input('entidad_bancaria'),
             'info_adicional_seleccion' => input('info_adicional_seleccion'),
             'contacto_contratacion' => input('contacto_contratacion'),
             'cargo_contratacion' => input('cargo_contratacion'),
             'email_contratacion' => input('email_contratacion'),
             'telefono_contratacion' => input('telefono_contratacion'),
             'clausulas_adicionales' => input('clausulas_adicionales'),
             'diferentes_centros_costo' => input('diferentes_centros_costo'),
             'descripcion_centro_costos' => input('descripcion_centro_costos'),
             'examen_medico' => input('examen_medico'),
             'otros_examenes' => input('otros_examenes'),
             'quien_paga' => input('quien_paga'),
             'laboratorio' => input('laboratorio'),
             'info_adicional_contratacion' => input('info_adicional_contratacion'),
             'contacto_nomina' => input('contacto_nomina'),
             'cargo_nomina' => input('cargo_nomina'),
             'porcentaje_admin' => input('porcentaje_admin'),
             'recuencia_pago' => input('recuencia_pago'),
             'fecha_corte' => input('fecha_corte'),
             'dias_pago_nomina' => input('dias_pago_nomina'),
             'paz_salvo' => input('paz_salvo'),
             'fecha_cierre_factura' => input('fecha_cierre_factura'),
             'manejo_mes' => input('manejo_mes'),
             'info_adicional_nomina' => input('info_adicional_nomina'),
             'direccion_factura' => input('direccion_factura'),
             'regimen_contributivo' => input('regimen_contributivo'),
             'gran_contribuyente' => input('gran_contribuyente'),
             'autoretenedor' => input('autoretenedor'),
             'dias_plazo_vencimiento' => input('dias_plazo_vencimiento'),
             'dias_radicacion_factura' => input('dias_radicacion_factura'),
             'contacto_gestion_pagos' => input('contacto_gestion_pagos'),
             'cargo_gestion_pagos' => input('cargo_gestion_pagos'),
             'email_gestion_pagos' => input('email_gestion_pagos'),
             'telefono_gestion_pagos' => input('telefono_gestion_pagos'),
             'info_gestion_pagos' => input('info_gestion_pagos'),
             'nombre_contacto2' => input('nombre_contacto2'),
             'telefono_contacto2' => input('telefono_contacto2'),
             'email_contacto2' => input('email_contacto2'),
             'nombre_contacto3' => input('nombre_contacto3'),
             'telefono_contacto3' => input('telefono_contacto3'),
             'email_contacto3' => input('email_contacto3'),
             'nombre_contacto4' => input('nombre_contacto4'),
             'telefono_contacto4' => input('telefono_contacto4'),
             'email_contacto4' => input('email_contacto4'),
             'nombre_contacto5' => input('nombre_contacto5'),
             'telefono_contacto5' => input('telefono_contacto5'),
             'email_contacto5' => input('email_contacto5'),
             'estado_registro' => input('estado_registro')
             ]
        );  
        //actualiza las lineas de pruebas tecnicas aplicadas

        Db::table('pruebas_psicotecnicas_aplicadas')->where('id_guia', '=', $this->param('id'))->delete();
        
        $total_pruebas = Db::table('pruebas_psicotecnicas')->get(); 
        foreach ($total_pruebas as $key => $prb) {
            if (input('chk_pruebas_'.$key) <> ""){   
                Db::table('pruebas_psicotecnicas_aplicadas')->insert(
                ['id_prueba' => input('chk_pruebas_'.$key),
                'id_guia' => $this->param('id')]);
            }
        }
        $this['mensaje'] = "El registro fúe actualizado correctamente";
    }
    
}
public function onDelete(){
    Db::table('guia_cliente')->where('id', '=', $this->param('id'))->delete();
    $this['mensaje'] = "Registro de guia cliente eliminado correctamente";
    return Redirect::to('guias');
}
}
