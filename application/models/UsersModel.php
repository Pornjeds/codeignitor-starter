<?php
class UsersModel extends CI_Model {

    public function get_all_users()
    {
        $sql = "SELECT  `users`.`UserID`,
                        `users`.`UserName`,
                        `users`.`Password`,
                        `users`.`FirstName`,
                        `users`.`LastName`,
                        `users`.`NickName`,
                        `users`.`IsSalesPerson`,
                        `users`.`IsApprovable`,
                        `users`.`WorkingID`,
                        `users`.`DepartmentID`,
                        `users`.`PositionID`,
                        `users`.`CreatedBy`,
                        `users`.`Created`,
                        `users`.`UpdatedBy`,
                        `users`.`Updated`,
                        `users`.`ContactNumber`
                        FROM `amselnutradb`.`users`;";

        $query = $this->db->query($sql);

        return $query->num_rows() > 0 ? $query->result() : false;
    }

}
?>