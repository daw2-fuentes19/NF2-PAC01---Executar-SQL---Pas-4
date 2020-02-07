<?php
require("abstract.databoundobject.php");
class User extends DataBoundObject {

        protected $Username;
        protected $Password;
        protected $LockedStatus;
        protected $LoggedStatus;
        protected $EmailAddress;
        protected $OrgId;
        protected $SubOrgId;

        protected $EmployeeID;
        protected $EmpName;
        protected $DesignationID;
        protected $DepartmentID;
        protected $StaffType;

        protected $DeptName;
        protected $DeptDescription;
        protected function DefineTableName() {
                return("users");
                
        }
        protected function DefineTableName2() {
                return("employee");
                
        }
        protected function DefineTableName3() {
                return("department");
                
        }

        protected function DefineRelationMap() {
                return(array(
                        "id" => "ID",
                        "user_name" => "Username",
                        "password" => "Password",
                        "lockedStatus" => "LockedStatus",
                        "loggedStatus" => "LoggedStatus",
                        "email" => "EmailAddress",
                        "org_id" => "OrgId",
                        "suborg_id" => "SubOrgId"));
        }
          protected function DefineRelationMap2() {
                return(array(
                        "id" => "ID",
                        "employee_id" => "EmployeeID",
                        "emp_name" => "EmpName",
                        "designation_id" => "DesignationID",
                        "department_id" => "DepartmentID",
                        "staff_type" => "StaffType"));

        }
        protected function DefineRelationMap3() {
                return(array(
                        "id" => "ID",
                        "dept_name" => "DeptName",
                        "dept_description" => "DeptDescription"));
                
        }
}

?>
