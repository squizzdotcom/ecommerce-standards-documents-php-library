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
	* Ecommerce standards document that holds a list of address records for supplier accounts
	* An example of the Supplier Account Address Ecommerce Standards document in its JSON serialised form
	* 
	* @code 
	* {
	*     "version": 1.5,
	*     "resultStatus": 1,
	*     "message":"The customer account address data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 3,
	*     "configs":{"dataFields":"keyAddressID,keyCustomerAccountID,description,orgName,contact,phone,fax,address1,address2,address3,region,country,postcode,freightCode,isPrimary,isDelivery"},
	*     "dataRecords":
	*      [
	*         {
	*             "keyAddressID":"ADD-001"
	*         },
	*         {
	*             "keyAddressID":"ADD002",
	*             "keyCustomerAccountID":"10",
	*             "description":"Billing Address",
	*             "orgName":"ESD Industries",
	*             "contact":"John Doe",
	*             "phone":"+61234567890",
	*             "fax":"+612345678901",
	*             "address1":"22",
	*             "address2":"Bourkie Street",
	*             "address3":"Melbourne",
	*             "region":"Victoria",
	*             "country":"Australia",
	*             "postcode":"3000",
	*             "freightCode":"01FRE",
	*             "isPrimary":"Y",
	*             "isDelivery":"N"
	*         },
	*         {
	*             "keyAddressID":"ADD003",
	*             "keyCustomerAccountID":"10",
	*             "description":"Delivery Address",
	*             "orgName":"ESD Industries",
	*             "contact":"John Doe",
	*             "phone":"+61234567890",
	*             "fax":"+612345678901",
	*             "address1":"25",
	*             "address2":"Bourkie Street",
	*             "address3":"Melbourne",
	*             "region":"Victoria",
	*             "country":"Australia",
	*             "postcode":"3000",
	*             "freightCode":"02FRE",
	*             "isPrimary":"N",
	*             "isDelivery":"Y"
	*         }
	*     ]
	* }
	*/
	class ESDocumentSupplierAccountAddress extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordSupplierAccountAddress[] List of supplier account address records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 					int									status of obtaining the document's data
		*  @param message 						string								message to accompany the result status
		*  @param supplierAccountAddresses		ESDRecordSupplierAccountAddress[]	list of supplier account address records
		*  @param configs 						array								A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $supplierAccountAddresses = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $supplierAccountAddresses;
			$this->configs = $configs;
			if ($supplierAccountAddresses != null)
			{
				$this->totalDataRecords = count($supplierAccountAddresses);
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