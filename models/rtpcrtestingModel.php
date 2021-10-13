<?php
class Rtpcrtesting
{
    public $rtpcrtesting_ID,$TestingID,$labroom_ID,$result,$officer_N,$labanalyst_Name,$rtpcr_datetime,$rtpcr_result;
    public function __construct($rtpcrtesting_ID, $TestingID, $labroom_ID, $result, $officer_N, $labanalyst_Name,$rtpcr_datetime,$rtpcr_result)
    {
        $this->rtpcrtesting_ID = $rtpcrtesting_ID;
        $this->TestingID = $TestingID;
        $this->labroom_ID = $labroom_ID;
        $this->result = $result;
        $this->officer_N = $officer_N;
        $this->labanalyst_Name = $labanalyst_Name;
        $this->rtpcr_datetime = $rtpcr_datetime;
        $this->rtpcr_result = $rtpcr_result;
    }
    public static  function getAll()
    {
        $rtpcrList = [];
        require("connection_connect.php");
        $sql = "SELECT * FROM `rtpcrtesting`
        INNER JOIN atktesting ON atktesting.TestingID = rtpcrtesting.TestingID
        INNER JOIN officer ON officer.officer_ID = rtpcrtesting.officer_ID
        INNER JOIN labroom ON labroom.labroom_ID = rtpcrtesting.labroom_ID";
        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            $rtpcrtesting_ID = $my_row["rtpcrtesting_ID"];
            $TestingID = $my_row["TestingID"];
            $labroom_ID = $my_row["labroom_ID"];
            $result = $my_row["result"];
            $officer_N = $my_row["officer_N"];
            $labanalyst_Name = $my_row["labanalyst_Name"];;
            $rtpcr_datetime = $my_row["rtpcr_datetime"];;
            $rtpcr_result = $my_row["rtpcr_result"];;

            $rtpcrList[] = new Rtpcrtesting($rtpcrtesting_ID, $TestingID, $labroom_ID, $result, $officer_N, $labanalyst_Name,$rtpcr_datetime,$rtpcr_result);
        }

        require("connection_close.php");
        return $rtpcrList;
    }

    public static function get($rtpcrtesting_ID)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM `rtpcrtesting` WHERE `rtpcrtesting_ID`= '$rtpcrtesting_ID'";
        $result = $conn->query($sql);
        $my_row = $result->fetch_assoc();
        $rtpcrtesting_ID = $my_row["rtpcrtesting_ID"];
        $TestingID = $my_row["TestingID"];
        $labroom_ID = $my_row["labroom_ID"];
        $result = $my_row["result"];
        $officer_N = $my_row["officer_N"];
        $labanalyst_Name = $my_row["labanalyst_Name"];;
        $rtpcr_datetime = $my_row["rtpcr_datetime"];;
        $rtpcr_result = $my_row["rtpcr_result"];;
        require("connection_close.php");
        return new Rtpcrtesting($rtpcrtesting_ID, $TestingID, $labroom_ID, $result, $officer_N, $labanalyst_Name,$rtpcr_datetime,$rtpcr_result);
    }

    public static function add($rtpcrtesting_ID, $TestingID, $labroom_ID,$rtpcr_datetime,$rtpcr_result)
    {
        require("connection_connect.php");
        $sql = "INSERT INTO `rtpcrtesting`(`rtpcrtesting_ID`, `TestingID`, `labroom_ID`, `rtpcr_result`, `rtpcr_datetime`, `officer_ID`) 
        VALUES ('$rtpcrtesting_ID','$TestingID','$labroom_ID','$rtpcr_result','$rtpcr_datetime','$officer_ID')";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "add success $result rows";
    }
    public static function search($key)
    {
        require("connection_connect.php");
        $sql = "SELECT * FROM quatation WHERE 
                    `No` like '%$key%'
                    OR `Date` like '%$key%' 
                    OR `EmID` like '%$key%' 
                    OR `CusID` like '%$key%'
                    OR `Deposit` like '%$key%' 
                    OR `Credit` like '%$key%'";
        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            $No = $my_row["No"];
            $Date = $my_row["Date"];
            $EmID = $my_row["EmID"];
            $CusID = $my_row["CusID"];
            $Deposit = $my_row["Deposit"];
            $Credit = $my_row["Credit"];
            $search[] = new Rtpcrtesting($rtpcrtesting_ID, $TestingID, $labroom_ID, $result, $officer_N, $labanalyst_Name,$rtpcr_datetime,$rtpcr_result);
        }
        require("connection_close.php");
        return $search;
    }
    public static function update($No, $Date, $EmID, $CusID, $Deposit, $Credit)
    {
        require("connection_connect.php");
        $sql = "UPDATE `quatation` SET    
                    `Date`='$Date',
                    `EmID`='$EmID',
                    `CusID`='$CusID',
                    `Deposit`='$Deposit',
                    `Credit`='$Credit' 
                WHERE `No`='$No'";

        $result = $conn->query($sql);
        require("connection_close.php");
        return "update success $result row";
    }
    public static function delete($No)
    {
        require("connection_connect.php");
        $sql = "DELETE FROM quatation WHERE `No`='$No'";
        $result = $conn->query($sql);
        require("connection_close.php");
        return "delete success $result row";
    }
}