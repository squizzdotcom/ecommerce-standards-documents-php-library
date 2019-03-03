<?php
	/**
	* Copyright (C) 2019 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;

	/**
	* Ecommerce standards document that contains a list of surcharge records
	* An example of the Surcharge Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"version": 1.3,
	*	"resultStatus":"1",
	*	"message":"The surcharge data has been successfully obtained.",
	*	"configs":{"dataFields":"keySurchargeID,surchargeCode,surchargeLabel,description,surchargeType"},
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 4,
	*	"dataRecords":
	*	[
	*		{
	*			"keySurchargeID":"123"
	*		},
	*		{
	*			"keySurchargeID":"456",
	*			"surchargeCode": "WEB_FREIGHT",
	*			"surchargeLabel":"Web Order Freight",
	*			"description": "Costs to deliver orders created through the website.",
	*			"surchargeType": "FREIGHT"
	*		},
	*		{
	*			"keySurchargeID":"765",
	*			"surchargeCode": "WEB_CC_SURCHARGE",
	*			"surchargeLabel": "Web Credit Card Surcharge",
	*			"description": "Transaction cost for payment made by credit card.",
	*			"surchargeType": "CREDITCARD"
	*		},
	*		{
	*			"keySurchargeID":"6765",
	*			"surchargeCode": "WEB_MIN_ORDER",
	*			"surchargeLabel": "Web Minimum Order Surcharge",
	*			"description": "Cost to handle orders when an order's total price is under the allowed minimum.",
	*			"surchargeType": "MINORDER"
	*		}
	*	]
	*}
	*/
	class ESDocumentSurcharge extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordSurcharge[] List of surcharge records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param surchargeRecords					ESDRecordSurcharge[]	list of surcharge records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $surchargeRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $surchargeRecords;
			$this->configs = $configs;
			if ($surchargeRecords != null)
			{
				$this->totalDataRecords = count($surchargeRecords);
			}
		}
		
		/**
		* serializes the class's properties into JSON, orders properties and filters properties with default values from being returned.
		*/
		public function jsonSerialize()
		{
			return array_filter([
				'version' => $this->version,
				'resultStatus' => $this->resultStatus,
				'message' => $this->message,
				'dataTransferMode' => $this->dataTransferMode,
				'totalDataRecords' => $this->totalDataRecords,
				'configs' => $this->configs,
				'dataRecords' => array_filter($this->dataRecords)
			]);
		}
	}
?>