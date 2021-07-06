<?php



/**

 * Description of Booking

 *

 * @author User

 */

class Booking

{



    public $id;

    public $date;

    public $name;

    public $email;

    public $country;

    public $contact;

    public $checkin;

    public $checkout;

    public $message;

    public $total;

    public $advance;

    public $status;



    public function __construct($id)

    {

        if ($id) {



            $query = "SELECT *  FROM `booking` WHERE `id`='" . $id . "'";



            $db = new DB();



            $result = mysql_fetch_assoc($db->readQuery($query));



            $this->id = $result['id'];

            $this->date = $result['date'];

            $this->name = $result['name'];

            $this->email = $result['email'];

            $this->country = $result['country'];

            $this->contact = $result['contact_no'];

            $this->checkin = $result['check_in'];

            $this->checkout = $result['check_out'];

            $this->message = $result['message'];

            $this->total = $result['total_price'];

            $this->advance = $result['advance_payment'];

            $this->status = $result['status'];



            return $result;
        }
    }



    public function create($date, $name, $country, $email, $contact, $checkin, $checkout, $message, $total, $advance)

    {

        $db = new DB();

        $query = "INSERT INTO `booking` (`date`,`name`,`email`,`country`,`contact_no`,`check_in`,`check_out`,`message`,`total_price`, `advance_payment`) VALUES  ('" . mysql_real_escape_string($date) . "', '" . mysql_real_escape_string($name) . "', '" . mysql_real_escape_string($email) . "', '" . mysql_real_escape_string($country) . "', '" . mysql_real_escape_string($contact) . "', '" . mysql_real_escape_string($checkin) . "', '" . mysql_real_escape_string($checkout) . "', '" . mysql_real_escape_string($message) . "', '" . mysql_real_escape_string($total) . "', '" . mysql_real_escape_string($advance) . "')";



        $result = $db->readQuery($query);



        if ($result) {

            $last_id = mysql_insert_id();



            return $last_id;
        } else {

            return FALSE;
        }
    }



    public function all()

    {



        $query = "SELECT * FROM `booking`";

        $db = new DB();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }



    public function getPaidBooking()

    {



        $query = "SELECT * FROM `booking` WHERE `status`='1' ";

        $db = new DB();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }



    public function getEmailByID($bookingid)

    {



        $query = "SELECT email  FROM `booking` WHERE `id`='" . $bookingid . "'";



        $db = new DB();

        $result = $db->readQuery($query);

        dd($result['email']);



        return $result;
    }



    public function getUnpaidBooking()

    {



        $query = "SELECT * FROM `booking` WHERE `status`='0' ";

        $db = new DB();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }



    public function updateResponse($id, $status)

    {

        $db = new DB();

        $query = "UPDATE `booking` SET "

            . "`status` ='" . mysql_real_escape_string($status) . "' "

            . " WHERE `id` = '" . mysql_real_escape_string($id) . "'";



        $result = $db->readQuery($query);



        if ($result) {

            return TRUE;
        } else {

            return FALSE;
        }
    }



    public function delete()

    {



        $query = 'DELETE FROM `booking` WHERE id="' . $this->id . '"';



        $db = new DB();

        return $db->readQuery($query);
    }



    public function bookingCountByDate($date, $status)

    {

        $db = new DB();

        $query = "SELECT count(1) FROM `booking` WHERE `date` = '" . mysql_real_escape_string($date) . "' AND `status` = '" . mysql_real_escape_string($status) . "'";

        $result = $db->readQuery($query);



        $row = mysql_fetch_array($result);



        $total = $row[0];



        return $total;
    }



    public function countFilterBookings($field, $date)

    {



        $query = "SELECT count(id) FROM `booking` WHERE `" . $field . "` = '" . $date . "'";



        $db = new DB();

        $result = $db->readQuery($query);



        $row = mysql_fetch_array($result);



        $total = $row[0];



        return $total;
    }



    public function filterBookings($field, $date)

    {



        $query = "SELECT * FROM `booking` WHERE `" . $field . "` = '" . $date . "'";



        $db = new DB();

        $result = $db->readQuery($query);

        $array_res = array();



        while ($row = mysql_fetch_array($result)) {

            array_push($array_res, $row);
        }



        return $array_res;
    }

    public function updateAttempts($attempts, $booking)
    {

        $db = new DB();

        $query = "UPDATE `booking` SET "
            . "`attempts` = '" . mysql_real_escape_string($attempts) . "'"
            . " WHERE `id` = " . $booking;

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public static function getAttemptsByBooking($id)
    {

        $db = new DB();

        $query = "SELECT * FROM `booking` WHERE `id` = $id";

        $result = mysql_fetch_array($db->readQuery($query));

        return $result;
    }
}
