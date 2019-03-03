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
	* Ecommerce standards document that contains a list of price level records
	* 
	* An example of the Price Level Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"version": 1.3,
	*	"resultStatus":"1",
	*	"message":"The price level data has been successfully obtained.",
	*	"configs":{"dataFields":"keyPriceLevelID,label"},
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 3,
	*	"dataRecords":
	*	[
	*		{
	*			"keyPriceLevelID":"PL-001",
	*			"label":"Price Level 001"
	*		},
	*		{
	*			"keyPriceLevelID":"PL-002",
	*			"label":"Price Level 002"
	*		},
	*		{
	*			"keyPriceLevelID":"PL-003",
	*			"label":"Price Level 003"
	*		}
	*	]
	*}
	*/
	class ESDocumentPriceLevel extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordPriceLevel[] List of price level records
		*/
		public $dataRecords = array();
		
		
		/**
		* Constructor
		* 
		*  @param resultStatus 			int							status of obtaining the document's data
		*  @param message 				string						message to accompany the result status
		*  @param priceLevelRecords		ESDRecordPriceLevel[]		list of price level records
		*  @param configs 				array						A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $priceLevelRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $priceLevelRecords;
			$this->configs = $configs;
			if ($priceLevelRecords != null)
			{
				$this->totalDataRecords = count($priceLevelRecords);
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