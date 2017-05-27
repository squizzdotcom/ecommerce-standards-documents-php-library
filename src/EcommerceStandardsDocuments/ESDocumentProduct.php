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
	* Ecommerce standards document that contains a list of product records
	* An example of the Product Ecommerce Standards document in its JSON serialised form
	* @code 
	* {
	*	"resultStatus":"1",
	* 	"message":"The product data has been successfully obtained.",
	* 	"configs":{"dataFields":"keyProductID,productCode,keyTaxcodeID,productSearchCode,barcode,barcodeInner,brand,name,description1,description2,description3,description4,productClass,keySellUnitID,unit,weight,width,height,depth,averageCost,warehouse,supplier,deliveryTimeNoStock,deliveryTimeInStock,stockQuantity,stockNoneQuantity,stockLowQuantity,stockLowQuantity,isPriceTaxInclusive,isKitted,kitProductsSetPrice"},
	* 	"dataTransferMode": "COMPLETE",
	* 	"version": 1.1,
	* 	"totalDataRecords": 2,
	* 	"dataRecords":
	* 	[
	* 		{
	* 			"keyProductID":"123A",
	* 			"productCode":"PROD-123",
	*			"keyTaxcodeID":"FREE"
	* 		},
	* 		{
	* 			"keyProductID":"1234",
	* 			"productCode":"PROD-001",
	* 			"keyTaxcodeID":"GST",
	* 			"productSearchCode":"Green-Recycled-Paper-Swisho",
	* 			"barcode":"03423404230",
	* 			"barcodeInner":"234234",
	* 			"brand":"Swisho Paper",
	* 			"name":"Swisho Green Paper",
	*			"description1":"Swisho green coloured paper is the ultimate green paper.",
	* 			"description2":"Paper built strong and tough by Swisho",
	* 			"description3":"Recommended to be used with dark inks.",
	* 			"description4":"",
	* 			"productClass":"paper",
	* 			"unit":"REAM",
	* 			"weight": 20.1,
	* 			"width": 21,
	* 			"height": 29.7,
	* 			"depth": 10,
	* 			"averageCost": 10.00,
	* 			"warehouse":"Swisho Warehouse",
	* 			"supplier":"Swisho",
	* 			"deliveryTimeNoStock": 112112,
	* 			"deliveryTimeInStock": 1212,
	* 			"stockQuantity": 200,
	* 			"stockNoneQuantity": 0,
	* 			"stockLowQuantity": 10,
	* 			"isPriceTaxInclusive": "N",
	* 			"isKitted":"N",
	* 			"kitProductsSetPrice":"N",
	* 			"keySellUnitID": 2,
	* 			"sellUnits":[
	* 				{
	* 					"keySellUnitID":"2"
	* 				},
	* 				{
	* 					"keySellUnitID":"3",
	* 					"keySellUnitParentID":"2",
	* 					"baseQuantity": "6"
	* 				},
	* 				{
	* 					"keySellUnitID":"4",
	* 					"keySellUnitParentID":"3",
	* 					"baseQuantity": "24",
	* 					"parentQuantity": "4"
	* 				}
	* 			]
	* 		}
	* 	]	
	* }
	*/
	class ESDocumentProduct extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordProduct[] List of product records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 		int						status of obtaining the sales order data
		*  @param message 			string					message to accompany the result status
		*  @param productRecords	ESDRecordProduct[]		list of product records
		*  @param configs 			array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $productRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $productRecords;
			$this->configs = $configs;
			if ($productRecords != null)
			{
				$this->totalDataRecords = count($productRecords);
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
