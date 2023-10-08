<?php namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class MasterInformationModel extends Model{
    protected $db;
    public function __construct(ConnectionInterface &$db) {
        $this->db =& $db;
        helper('custom');
    }

    public function insert_entry($data,$tablename){
        $this->db->table($tablename)->insert($data);
        $insert_id = $this->db->insertID();
        return $insert_id;
    }
}
?>