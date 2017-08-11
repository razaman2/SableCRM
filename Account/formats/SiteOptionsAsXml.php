<?php

	namespace WSI\Account\formats;

	use WSI\Account\interfaces\IFormat;

	class SiteOptionsAsXml implements IFormat
	{
		public function format(array $data)
		{
			$values = "";

			foreach($data as $key => $val)
			{
				$values .= "<SiteOption option_id=\"".strtoupper($key)."\" option_value=\"".strtoupper($val)."\" />";
			}

			return '<SiteOptions>'.$values.'</SiteOptions>';
		}
	}