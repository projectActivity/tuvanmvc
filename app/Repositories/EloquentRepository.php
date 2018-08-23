<?php 

namespace App\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

abstract class EloquentRepository implements RepositoryInterface
{
	protected $model;

	private $app;

	public function __construct(App $app)
	{
		$this->app = $app;
		$this->makeModel();
	}

	abstract public function model();

	public function makeModel()
	{
		$this->model = $this->app->make($this->model());

		if (!$this->model instanceof Model) {
			throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
		}

		return $this->model;
	}

	public function all($columns = array('*')) {
        return $this->model->get($columns);
    }

    public function paginate($perPage = 15, $columns = array('*')) {
        return $this->model->paginate($perPage, $columns);
    }

    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    public function findOrFail($id, $columns = array('*')) {
        return $this->model->findOrFail($id, $columns);
    }

    public function create(array $data) {
        return $this->model->create($data);
    }

    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    public function delete($id) {
        return $this->model->destroy($id);
    }
}
