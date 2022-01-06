<?php
require_once "database.php";

class ProductDB extends Database{

    public function Products(): array {
        $query = "select * from exam.products";
        return $this->execute($query);
    }

    public function SorterAsc($asc): array {
        $query = "select * from exam.products order by $asc";
        return $this->execute($query);
    }

    public function SorterDes($desc): array {
        $query = "select * from exam.products order by $desc desc";
        return $this->execute($query);
    }
}