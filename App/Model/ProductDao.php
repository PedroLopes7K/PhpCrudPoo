<?php

namespace App\Model;

class ProductDao
{

  public function Create(Product $p)
  {
    $sql = 'INSERT INTO products (name, description) VALUES (?,?)';
    $stmt = Connection::GetConn()->prepare($sql);
    $stmt->bindValue(1, $p->GetName());
    $stmt->bindValue(2, $p->GetDescription());
    $stmt->execute();
  }

  public function Read()
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
  public function Update(Product $p)
  {

    $sql = 'UPDATE products SET name = ?, description = ? WHERE id = ?';
    $stmt = Connection::GetConn()->prepare($sql);
    $stmt->bindValue(1, $p->GetName());
    $stmt->bindValue(2, $p->GetDescription());
    $stmt->bindValue(3, $p->GetId());

    $stmt->execute();
  }
  public function Delete($id)
  {
    $sql = 'DELETE FROM products WHERE id = ?';
    $stmt = Connection::GetConn()->prepare($sql);
    $stmt->bindValue(1, $id);
    $stmt->execute();
  }
}
