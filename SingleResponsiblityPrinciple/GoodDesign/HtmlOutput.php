<?php

namespace Report;


class HtmlOutput implements OrdersOutPutInterface
{
	public function output($orders)
	{
		return '<h1>Sales: ' . $orders . '</h1>';
	}

}