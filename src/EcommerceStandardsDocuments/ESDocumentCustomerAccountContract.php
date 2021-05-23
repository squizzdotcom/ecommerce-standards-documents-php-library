<?php
	/**
	* Copyright (C) Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;

	/**
	* Ecommerce standards document that holds a list of contract records for customer accounts
	* 
	* An example of the Customer Account Address Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"version": 1.4,
	*	"resultStatus":"1",
	*	"message":"The customer account contract data has been successfully obtained.",
	*	"configs":{"dataFields":"keyContractID,contractCode,description,forceContractPrice,type,expireDate"},
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 3,
	*	"dataRecords":
	*	[
	*		{
	*			"keyContractID":"CNT-003",
	*			"contractCode":"CONTRACT-003"
	*		},
	*		{
	*			"keyContractID":"34",
	*			"contractCode":"SALE-34",
	*			"description":"VIP Sales Contract #34",
	*			"forceContractPrice":"N",
	*			"type":"",
	*			"expireDate": 1446798878
	*		},
	*		{
	*			"keyContractID":"22",
	*			"contractCode":"VIP-21",
	*			"description":"VIP Contract",
	*			"forceContractPrice":"Y",
	*			"type":"Special",
	*			"expireDate": 1456798878,
	*			"keyAccountIDs":["15C1","222"],
	*			"keyProductIDs":["PD001","PD022"]
	*		}
	*	]
	*}
	*/
	class ESDocumentCustomerAccountContract extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordCustomerAccountContract[] List of customer account contract records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int									status of obtaining the document's data
		*  @param message 							string								message to accompany the result status
		*  @param customerAccountContractRecords	ESDRecordCustomerAccountContract[]	list of customer account contract records
		*  @param configs 							array								A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $customerAccountContractRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $customerAccountContractRecords;
			$this->configs = $configs;
			if ($customerAccountContractRecords != null)
			{
				$this->totalDataRecords = count($customerAccountContractRecords);
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