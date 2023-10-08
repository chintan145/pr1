<?php



namespace App\Controllers;



use App\Models\MasterInformationModel;

use Config\Database;



class BookingController extends BaseController
{
    public function __construct()

	{
		helper('custom');
		$db = db_connect();
		$this->MasterInformationModel = new MasterInformationModel($db);
		// $this->username = session_username($_SESSION['username']);
		// $this->admin = 0;
		// if (isset($_SESSION['admin']) && !empty($_SESSION['admin'])) {
		// 	$this->admin = 1;
		// }
		// $tiemzone= timezone('Y-m-d');
		// $tiemzone_with_time = timezone('Y-m-d h:m');
	}

    public function booking_insert_data()
	{
        pre($_POST);
        die();
    }
}

?>