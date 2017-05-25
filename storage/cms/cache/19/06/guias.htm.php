<?php 
class Cms591265d8b4672731672676_1071249275Class extends \Cms\Classes\PageCode
{
public function onStart(){
	    $this['guias'] = Db::table('guia_cliente')->paginate(15);
	}
public function onFind(){
		if(input('buscador') =="" and  input('nombre_buscar') ==""){
			$this['guias'] = Db::table('guia_cliente')->paginate(15);		
		}else{
			if(input('buscador')=="" and input('nombre_buscar')<>""){
				$this['guias'] = Db::table('guia_cliente')
				->where('empresa','like','%'.input('nombre_buscar').'%')				
				->paginate(15);	
			}elseif(input('buscador')<>"" and input('nombre_buscar')==""){
				$this['guias'] = Db::table('guia_cliente')
				->where('nit','like','%'.input('buscador').'%')
				->paginate(15);							
			}else{
				$this['guias'] = Db::table('guia_cliente')
				->where('nit','like','%'.input('buscador').'%')
				->orWhere('empresa','like','%'.input('nombre_buscar').'%')
				->paginate(15);
			}
			$this['respuesta'] = true;			
		}
	}
}
