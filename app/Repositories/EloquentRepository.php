<?php


namespace App\Repositories;

use App\Interfaces\AbstractInterface;
use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class EloquentRepository implements AbstractInterface
{

    protected $_model;

    public function __construct()
    {
        $this->setModel();
    }


    abstract public function getModel(): string;


    public function setModel(): void
    {
        $this->_model = app()->make(
            $this->getModel()
        );
    }

    public function getAll()
    {
        return $this->_model->all();
    }


    public function getData($status = '')
    {
        $query = $this->_model->select('*');
        if ($status) {
            $query->where('status', $status);
        }
        if ($status === 0) {
            $query->where('status', $status);
        }
        return $query->get();
    }

    public function find($id)
    {
        return $this->_model->find($id);
    }

    public function create(array $attributes)
    {
        return $this->_model->create($attributes);
    }


    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if ($result) {
            $result->update($attributes);
            return $result;
        }

        return false;
    }


    public function delete($id): bool
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }


}
