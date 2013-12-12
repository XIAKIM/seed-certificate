<?php

class FormController extends BaseController {
	protected $layout = "index";
	
	public function testPDF() {
		$html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';
    	return PDF::load($html, 'A4', 'portrait')->show();
	}

	public function showPDFPP3($id) {
		$certificate = Certificate::find($id);
		$pp1 = PP1::where('requestID', '=', $certificate->requestID)->first();
		$user = User::find($pp1->userID);
		$description = Description::find($user->descriptionID);
		$pdf = App::make('dompdf');
		$createdYear = intval(substr($certificate->expiredDate, 0, 4)) + 542;
		$expiredYear = intval(substr($certificate->expiredDate, 0, 4)) + 543;
		$html = '<img style="margin-left: -30px; position: absolute;" src="pp3.jpg" height="1024" width="768">'
				. '<p style="position: absolute; margin-top:290px; margin-left: 200px;">' . $certificate->id . '</p>'
				. '<p style="position: absolute; margin-top:360px; margin-left: 310px;">' . $pp1->companyName . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 180px;">' . $pp1->companyAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 290px;">' . $pp1->companyAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 380px;">' . $pp1->companyAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 530px;">' . $pp1->companyAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 150px;">' . $pp1->companyAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 340px;">' . $pp1->companyAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 515px;">' . $pp1->companyAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:440px; margin-left: 120px;">' . $pp1->ownerName . '</p>'
				. '<p style="position: absolute; margin-top:555px; margin-left: 180px;">' . $pp1->collectingLocationNo . '</p>'
				. '<p style="position: absolute; margin-top:555px; margin-left: 290px;">' . $pp1->collectingLocationMoo . '</p>'
				. '<p style="position: absolute; margin-top:555px; margin-left: 380px;">' . $pp1->collectingLocationSoi . '</p>'
				. '<p style="position: absolute; margin-top:555px; margin-left: 530px;">' . $pp1->collectingLocationRoad . '</p>'
				. '<p style="position: absolute; margin-top:580px; margin-left: 150px;">' . $pp1->collectingLocationSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:580px; margin-left: 340px;">' . $pp1->collectingLocationDistrict . '</p>'
				. '<p style="position: absolute; margin-top:580px; margin-left: 515px;">' . $pp1->collectingLocationProvince . '</p>'
				. '<p style="position: absolute; margin-top:610px; margin-left: 180px;">' . $pp1->storingAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:610px; margin-left: 290px;">' . $pp1->storingAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:610px; margin-left: 380px;">' . $pp1->storingAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:610px; margin-left: 530px;">' . $pp1->storingAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:635px; margin-left: 150px;">' . $pp1->storingAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:635px; margin-left: 340px;">' . $pp1->storingAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:635px; margin-left: 515px;">' . $pp1->storingAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:665px; margin-left: 280px;">' . substr($certificate->expiredDate, 5, 2) . '</p>'
				. '<p style="position: absolute; margin-top:665px; margin-left: 390px;">' . substr($certificate->expiredDate, 8, 2) . '</p>'
				. '<p style="position: absolute; margin-top:665px; margin-left: 530px;">' . $createdYear . '</p>'
				. '<p style="position: absolute; margin-top:690px; margin-left: 235px;">' . $expiredYear . '</p>'
				;
		$pdf->loadHTML($html);
		return $pdf->stream();
	}

	public function showPDFPP4($id) {
		$certificate = Certificate::find($id);
		$pp1 = PP1::where('requestID', '=', $certificate->requestID)->first();
		$user = User::find($pp1->userID);
		$description = Description::find($user->descriptionID);
		$pdf = App::make('dompdf');
		$createdYear = intval(substr($certificate->expiredDate, 0, 4)) + 542;
		$expiredYear = intval(substr($certificate->expiredDate, 0, 4)) + 543;
		$html = '<img style="margin-left: -30px; position: absolute;" src="pp4.jpg" height="1024" width="768">'
				. '<p style="position: absolute; margin-top:290px; margin-left: 200px;">' . $certificate->id . '</p>'
				. '<p style="position: absolute; margin-top:360px; margin-left: 310px;">' . $pp1->companyName . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 180px;">' . $pp1->companyAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 290px;">' . $pp1->companyAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 380px;">' . $pp1->companyAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 530px;">' . $pp1->companyAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 150px;">' . $pp1->companyAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 340px;">' . $pp1->companyAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 515px;">' . $pp1->companyAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:440px; margin-left: 120px;">' . $pp1->ownerName . '</p>'
				. '<p style="position: absolute; margin-top:530px; margin-left: 180px;">' . $pp1->storingAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:530px; margin-left: 290px;">' . $pp1->storingAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:530px; margin-left: 380px;">' . $pp1->storingAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:530px; margin-left: 530px;">' . $pp1->storingAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:555px; margin-left: 150px;">' . $pp1->storingAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:555px; margin-left: 340px;">' . $pp1->storingAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:555px; margin-left: 515px;">' . $pp1->storingAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:585px; margin-left: 280px;">' . substr($certificate->expiredDate, 5, 2) . '</p>'
				. '<p style="position: absolute; margin-top:585px; margin-left: 390px;">' . substr($certificate->expiredDate, 8, 2) . '</p>'
				. '<p style="position: absolute; margin-top:585px; margin-left: 530px;">' . $createdYear . '</p>'
				. '<p style="position: absolute; margin-top:610px; margin-left: 235px;">' . $expiredYear . '</p>'
				;
		$pdf->loadHTML($html);
		return $pdf->stream();
	}

