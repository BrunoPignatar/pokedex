<?php

namespace Web\Model;

use \Web\DAO\pokemonDAO;

class pokemonModel
{
public $id, $descricao;

public $rows;

public function save()
{

    $dao = new pokemonDAO();

    if(empty($this->id))  
    {
        $dao->insert($this);
    } else{
        $dao->update($this);
    }
}

public function getAllRows()
{

    $dao = new pokemonDAO();

    $this->rows = $dao->select();
}

public function getById(int $id)
{

    $dao = new pokemonDAO();

    $obj = $dao->selectById($id); 
   
    return ($obj) ? $obj : new pokemonModel(); 

}


public function delete(int $id)
{

    $dao = new pokemonDAO();

    $dao->delete($id);
}

}