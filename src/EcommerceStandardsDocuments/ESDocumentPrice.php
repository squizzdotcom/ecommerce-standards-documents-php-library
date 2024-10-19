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
	* Ecommerce standards document that contains a list of pricing records for either products, downloads, or labour
	* 
	* An example of the Product Pricing Ecommerce Standards document in its JSON serialised form, containing product price-level data
	* 
	*@code 
	*{
	*	"version": 1.5,
	*	"resultStatus":"1",
	*	"message":"The product price-level pricing data has been successfully obtained.",
	*	"configs":{"dataFields":"keyProductID,keyPriceLevelID,keySellUnitID,price"},
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 5,
	*	"dataRecords":
	*	[
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-001",
	*			"keySellUnitID": "EACH",
	*			"price": 10.00
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-002",
	*			"keySellUnitID": "EACH",
	*			"price": 8.00
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-003",
	*			"keySellUnitID": "EACH",
	*			"price": 5.00
	*		},
	*		{
	*			"keyProductID":"PROD-456",
	*			"keyPriceLevelID":"PL-001",
	*			"keySellUnitID": "EACH",
	*			"price": 22.00
	*		},
	*		{
	*			"keyProductID":"PROD-456",
	*			"keyPriceLevelID":"PL-001",
	*			"keySellUnitID": "PACK",
	*			"price": 80.00
    *		}
	*	]
	*}
	*
	*An example of the Product Pricing Ecommerce Standards document in its JSON serialised form, containing product price-level quantity break data
	*
	*@code 
	*{
	*	"version": 1.3,
	*	"resultStatus":"1",
	*	"message":"The product price-level quantity break pricing data has been successfully obtained.",
	*	"configs":{"dataFields":"keyProductID,keyPriceLevelID,price,quantity"},
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 4,
	*	"dataRecords":
	*	[
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-001",
	*			"keySellUnitID": "EACH",
	*			"price": 10.00,
	*			"quantity": 5
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-001",
	*			"keySellUnitID": "EACH",
	*			"price": 5.00,
	*			"quantity": 10
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-001",
	*			"keySellUnitID": "EACH",
	*			"price": 2.00,
	*			"quantity": 20
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-002",
	*			"keySellUnitID": "EACH",
	*			"price": 4.10,
	*			"quantity": 5
	*		}
	*	]
	*}
	*
	*An example of the Product Pricing Ecommerce Standards document in its JSON serialised form, containing customer account product pricing data
	*
	*@code 
	*{
	*	"version": 1.3,
	*	"resultStatus":"1",
	*	"message":"The product customer account pricing data has been successfully obtained.",
	*	"configs":{"dataFields":"keyProductID,keyAccountID,price,quantity,referenceID,referenceType"},
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 4,
	*	"dataRecords":
	*	[
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyAccountID":"ACC-123",
	*			"keySellUnitID": "EACH",
	*			"price": 70.00,
	*			"quantity": 5,
	*			"referenceID": "FORCED-CONTRACT-1",
	*			"referenceType": "CF"
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyAccountID":"ACC-123",
	*			"keySellUnitID": "EACH",
	*			"price": 1.00,
	*			"quantity": 20,
	*			"referenceID": "FORCED-CONTRACT-1",
	*			"referenceType": "CF"
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyAccountID":"ACC-456",
	*			"keySellUnitID": "EACH",
	*			"price": 7.30,
	*			"quantity": 1,
	*			"referenceID": "CONTRACT-222",
	*			"referenceType": "C"
	*		},
	*		{
	*			"keyProductID":"PROD-456",
	*			"keyAccountID":"ACC-456",
	*			"keySellUnitID": "EACH",
	*			"price": 3.30
	*		}
	*	]
	*}
	*
	*An example of the Product Pricing Ecommerce Standards document in its JSON serialised form, containing product pricing data that has been grouped and applied to multiple customer accounts assigned to each group
	*
	*@code 
	*{
	*	"version": 1.3,
	*	"resultStatus":"1",
	*	"message":"The product customer account pricing data has been successfully obtained.",
	*	"configs":{"dataFields":"keyProductID,keyPriceGroupID,keySellUnitID,price,quantity,referenceID,referenceType"},
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 4,
	*	"priceGroups":
	*	{
	*		"PRICE-GROUP-1": ["ACC-1","ACC-2","ACC-3","ACC-4"],
	*		"PRICE-GROUP-2": ["ACC-5","ACC-6","ACC-7","ACC-8"]
	*	},
	*	"dataRecords":
	*	[
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceGroupID":"PRICE-GROUP-1",
	*			"price": 3.30,
	*			"quantity": 1
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceGroupID":"PRICE-GROUP-2",
	*			"keySellUnitID": "1",
	*			"price": 2.90,
	*			"quantity": 1,
	*			"referenceID": "FORCED-CONTRACT-1",
	*			"referenceType": "CF"
	*		},
	*		{
	*			"keyProductID":"PROD-456",
	*			"keyPriceGroupID":"PRICE-GROUP-2",
	*			"keySellUnitID": "EACH",
	*			"price": 0.255,
	*			"quantity": 50
	*		}
	*	]
	*}
	*
	*An example of the Product Pricing Ecommerce Standards document in its JSON serialised form, containing product price-level data with only record changes
	*
	*@code 
	*{
	*	"version": 1.3,
	*	"resultStatus":"1",
	*	"message":"The product price-level pricing data has been successfully obtained.",
	*	"configs":{"dataFields":"keyProductID,keyPriceLevelID,keySellUnitID,drop"},
	*	"dataTransferMode": "INCREMENT",
	*	"totalDataRecords": 5,
	*	"dataRecords":
	*	[
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-006",
	*			"keySellUnitID": "EACH",
	*			"price": 22.00,
	*			"drop": 1
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-002",
	*			"keySellUnitID": "EACH",
	*			"price": 11.00,
	*			"drop": 2
	*		},
	*		{
	*			"keyProductID":"PROD-123",
	*			"keyPriceLevelID":"PL-003",
	*			"keySellUnitID": "EACH",
	*			"drop": 3
	*		},
	*		{
	*			"keyProductID":"PROD-456",
	*			"keyPriceLevelID":"PL-001",
	*			"keySellUnitID": "EACH",
	*			"drop": 4
	*		}
	*	]
	*}
	*/
	class ESDocumentPrice extends ESDocument implements \JsonSerializable
	{
		/**
		* @var array Dictionary that contains records keyed on keyPriceGroupID, containing arrays of customer accounts for each group, based on setting the customer account's keyCustomerAccountID in each array
		*/
		public $priceGroups = array();

		/**
		* @var ESDRecordPrice[] List of price records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 			int						status of obtaining the sales order data
		*  @param message 				string					message to accompany the result status
		*  @param productPriceRecords	ESDRecordPrice[]		list of price records
		*  @param configs 				array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $priceRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $priceRecords;
			$this->configs = $configs;
			if ($priceRecords != null)
			{
				$this->totalDataRecords = count($priceRecords);
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