	public function showPDFPP5($id) {
		$certificate = Certificate::find($id);
		$pp1 = PP1::where('requestID', '=', $certificate->requestID)->first();
		$user = User::find($pp1->userID);
		$description = Description::find($user->descriptionID);
		$pdf = App::make('dompdf');
		$createdYear = intval(substr($certificate->expiredDate, 0, 4)) + 542;
		$expiredYear = intval(substr($certificate->expiredDate, 0, 4)) + 543;
		$html = '<img style="margin-left: -30px; position: absolute;" src="pp5.jpg" height="1024" width="768">'
				. '<p style="position: absolute; margin-top:290px; margin-left: 200px;">' . $certificate->id . '</p>'
				. '<p style="position: absolute; margin-top:360px; margin-left: 310px;">' . $pp1->companyName . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 180px;">' . $pp1->companyAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 290px;">' . $pp1->companyAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 380px;">' . $pp1->companyAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:385px; margin-left: 530px;">' . $pp1->companyAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 150px;">' . $pp1->companyAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 340px;">' . $pp1->companyAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:410px; margin-left: 515px;">' . $pp1->companyAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:440px; margin-left: 120px;">' . $pp1->ownerName . '</p>'
				. '<p style="position: absolute; margin-top:580px; margin-left: 180px;">' . $pp1->storingAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:580px; margin-left: 290px;">' . $pp1->storingAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:580px; margin-left: 380px;">' . $pp1->storingAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:580px; margin-left: 530px;">' . $pp1->storingAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:605px; margin-left: 150px;">' . $pp1->storingAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:605px; margin-left: 340px;">' . $pp1->storingAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:605px; margin-left: 515px;">' . $pp1->storingAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:635px; margin-left: 280px;">' . substr($certificate->expiredDate, 5, 2) . '</p>'
				. '<p style="position: absolute; margin-top:635px; margin-left: 390px;">' . substr($certificate->expiredDate, 8, 2) . '</p>'
				. '<p style="position: absolute; margin-top:635px; margin-left: 530px;">' . $createdYear . '</p>'
				. '<p style="position: absolute; margin-top:660px; margin-left: 120px;">31</p>'
				. '<p style="position: absolute; margin-top:660px; margin-left: 200px;">12</p>'
				. '<p style="position: absolute; margin-top:660px; margin-left: 290px;">' . $expiredYear . '</p>'
				;
		$pdf->loadHTML($html);
		return $pdf->stream();
	}

	public function showPDFPP6($id) {
		$certificate = Certificate::find($id);
		$pp1 = PP1::where('requestID', '=', $certificate->requestID)->first();
		$user = User::find($pp1->userID);
		$description = Description::find($user->descriptionID);
		$pdf = App::make('dompdf');
		$createdYear = intval(substr($certificate->expiredDate, 0, 4)) + 542;
		$expiredYear = intval(substr($certificate->expiredDate, 0, 4)) + 543;
		$html = '<img style="margin-left: -30px; position: absolute;" src="pp6.jpg" height="1024" width="768">'
				. '<p style="position: absolute; margin-top:270px; margin-left: 200px;">' . $certificate->id . '</p>'
				. '<p style="position: absolute; margin-top:340px; margin-left: 310px;">' . $pp1->companyName . '</p>'
				. '<p style="position: absolute; margin-top:365px; margin-left: 180px;">' . $pp1->companyAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:365px; margin-left: 290px;">' . $pp1->companyAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:365px; margin-left: 380px;">' . $pp1->companyAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:365px; margin-left: 530px;">' . $pp1->companyAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:390px; margin-left: 150px;">' . $pp1->companyAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:390px; margin-left: 340px;">' . $pp1->companyAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:390px; margin-left: 515px;">' . $pp1->companyAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:420px; margin-left: 120px;">' . $pp1->ownerName . '</p>'
				. '<p style="position: absolute; margin-top:535px; margin-left: 180px;">' . $pp1->storingAddressNo . '</p>'
				. '<p style="position: absolute; margin-top:535px; margin-left: 290px;">' . $pp1->storingAddressMoo . '</p>'
				. '<p style="position: absolute; margin-top:535px; margin-left: 380px;">' . $pp1->storingAddressSoi . '</p>'
				. '<p style="position: absolute; margin-top:535px; margin-left: 530px;">' . $pp1->storingAddressRoad . '</p>'
				. '<p style="position: absolute; margin-top:560px; margin-left: 150px;">' . $pp1->storingAddressSubDistrict . '</p>'
				. '<p style="position: absolute; margin-top:560px; margin-left: 340px;">' . $pp1->storingAddressDistrict . '</p>'
				. '<p style="position: absolute; margin-top:560px; margin-left: 515px;">' . $pp1->storingAddressProvince . '</p>'
				. '<p style="position: absolute; margin-top:595px; margin-left: 280px;">' . substr($certificate->expiredDate, 5, 2) . '</p>'
				. '<p style="position: absolute; margin-top:595px; margin-left: 390px;">' . substr($certificate->expiredDate, 8, 2) . '</p>'
				. '<p style="position: absolute; margin-top:595px; margin-left: 530px;">' . $createdYear . '</p>'
				. '<p style="position: absolute; margin-top:620px; margin-left: 120px;">31</p>'
				. '<p style="position: absolute; margin-top:620px; margin-left: 200px;">12</p>'
				. '<p style="position: absolute; margin-top:620px; margin-left: 290px;">' . $expiredYear . '</p>'
				;
		$pdf->loadHTML($html);
		return $pdf->stream();
	}
}
