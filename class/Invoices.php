<?php

class Invoices
{

    public function add($data)
    {

        $db = new DB();

        $query = "INSERT INTO `invoice` (`date`,`customer_name`,`email`, `description`, `amount`, `due_date`) VALUES('" . mysql_real_escape_string($_POST['date']) . "', '" . mysql_real_escape_string($_POST['name']) . "', '" . mysql_real_escape_string($_POST['email']) . "', '" . mysql_real_escape_string($_POST['description']) . "', " . $_POST['amount'] . ", '" . mysql_real_escape_string($_POST['due']) . "')";

        $result = $db->readQuery($query);

        return $result;
    }

    public function update($data)
    {

        $db = new DB();

        $query = "UPDATE `invoice` SET "
            . "`date` = '" . mysql_real_escape_string($_POST['date']) . "',"
            . "`customer_name` = '" . mysql_real_escape_string($_POST['name']) . "',"
            . "`email`= '" . mysql_real_escape_string($_POST['email']) . "',"
            . "`description` = '" . mysql_real_escape_string($_POST['description']) . "',"
            . "`amount` = '" . mysql_real_escape_string($_POST['amount']) . "',"
            . "`due_date` = '" . mysql_real_escape_string($_POST['due']) . "',"
            . "`attempts` = '" . mysql_real_escape_string($_POST['attempts']) . "'"
            . "WHERE `id` = " . $_POST['id'];

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function updateAttempts($attempts, $invoice)
    {

        $db = new DB();

        $query = "UPDATE `invoice` SET "
            . "`attempts` = '" . mysql_real_escape_string($attempts) . "'"
            . " WHERE `id` = " . $invoice;

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public static function getAttemptsByInvoice($id)
    {

        $db = new DB();

        $query = "SELECT * FROM `invoice` WHERE `id` = $id AND `status` = 0";

        $result = mysql_fetch_array($db->readQuery($query));

        return $result;
    }

    public function updateStatus($id, $ref)
    {

        $db = new DB();
        $id = (int) $id;
        $date = date("Y-m-d");
        $query = "UPDATE `invoice` SET `payment_date` = '" . $date . "', `reference` = '" . mysql_real_escape_string($ref) . "', `status` = 1 WHERE `id` = " . $id;

        $result = $db->readQuery($query);

        return $result;
    }

    public function refund($data)
    {

        $db = new DB();

        $query = "UPDATE `invoice` SET "
            . "`refund_amount` = '" . mysql_real_escape_string($_POST['amount']) . "',"
            . "`refund_date` = '" . mysql_real_escape_string($_POST['date']) . "',"
            . "`refund_reason`= '" . mysql_real_escape_string($_POST['reason']) . "',"
            . "`status` = 2 "
            . "WHERE `id` = " . $_POST['id'];

        if ($db->readQuery($query)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    public function getAll()
    {

        $db = new DB();

        $query = "SELECT * FROM `invoice` ORDER BY id DESC";

        $result = $db->readQuery($query);

        $array_res = array();

        while ($row = mysql_fetch_array($result)) {
            array_push($array_res, $row);
        }

        return $array_res;
    }

    public function getById($id)
    {

        $db = new DB();

        $query = "SELECT * FROM `invoice` WHERE `id` = '" . $id . "' LIMIT 1";

        $result = $db->readQuery($query);

        $row = mysql_fetch_assoc($result);

        return $row;
    }

    public function delete($id)
    {

        $db = new DB();

        $query = "DELETE FROM `invoice` WHERE `id` = '" . $id . "' LIMIT 1";

        if ($db->readQuery($query)) {
            $row = TRUE;
        } else {
            $row = FALSE;
        }

        return $row;
    }

    public function sendMail($id)
    {
        if (is_numeric($id)) {
            $invoices = new Invoices();

            $inv = $invoices->getById($id);
            if ($inv['status'] == 0) {
                if ($inv) {

                    $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
                    $subject = 'CoralSands Hotel | Web Invoice | #2500' . $inv["id"];

                    $from = 'info@coralsandshotel.com';
                    $email = $inv['email'];
                    $amount = $inv['amount'];
                    $repaly = 'accountant.coralsands@stmail.lk';

                    $headers = "From: " . $from . "\r\n";
                    $headers .= "Reply-To: " . $repaly . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . $subject . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    font-size: 18px;
                                    list-style-type: square;
                                    margin: 0px 20px 30px 10%;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                @media (max-width: 450px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                }
                            </style>
                        </head>
                        <body>
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span style="font-size: 20px; font-weight:900;">Web Invoice</span><br/>
                                <span style="font-size: 15px;"><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span style="font-size: 15px;">Email: coralsands@stmail&#173;.lk</span><br/>
                                <span style="font-size: 15px;">Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            <ul>
                                <li><span class="bb">Web Invoice ID : </span>#2500' . $inv["id"] . '<span></span></li>
                                <li><span class="bb">Date of Web Invoice : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Due Date : </span>' . $inv["due_date"] . '<span></span></li>
                                <li><span class="bb">Customer : </span><span>' . $inv["customer_name"] . '</span></li>
                            </ul>
                            <table width="80%" style="margin: 0px auto; font-size: 15px; font-family: sans-serif; padding: 0;">
                                <tr>
                                    <th width="100%"  colspan="2">Description</th> 
                                </tr>
                                <tr>
                                    <td colspan="2">' . $inv["description"] . '</td> 
                                </tr>
                                <tr style="height: 70px;"> 
                                    <td class="bdr"  colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="bdr-top"><b>Requested Advance</b></td>
                                    <td class="bdr bdr-top right"><b>$ ' . $inv["amount"] . '</b></td>
                                </tr>
                            </table>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $inv["id"] . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>
                        </body>
                    </html>';

                    if (mail($email, $subject, $html, $headers)) {
                        return TRUE;
                    } else {
                        return FALSE;
                    }
                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        } else {

            return 'invalid_invoice';
        }
    }

    public function sendMailToHotel($id)
    {
        if (is_numeric($id)) {
            $invoices = new Invoices();

            $inv = $invoices->getById($id);

            if ($inv) {

                $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
                $subject = 'Web Invoice Copy | #2500' . $inv["id"];

                $from = 'info@coralsandshotel.com';
                $repaly = $inv['email'];
                $amount = $inv['amount'];

                $headers = "From: " . $from . "\r\n";
                $headers .= "Reply-To: " . $repaly . "\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . $subject . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    font-size: 18px;
                                    list-style-type: square;
                                    margin: 0px 20px 30px 10%;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                @media (max-width: 450px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                }
                            </style>
                        </head>
                        <body>
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span style="font-size: 20px; font-weight:900;">Web Invoice</span><br/>
                                <span style="font-size: 15px;"><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span style="font-size: 15px;">Email: coralsands@stmail&#173;.lk</span><br/>
                                <span style="font-size: 15px;">Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            <ul>
                                <li><span class="bb">Web Invoice ID : </span>#2500' . $inv["id"] . '<span></span></li>
                                <li><span class="bb">Date of Web Invoice : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Due Date : </span>' . $inv["due_date"] . '<span></span></li>
                                <li><span class="bb">Customer : </span><span>' . $inv["customer_name"] . '</span></li>
                            </ul>
                            <table width="80%" style="margin: 0px auto; font-size: 15px; font-family: sans-serif; padding: 0;">
                                <tr>
                                    <th width="100%"  colspan="2">Description</th> 
                                </tr>
                                <tr>
                                    <td colspan="2">' . $inv["description"] . '</td> 
                                </tr>
                                <tr style="height: 70px;"> 
                                    <td class="bdr"  colspan="2"></td>
                                </tr>
                                <tr>
                                    <td class="bdr-top"><b>Requested Advance</b></td>
                                    <td class="bdr bdr-top right"><b>$ ' . $inv["amount"] . '</b></td>
                                </tr>
                            </table>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $inv["id"] . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>
                        </body>
                    </html>';

                $email1 = 'coralsands@stmail.lk';
                $email2 = 'accountant.coralsands@stmail.lk';
                $email3 = 'coralsands@sltnet.lk';
                // $email2 = 'kavini@synotec.lk';
                if (
                    mail($email1, $subject, $html, $headers) &&
                    mail($email2, $subject, $html, $headers) &&
                    mail($email3, $subject, $html, $headers)
                ) {
                    return TRUE;
                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
        } else {

            return 'invalid_invoice';
        }
    }

    public function sendConfirmationMail($status, $id, $recieptno)
    {

        if ($status === 'success') {
            if (is_numeric($id)) {
                $invoices = new Invoices();

                $inv = $invoices->getById($id);

                if ($inv) {

                    $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
                    $subject = 'Payment Status | Web Invoice | #2500' . $id;

                    $from = 'info@coralsandshotel.com';
                    $email = $inv['email'];
                    $amount = $inv['amount'];

                    $repaly = 'accountant.coralsands@stmail.lk';

                    $headers = "From: " . $from . "\r\n";
                    $headers .= "Reply-To: " . $repaly . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    if ($status === 'error') {
                        $repay = '<div>
                                <h3>Your transaction was NOT successful. Please  follow the payment process again. </h3>
                            </div>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $id . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>';
                    } else {
                        $repay = '';
                    }
                    if ($status === 'success') {
                        $msg = '<div style="font-size:16px; font-weight:600; margin-left:10%;">
                                Thank you for making an online payment with Coral Sands Hotel.
                          </div>';
                    } else {
                        $msg = '';
                    }

                    $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . $subject . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    font-size: 18px;
                                    list-style-type: square;
                                    margin: 0px 20px 30px 10%;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                @media (max-width: 450px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                }
                            </style>
                        </head>
                        <body>
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span style="font-size: 20px; font-weight:900;">Payment Receipt of Web Invoice</span><br/>
                                <span style="font-size: 15px;"><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span style="font-size: 15px;">Email: coralsands@stmail&#173;.lk</span><br/>
                                <span style="font-size: 15px;">Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            ' . $msg . '
                            <ul>
                                <li><span class="bb">Status : </span>' . $status . '<span></span></li>
                                <li><span class="bb">Web Invoice ID : </span>#2500' . $id . '<span></span></li>
                                <li><span class="bb">Customer : </span><span>' . $inv["customer_name"] . '</span></li>
                                <li><span class="bb">Payment Reference No : </span>' . $recieptno . '<span></span></li>
                                <li><span class="bb">Date of Invoice : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Amount : </span>US$ ' . $inv["amount"] . '<span></span></li>
                            </ul>
                            ' . $repay . '
                            
                        </body>
                    </html>';

                    if (mail($email, $subject, $html, $headers)) {
                        return TRUE;
                    } else {
                        return FALSE;
                    }
                } else {
                    return FALSE;
                }
            } else {

                return 'invalid_invoice';
            }
        } else {
            return FALSE;
        }
    }

    public function sendConfirmationMailToHotel($status, $id, $recieptno)
    {
        if ($status === 'success') {
            if (is_numeric($id)) {
                $invoices = new Invoices();

                $inv = $invoices->getById($id);

                if ($inv) {

                    $site = str_replace("www.", "", $_SERVER['HTTP_HOST']);
                    $subject = 'Payment Status';

                    $from = 'info@coralsandshotel.com';
                    $repaly = $inv['email'];
                    $amount = $inv['amount'];


                    $headers = "From: " . $from . "\r\n";
                    $headers .= "Reply-To: " . $repaly . "\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

                    if ($status === 'error') {
                        $repay = '<div>
                                <h3>Your transaction was NOT successful. Please  follow the payment process again. </h3>
                            </div>
                            <div style="text-align: center; margin: 35px 0px;">
                                <a href="http://' . $site . '/invoice-pay.php?id=' . $id . '" style="padding: 15px; font-weight: bold; text-decoration: none; background-color: #ff4200; color: #dfdfdf; border-radius: 3px;">Complete Payment</a>
                            </div>';
                    } else {
                        $repay = '';
                    }

                    $html = '<!DOCTYPE html>
                    <html>
                        <head>
                            <title>' . $subject . '</title>
                            <style type="text/css">
                                table {
                                    border: 1px solid #d0d0d0;
                                }
                                th {
                                    border-bottom: 1px solid #d0d0d0;
                                    padding: 15px 10px 10px 25px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                td {
                                    padding: 10px 10px 5px 10px;
                                    text-align: left;
                                    margin: 0px;
                                }
                                ul {
                                    font-size: 18px;
                                    list-style-type: square;
                                    margin: 0px 20px 30px 10%;
                                }
                                li {
                                    padding: 5px;
                                }
                                img {
                                    width: 120px;
                                    margin: 0px auto;
                                }
                                .bdr {
                                    border-left: 1px solid #d0d0d0;
                                }
                                .bdr-top {
                                    border-top: 1px solid #d0d0d0;
                                }
                                .bb {
                                    font-weight: bold;
                                }
                                .right {
                                    text-align: right;
                                }
                                @media (max-width: 450px) {
                                    ul { font-size: 14px; }
                                    td { font-size: 12px; }
                                }
                            </style>
                        </head>
                        <body>
                            <div style="width: 100%; text-align: center; font-size: 20px; margin: 10px 0px 30px 0px;">
                                <!--            <b style="font-size: 25px; text-decoration: underline;">Coral Sands Hotel</b><br/>-->
                                <img src="http://' . $site . '/images/logo/logo.png" alt="Coral Sands"/><br/>
                                <span style="font-size: 20px; font-weight:900;">Payment Receipt of Web Invoice</span><br/>
                                <span style="font-size: 15px;"><a href="" style="text-decoration:none;color: #000;">No.326, Galle Rd, Hikkaduwa, Sri Lanka</a></span><br/>
                                <span style="font-size: 15px;">Email: coralsands@stmail&#173;.lk</span><br/>
                                <span style="font-size: 15px;">Phone: +94 91 227 7513 / +94 91 227 7436</span>
                            </div>
                            <ul>
                                <li><span class="bb">Status : </span>' . $status . '<span></span></li>
                                <li><span class="bb">Web Invoice ID : </span>#2500' . $id . '<span></span></li>
                                <li><span class="bb">Customer : </span><span>' . $inv["customer_name"] . '</span></li>
                                <li><span class="bb">Payment Reference No : </span>' . $recieptno . '<span></span></li>
                                <li><span class="bb">Date of Invoice : </span>' . $inv["date"] . '<span></span></li>
                                <li><span class="bb">Amount : </span>US$ ' . $inv["amount"] . '<span></span></li>
                            </ul>
                            ' . $repay . '
                            
                        </body>
                    </html>';

                    $email1 = 'accountant.coralsands@stmail.lk';
                    $email2 = 'coralsands@stmail.lk';
                    $email3 = 'coralsands@sltnet.lk';
                    // $email2 = 'kavini@synotec.lk';
                    if (
                        mail($email1, $subject, $html, $headers) &&
                        mail($email2, $subject, $html, $headers) &&
                        mail($email3, $subject, $html, $headers)
                    ) {
                        return TRUE;
                    } else {
                        return FALSE;
                    }
                } else {
                    return FALSE;
                }
            } else {

                return 'invalid_invoice';
            }
        } else {
            return FALSE;
        }
    }

    public function invoicesCountByDate($date)
    {

        $query = "SELECT count(1) FROM `invoice` WHERE (`payment_date` = '" . $date . "') AND (`status` = 1) ";
        $db = new DB();
        $result = $db->readQuery($query);

        $row = mysql_fetch_array($result);

        $total = $row[0];

        return $total;
    }
}
