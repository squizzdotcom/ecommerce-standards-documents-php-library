<?php
	/**
	* Copyright (C) 2017 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;

	/**
	* Ecommerce standards document that contains a list of purchaser records
	* 
	* An example of the Purchaser Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"resultStatus":"1",
	*	"message":"The purchaser data has been successfully obtained.",
	*	"configs":{"dataFields":"keyPurchaserID,purchaserCode,contact,isIndividual"},
	*	"dataTransferMode": "COMPLETE",
	*	"version": 1.1,
	*	"totalDataRecords": 3,
	*	"dataRecords":
	*	[
	*		{
	*			"keyPurchaserID":"PUR-1"
	*		},
	*		{
	*			"keyPurchaserID":"PUR-2",
	*			"purchaserCode": "JD",
	*			"contact": "John Doe",
	*			"isIndividual": "Y"
	*		},
	*		{
	*			"keyPurchaserID":"4533",
	*			"purchaserCode": "AI",
	*			"name": "Acme Industries",
	*			"contact": "Kevin Peterson",
	*			"isIndividual": "N"
	*		}
	*	]
	*}
	*/
	class ESDocumentPurchaser extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordPurchaser[] List of purchaser records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param purchaserRecords					ESDRecordPurchaser[]	list of purchaser records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $purchaserRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $purchaserRecords;
			$this->configs = $configs;
			if ($purchaserRecords != null)
			{
				$this->totalDataRecords = count($purchaserRecords);
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