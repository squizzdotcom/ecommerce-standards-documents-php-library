<?php

	/**
	* Copyright (C) 2017 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce standards document that contains a list of sell unit records
	* 
	* An example of the Sell Unit Ecommerce Standards document in its JSON serialised form
	* 
	* @code 
	* {
	*	"resultStatus":"1",
	*	"message":"The sell unit data has been successfully obtained.",
	*	"configs":{"dataFields":"keySellUnitID,sellUnitCode,sellUnitLabel,isBaseUnit,baseQuantity,parentQuantity,keySellUnitParentID"},
	*	"dataTransferMode": "COMPLETE",
	*	"version": 1.1,
	*	"totalDataRecords": 3,
	*	"dataRecords":
	*	[
	*		{
	*			"keySellUnitID":"1"
	*		},
	*		{
	*			"keySellUnitID":"2",
	*			"sellUnitCode":"EA",
	*			"sellUnitLabel":"EACH",
	*			"isBaseUnit":"Y"
	*		},
	*		{
	*			"keySellUnitID":"3",
	*			"sellUnitCode":"PK",
	*			"sellUnitLabel":"Pack",
	*			"isBaseUnit":"N",
	*			"keySellUnitParentID":"2"
	*		},
	*		{
	*			"keySellUnitID":"4",
	*			"sellUnitCode":"CT",
	*			"sellUnitLabel":"Carton",
	*			"isBaseUnit":"N",
	*			"keySellUnitParentID":"3"
	*		},
	*		{
	*			"keySellUnitID":"5",
	*			"sellUnitCode":"CN",
	*			"sellUnitLabel":"Container",
	*			"isBaseUnit":"N",
	*			"keySellUnitParentID":"4"
	*		},
	*		{
	*			"keySellUnitID":"6",
	*			"sellUnitCode":"SHIP",
	*			"sellUnitLabel":"Ship Load",
	*			"isBaseUnit":"N",
	*			"keySellUnitParentID":"5"
	*		},
	*		{
	*			"keySellUnitID":"7",
	*			"sellUnitCode":"TRAIN",
	*			"sellUnitLabel":"Train Load",
	*			"isBaseUnit":"N",
	*			"keySellUnitParentID":"5"
	*		},
	*		{
	*			"keySellUnitID":"8",
	*			"sellUnitCode":"HOUR",
	*			"sellUnitLabel":"Hour",
	*			"isBaseUnit":"Y"
	*		},
	*		{
	*			"keySellUnitID":"9",
	*			"sellUnitCode":"LABOUR PACK",
	*			"sellUnitLabel":"Pack Of Labour Hours",
	*			"keySellUnitParentID":"8",
	*			"isBaseUnit":"N"
	*		}
	*	]
	*}
	*/
	class ESDocumentSellUnit extends ESDocument implements \JsonSerializable
	{
		/**
		* List of sell unit records
		* @var ESDRecordSellUnit[] List of sell unit records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 			int						status of obtaining the sales order data
		*  @param message 				string					message to accompany the result status
		*  @param sellUnitRecords		ESDRecordSellUnit[]		list of sell unit records
		*  @param configs 				array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $sellUnitRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $sellUnitRecords;
			$this->configs = $configs;
			if ($sellUnitRecords != null)
			{
				$this->totalDataRecords = count($sellUnitRecords);
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


