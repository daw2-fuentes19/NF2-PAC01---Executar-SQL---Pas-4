<?php
        require("class.pdofactory.php");
      
        require("class.user3.php");

        print "Running...<br />";

        $strDSN = "pgsql:dbname=postgres;host=localhost;port=5432";
        $objPDO = PDOFactory::GetPDO($strDSN, "postgres", "", 
            array());
        $objPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $objUser = new User($objPDO);
        $objUser2 = new User($objPDO);
        $objUser3 = new User($objPDO);

        $objUser->setUsername("Steve");
        $objUser->setPassword("Nowicki");
        $objUser->setLockedStatus(1);
        $objUser->setLoggedStatus(0);
        $objUser->setEmailAddress("Nowicki@gmail.com");
        $objUser->setOrgId(1111);
        $objUser->setSubOrgId(222);

        
        $objUser2->setEmployeeID(666);
        $objUser2->setEmpName("Raul");
        $objUser2->setDesignationID(777);
        $objUser2->setDepartmentID(888);
        $objUser2->setStaffType(3);

        $objUser3->setDeptName("Recursos humanos");
        $objUser3->setDeptDescription(8);
         
        //////////////////////////////////////
        print "First name is " . $objUser->getUsername() . "<br />";
        print "Password is: " . $objUser->getPassword() . "<br />";
        print "Locked is: " . $objUser->getLockedStatus() . "<br />";
        print "Logged is: " . $objUser->getLoggedStatus() . "<br />";
        print "Email Address is " . $objUser->getEmailAddress() . "<br />";
        print "The org: " . $objUser->getOrgId() . "<br />";
        print "The suborg:  " . $objUser->getSubOrgId() . "<br />";

        print "<br/>";

        print "EmployeeID is " . $objUser2->getEmployeeID() . "<br />";
        print "Empname is " . $objUser2->getEmpName() . "<br />";
        print "Email Address is " . $objUser2->getDesignationID() . "<br />";
        print "The departmentID is: " . $objUser2->getDepartmentID() . "<br />";
        print "The staff type:  " . $objUser2->getStaffType() . "<br />";

        print "The departName is: " . $objUser3->getDeptName() . "<br />";
        print "The departDescription:  " . $objUser3->getDeptDescription() . "<br />";




        print "Saving...<br />";
        /////////////////////////////////////
        print "<br/>";


        /*$objUser->Save();
        $objUser2->Save2();
        $objUser3->Save3();*/

        $id = $objUser->getID();
        $id2= $objUser2->getID();
        $id3= $objUser2->getID();

        print "ID in database is " . $id . "<br />";
        print "ID in database is " . $id2 . "<br />";
        print "ID in database is " . $id2 . "<br />";

        print "Destroying object...<br />";
        unset($objUser);
        unset($objUser2);
        unset($objUser3);
        print "Recreating object from ID $id<br />";
        $objUser = new User($objPDO, $id);
        $objUser2 = new User($objPDO, $id2);
        $objUser3 = new User($objPDO, $id3);

        /*$objUser->setUsername("Jordi");
        $objUser->setPassword("Fuentes");
        $objUser->setLockedStatus(0);
        $objUser->setLoggedStatus(1);
        $objUser->setEmailAddress("culturalfuenteslopeza@gmail.com");
        $objUser->setOrgId(3333);
        $objUser->setSubOrgId(111);*/

        $objUser->setUsername('Harry Potter')->setPassword('J. K. Rowlings')->setLockedStatus(1)->setLoggedStatus(0)->setEmailAddress('adriafuenteslopez@hotmail.com')->setOrgId(686)->setSubOrgId(888)->Save();

       /* $objUser2->setEmployeeID(666);
        $objUser2->setEmpName("Raul");
        $objUser2->setDesignationID(777);
        $objUser2->setDepartmentID(888);
        $objUser2->setStaffType(3);*/
        $objUser2->setEmployeeID(888)->setEmpName('Fuentes')->setDesignationID(666)->setDepartmentID(777)->setStaffType(8)->Save2();


        /*
        $objUser3->setDeptName("Recursos humanos");
        $objUser3->setDeptDescription(8);*/
        $objUser3->setDeptName("Departamento Harry")->setDeptDescription(8)->Save3();


        ///////////////////////////////////
        print "First name is " . $objUser->getUsername() . "<br />";
        print "Password is " . $objUser->getPassword() . "<br />";
        print "Locked is " . $objUser->getLockedStatus() . "<br />";
        print "Logged is " . $objUser->getLoggedStatus() . "<br />";
        print "Email Address is " . $objUser->getEmailAddress() . "<br />";
        print "The org " . $objUser->getOrgId() . "<br />";
        print "The suborg:  " . $objUser->getSubOrgId() . "<br />";

        print "<br/>";

        print "EmployeeID is " . $objUser2->getEmployeeID() . "<br />";
        print "Empname is " . $objUser2->getEmpName() . "<br />";
        print "Email Address is " . $objUser2->getDesignationID() . "<br />";
        print "The departmentID is: " . $objUser2->getDepartmentID() . "<br />";
        print "The staff type:  " . $objUser2->getStaffType() . "<br />";

        print "<br/>";

        print "The departName is: " . $objUser3->getDeptName() . "<br />";
        print "The departDescription:  " . $objUser3->getDeptDescription() . "<br />";


        print "Committing a change.... Steve will become Steven, 
               Nowicki will become Nowickcow<br/>";
       

        
        print "Saving...<br />";
        /*
        $objUser->Save();
        $objUser2->Save2();
        $objUser3->Save3();*/
?>
