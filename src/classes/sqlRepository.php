<?php

class sqlRepository extends PDO implements RepositoryInterface
{
  public function all($table)
  {
    $query = 'SELECT * FROM '.$table;
    $stmt = $this->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }

  public function find($table, $item, $field = 'id')
  {
    $query = 'SELECT * FROM '.$table.' WHERE '.$field.' = :item';
    $stmt = $this->prepare($query);
    $stmt->bindParam(':item', $item);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_OBJ);
  }
}
