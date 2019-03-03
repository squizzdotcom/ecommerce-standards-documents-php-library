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
	* Ecommerce standards document that contains a list of maker/manufacturer records
	* An example of the Maker Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	{
	*	"version": 1.3,
	*	"resultStatus": 1,
	*	"message":"The customer account payment data has been successfully obtained.",
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 2,
	*	"configs":{"dataFields":"keyCustomerAccountPaymentID,paymentID,paymentCode,referenceNumber,keyCustomerAccountID,customerAccountCode,eCommerceUserID,eCommerceSystemID,paymentMethod,eCommerceUserName,paymentAmount,paymentReceipt,paymentDate,creationDate,currencyCode"},
	*	"dataRecords":
	*	[
	*		{
	*			"keyCustomerAccountPaymentID":"PAY1"
	*		},
	*		{
	*			"keyCustomerAccountPaymentID":"43",
	*			"paymentID":"678",
	*			"paymentCode":"PAYMENT-678",
	*			"referenceNumber":"624324235",
	*			"keyCustomerAccountID":"222",
	*			"customerAccountCode":"CUST004",
	*			"eCommerceUserID":"243",
	*			"eCommerceSystemID":"SQUIZZ.PLATFORM",
	*			"paymentMethod":"CREDITCARD",
	*			"eCommerceUserName":"John Smith",
	*			"paymentAmount": 60.00,
	*			"paymentReceipt":"567586765",
	*			"paymentDate": 1449132083084,
	*			"creationDate": 1449132083084,
	*			"currencyCode":"AUD",
	*			"records":
	*			[
	*				{
	*					"keyCustomerAccountPaymentRecordID":"5343",
	*					"keyRecordID":"112",
	*					"recordID":"INVOICE-112",
	*					"amount": 60.00,
	*					"recordType":"INVOICE"
	*				}
	*			]
	*		}
	*	]
	*}
	*/
	class ESDocumentCustomerAccountPayment extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordCustomerAccountPayment[] List of customer account payment records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 			int									status of obtaining the document's data
		*  @param message 				string								message to accompany the result status
		*  @param paymentRecords		ESDRecordCustomerAccountPayment[]	list of payment records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $paymentRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $paymentRecords;
			$this->configs = $configs;
			if ($paymentRecords != null)
			{
				$this->totalDataRecords = count($paymentRecords);
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