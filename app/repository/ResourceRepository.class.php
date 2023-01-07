<?php

namespace Repository;

use Core\Repository;
use Model\Resource;

class ResourceRepository extends Repository {
    
    private static $tblResource = "tbl_resource";

    public function create(Resource $resource)
    {
        $sql = "INSERT INTO ".self::$tblResource."
                    (id, item, quantity, price, total, notes, proj_id, active)
                VALUES
                    (:id, :item, :quantity, :price, :total, :notes, :proj_id, :active)";
        
        $params = [
            ':id' => $resource->getId(),
            ':item' => $resource->getItem(),
            ':quantity' => $resource->getQuantity(),
            ':price' => $resource->getPrice(),
            ':total' => $resource->getTotal(),
            ':notes' => $resource->getNotes(),
            ':proj_id' => $resource->getProjectId(),
            ':active' => $resource->getActive()
        ];

        // Result
        return $this->query($sql, $params);
    }

    public function getActiveResources(string $projectId)
    {
        $sql = "SELECT * 
                FROM ".self::$tblResource."
                WHERE proj_id = :proj_id AND active = :active";

        $params = [
            ':proj_id' => $projectId,
            ':active' => true
        ];

        // Result
        return $this->query($sql, $params);
    }

}