<?php 

namespace App\Repositories;

interface RepositoryInterface
{
	public function all($columns = array('*'));

	public function find($id, $columns = array('*'));

	public function create(array $data);

	public function update(array $data, $id, $attribute="id");

	public function delete($id);
}
