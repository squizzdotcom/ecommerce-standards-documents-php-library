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
	* Ecommerce standards document that contains a list of stock quantity records
	* An example of the Stock Quantity Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"resultStatus":"1",
	*	"message":"The product stock quantity data has been successfully obtained.",
	*	"configs":{"dataFields":"keyProductID,qtyAvailable,qtyOnHand,qtyOrdered,qtyOrdered,qtyBackordered,qtyReserved,qtyConsigned"},
	*	"dataTransferMode": "COMPLETE",
	*	"version": 1.1,
	*	"totalDataRecords": 3,
	*	"dataRecords":
	*	[
	*		{
	*			"keyProductID":"123A",
	*			"qtyAvailable": 22
	*		},
	*		{
	*			"keyProductID":"1234",
	*			"qtyAvailable": 16,
	*			"qtyOnHand": 20,
	*			"qtyOrdered": 15,
	*			"qtyBackordered": 10,
	*			"qtyReserved": 2,
	*			"qtyConsigned": 12
	*		},
	*		{
	*			"keyProductID":"7890",
	*			"qtyAvailable": -23,
	*			"qtyOnHand": 20,
	*			"qtyOrdered": 15
	*		}
	*	]
	*}
	*/
	class ESDocumentStockQuantity extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordStockQuantity[] List of stock quantity records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 			int							status of obtaining the sales order data
		*  @param message 				string						message to accompany the result status
		*  @param stockQuantityRecords	ESDRecordStockQuantity[]	list of price records
		*  @param configs 				array						A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $stockQuantityRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $stockQuantityRecords;
			$this->configs = $configs;
			if ($stockQuantityRecords != null)
			{
				$this->totalDataRecords = count($stockQuantityRecords);
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