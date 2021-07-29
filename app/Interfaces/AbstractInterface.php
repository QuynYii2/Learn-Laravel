<?php


namespace App\Interfaces;

interface AbstractInterface
{

    public function getAll();


    public function getData($status);



    public function find($id);


    public function create(array $attributes);


    public function update($id, array $attributes);


    public function delete($id);
}
