<?php

namespace App\Domain\Repositories;

use App\Domain\Entities\Contact;
use App\Domain\Contracts\ContactInterface;
use App\Domain\Contracts\Crudable;
use App\Domain\Contracts\Repository;
use App\Domain\Repositories\AbstractRepository;


class ContactRepository extends AbstractRepository implements ContactInterface, Crudable {

    protected $model;

    public function __construct(Contact $contact){
        $this->model = $contact;
    }

    public function getAll(){
        return $this->model->all();
    }

     public function paginate($limit = 10, $page = 1, array $column = ['*'], $field, $search = '')
    {
        // query to aql
        return parent::paginate($limit, $page, $column, 'name', $search);
    }


    public function findById($id, array $columns = ['*']){
               return $this->model->find($id, $columns);
    }

  


   
 




}