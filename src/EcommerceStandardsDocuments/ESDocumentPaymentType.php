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
	* Ecommerce standards document that contains a list of payment type records
	* An example of the payment type Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"resultStatus":"1",
	*	"message":"The payment type data has been successfully obtained.",
	*	"configs":{"dataFields":"keyPaymentTypeID,paymentTypeCode,paymentTypeLabel,description,paymentMethod"},
	*	"dataTransferMode": "COMPLETE",
	*	"version": 1.1,
	*	"totalDataRecords": 4,
	*	"dataRecords":
	*	[
	*		{
	*			"keyPaymentTypeID":"123"
	*		},
	*		{
	*			"keyPaymentTypeID":"456",
	*			"paymentTypeCode": "WEBCC",
	*			"paymentTypeLabel":"Credit Card",
	*			"description": "Credit Card payment made through a website",
	*			"paymentMethod": "CREDITCARD"
	*		},
	*		{
	*			"keyPaymentTypeID":"765",
	*			"paymentTypeCode": "DD",
	*			"paymentTypeLabel": "Direct Deposit",
	*			"description": "Payment made using a direct deposit bank transfer",
	*			"paymentMethod": "DIRECTDEPOSIT"
	*		},
	*		{
	*			"keyPaymentTypeID":"6765",
	*			"paymentTypeCode": "AC",
	*			"paymentTypeLabel": "On Account",
	*			"description": "Payment will be made at a time based on aggreed upon account terms",
	* 			"paymentMethod": "ACCOUNT"
	*		}
	*	]
	*}
	*/
	class ESDocumentPaymentType extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordPaymentType[] List of payment type records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param paymentTypeRecords				ESDRecordPaymentType[]	list of payment type records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $paymentTypeRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $paymentTypeRecords;
			$this->configs = $configs;
			if ($paymentTypeRecords != null)
			{
				$this->totalDataRecords = count($paymentTypeRecords);
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