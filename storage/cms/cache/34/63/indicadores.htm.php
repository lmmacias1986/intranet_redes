<?php 
class Cms598bbbbaefebf360058845_1106478068Class extends \Cms\Classes\PartialCode
{
public function onStart(){
    $indicadores = DB::table('help_desk')
    ->select(Db::raw('count(*) as contador, estado, estado as link, estado as color'))
    ->groupBy('estado')->get();

    
    foreach ($indicadores as $key => $indicador) {
        if ($indicador->estado =="En curso"){
            $indicador->link="curso";
            $indicador->color="#578CD6";
        }
        if ($indicador->estado =="Abierto"){
            $indicador->link="control";
            $indicador->color="#BF6E4E";
        }
        if ($indicador->estado =="Cerrado"){
            $indicador->link="cerrado";
            $indicador->color="#C9526E";
        }
        if ($indicador->estado =="Pendiente"){
            $indicador->link="pendiente";
            $indicador->color="#2F5C72";
        }
        if ($indicador->estado =="Resuelto"){
            $indicador->link="resuelto";
            $indicador->color="#8BCC53";
        }
    }        

    $this['indicadores'] = $indicadores;

}
}
