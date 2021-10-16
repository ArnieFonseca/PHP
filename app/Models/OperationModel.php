<?php
    namespace App\Models;
    
    use CodeIgniter\Model;
    
    class OperationModel extends Model
    {
        protected $table = 'operation';
        protected $db;

        /**
         * Constructor
         */
        public function __construct() {

            // Connect to mysql database
            $this->db =  \Config\Database::connect();
        }

        /**
         * Destructor
         */
        public function __destruct() {

            // Close the connection
            $this->db->close();
        }

        /**
         * Retrieve all operations from Database
         */
        public function getOperations() {

            // define SQL Statement 
            define('SQL_STMT' , "SELECT oper, description FROM operation;") ;

            // Get data from the operation table
            $operations = $this->db->query(SQL_STMT)
                               ->getResult();

            return $operations;
        }

        /**
         * Verify is the operation exist on the database
         */
        public function isOperationExist($operation)
        {
            $rc = false;

            $sql = "SELECT oper FROM  $this->table  WHERE oper = ?";
            $operations = $this->db->query($sql, [$operation])
                               ->getResult();

            if (count($operations) > 0) {
                $rc = true;
            }

            return $rc;
             
        }
    }
 ?>