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
	*Ecommerce standards document that contains a list of delivery notice records
    *
    *An example of the Delivery Notice Ecommerce Standards document in its JSON serialised form
    *@code
    *{
    *	"version": 1.3,
    *	"resultStatus": "1",
    *	"message": "The delivery notice data has been successfully obtained.",
    *	"configs": {},
    *	"dataTransferMode": "COMPLETE",
    *	"totalDataRecords": 2,
    *	"dataRecords": [{
    *		"keyDeliveryNoticeID": "123"
    *	},
    *	{
    *		"keyDeliveryNoticeID": "2231321",
    *		"deliveryNoticeCode": "DEL-123",
    *		"deliveryStatus": "IN_TRANSIT",
    *		"deliveryStatusMessage": "The ordered goods have left the warehouse and are in transit.",
    *		"language": "EN_AU",
    *		"packedDate": 1448130083084,
    *		"loadedDate": 1449131083084,
    *		"dispatchedDate": 1450132083084,
    *		"deliveryDate": 1450133083084,
    *		"receivedDate": 0,
    *		"deliveredDate": 0,
    *		"unpackedDate": 0,
    *		"lostDate": 0,
    *		"damagedDate": 0,
    *		"atGeographicLocation": "Y",
    *		"locationLatitude": -37.8102907,
    *		"locationLongitude": 144.9608443,
    *		"instructions": "Please leave the goods at the back door",
    *		"freightCarrierCode": "ACME-F",
    *		"freightCarrierName": "Acme Freight Carrier",
    *		"freightSystemRefCode": "334234-23423-234-343242",
    *		"freightCarrierConsignCode": "34423423424",
    *		"freightCarrierTrackingCode": "767567-56765-5676567",
    *		"freightCarrierServiceCode": "ROUTING-FREIGHT",
    *		"freightCarrierAccountCode": "FREI-1234",
    *		"isDropship": "N",
    *		"lines": [{
    *			"keyDeliveryNoticeLineID": "123"
    *		},
    *		{
    *			"keyDeliveryNoticeLineID": "456",
    *			"deliveryLineCode": "DEL-LINE-001",
    *			"invoiceCode": "INV-123",
    *			"invoiceLineCode": "INV-LINE-001",
    *			"purchaseOrderLineCode": "PO-LINE-3",
    *			"purchaseOrderLineNumber": "3",
    *			"keySellUnitID": "EACH",
    *			"keyProductID": "123",
    *			"productCode": "SWISH-123",
    *			"productName": "Swisho Paper A4",
    *			"customerProductCode": "PAPER-A4-SWISHO",
    *			"quantityDelivered": 5
    *		}]
    *	}]
    *}
	*/
	class ESDocumentDeliveryNotice extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordDeliveryNotice[] List of Delivery Notice records. The data records property must be the last property in the JSON data when serialised.
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param deliveryNoticeRecords				ESDRecordLocation[]		list of delivery notice records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $deliveryNoticeRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $deliveryNoticeRecords;
			$this->configs = $configs;
			if ($deliveryNoticeRecords != null)
			{
				$this->totalDataRecords = count($deliveryNoticeRecords);
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