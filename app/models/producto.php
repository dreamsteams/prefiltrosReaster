<?php
class producto extends Eloquent{
	protected $table = "productos";
	public function categoria(){
		return $this->belongsTo("categoria");
	}
	public function marca(){
		return $this->belongsTo("marca");
	}
	public static function getAll($limit = 0){
		if($limit==0){
			return 
			DB::select("select p.id,p.titulo,p.descripcion,p.imagen,p.categoria_id,c.titulo categoria,m.nombre marca,m.imagen marca_imagen from productos p 
				join categorias c on p.categoria_id = c.id
				join marcas m on m.id = p.marca_id
				where c.active = 1
				and   p.active = 1
				order by id desc;");
		}
		return 
			DB::select("select p.id,p.titulo,p.descripcion,p.imagen,p.categoria_id,c.titulo categoria,m.nombre marca,m.imagen marca_imagen from productos p 
				join categorias c on p.categoria_id = c.id
				join marcas m on m.id = p.marca_id
				where c.active = 1
				and   p.active = 1
				order by id desc
				limit $limit;");
	}
}