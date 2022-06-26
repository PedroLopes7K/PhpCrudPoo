<?php

namespace App\Model;

class ProductDao
{

  public function create(Product $p)
  {
    $sql = 'INSERT INTO products (name, description) VALUES (?,?)';
    $stmt = Connection::GetConn()->prepare($sql);
    $stmt->bindValue(1, $p->getName());
    $stmt->bindValue(2, $p->getDescription());
    $stmt->execute();
  }

  public function read()
  {
    $sql = 'SELECT * FROM products';
    $stmt = Connection::GetConn()->prepare($sql);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
      $result = $stmt->fetchALL(\PDO::FETCH_ASSOC);
      return $result;
    } else {
      return [];
    }
  }
  public function update(Product $p)
  {

    $sql = 'UPDATE products SET name = ?, description = ? WHERE id = ?';
    $stmt = Connection::GetConn()->prepare($sql);
    $stmt->bindValue(1, $p->getName());
    $stmt->bindValue(2, $p->getDescription());
    $stmt->bindValue(3, $p->getId());

    $stmt->execute();
  }
  public function delete($id)
  {
    $sql = 'DELETE FROM products WHERE id = ?';
    $stmt = Connection::GetConn()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
  }
}
