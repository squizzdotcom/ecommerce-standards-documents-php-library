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
	* Ecommerce standards document that holds a list of supplier account records
	* 
	* An example of the Supplier Account Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"resultStatus":"1",
	*	"message":"The supplier account data has been successfully obtained.",
	*	"configs":{"dataFields":"keySupplierAccountID,keyPriceLevelID,supplierAccountCode,accountName,contactName,orgName,authorityNumbers,authorityNumberLabels,authorityNumberTypes,email,accountClass,paymentTypes,territory,shippingMethod,isOnHold,isOutsideBalance,isOutsideTerms,balance,limit,termsType,termsDescription,termsValue1,termsValue2"},
	*	"dataTransferMode": "COMPLETE",
	*	"version": 1.1,
	*	"totalDataRecords": 3,
	*	"dataRecords":
	*	[
	*		{
	*			"keySupplierAccountID":"SUP1",
	*			"keyPriceLevelID":"PL001",
	*			"supplierAccountCode":"SUP001"
	*		},
	*		{
	*			"keySupplierAccountID":"SUP2",
	*			"keyPriceLevelID":"PL004",
	*			"supplierAccountCode":"SUPL004",
	*			"accountName":"Suppliers Inc.",
	*			"contactName":"John Smith",
	*			"orgName":"Suppliers Inc.",
	*			"authorityNumbers":["2342342334","3432424424243"],
	*			"authorityNumberLabels":["ABN", "ACN"],
	*			"authorityNumberTypes":[1,2],
	*			"email":"js@esdstandards.somewhere",
	*			"accountClass":"primary",
	*			"paymentTypes":"CC",
	*			"territory":"Melb Rural",
	*			"shippingMethod":"Truck",
	*			"isOnHold":"N",
	*			"isOutsideBalance":"N",
	*			"isOutsideTerms":"N",
	*			"balance":1000.00,
	*			"limit":0,
	*			"termsType":"GND",
	*			"termsDescription":"Pay before 14 days",
	*			"termsValue1":"14",
	*			"termsValue2":""
	*		},
	*		{
	*			"keySupplierAccountID":"SUP3",
	*			"keyPriceLevelID":"PL001",
	*			"supplierAccountCode":"SUP003",
	*			"accountName":"ESD Industries",
	*			"contactName":"Joey Joe Joe",
	*			"orgName":"ESD Industries",
	*			"authorityNumber":"1234567890",
	*			"authorityNumberLabel":"ABN",
	*			"email":"esd@esdstandards.somewhere",
	*			"accountClass":"secondary",
	*			"paymentTypes":"AC,CC,DD",
	*			"territory":"Melb Metro",
	*			"discount":0,
	*			"shippingMethod":"",
	*			"isOnHold":"N",
	*			"isOutsideBalance":"Y",
	*			"isOutsideTerms":"N",
	*			"balance":-2000.00,
	*			"limit":1000,
	*			"termsType":"DOM",
	*			"termsDescription":"Pay on the 15th day of the month",
	*			"termsValue1":"15",
	*			"termsValue2":""
	*		}
	*	]
	*}
	*/
	class ESDocumentSupplierAccount extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordSupplierAccount[] List of supplier account records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 					int							status of obtaining the document's data
		*  @param message 						string						message to accompany the result status
		*  @param supplierAccountRecords		ESDRecordSupplierAccount[]	list of supplier account records
		*  @param configs 						array						A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $supplierAccountRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $supplierAccountRecords;
			$this->configs = $configs;
			if ($supplierAccountRecords != null)
			{
				$this->totalDataRecords = count($supplierAccountRecords);
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