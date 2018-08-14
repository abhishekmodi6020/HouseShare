<?php
   class Expense_Model extends CI_Model {

      function __construct() {
         parent::__construct();
      }

      public function insert($data) {
         if ($this->db->insert("expenses", $data)) {
            return true;
         }
      }

      public function delete($expenseid) {
         if ($this->db->delete("expenses", "ExpenseId = ".$expenseid)) {
            return true;
         }
      }

      public function update($data,$expenseid) {   
        $this->db->where("ExpenseId", $expenseid);
        $this->db->update("expenses", $data);
     }


   }
?>
