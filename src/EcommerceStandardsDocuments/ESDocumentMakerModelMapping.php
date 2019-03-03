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
	* Ecommerce standards document that contains a list of maker model mappings records that associate product, download, or labour records to categories within models manufactured or assembled by makers/manufacturers
	* An example of the Maker Model Mapping Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"version": 1.3,
	*	"resultStatus": 1,
	*	"message":"The maker-model-mapping data has been successfully obtained.",
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 3,
	*	"configs":{"dataFields":"keyMakerModelID,keyCategoryID,keyProductID,quantity,attributes"},
	*	"dataRecords":
	*		[
	*		{
	*			"keyMakerModelID":"2",
	*			"keyCategoryID":"CAR-TYRE",
	*			"keyProductID":"CAR-TYRE-LONG-LASTING",
	*			"quantity": 4,
	*			"attributes":
	*			[
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-WHEELSIZE-RADIUS-INCH",
	*					"numberValue": 21
	*				},
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-WHEELSIZE-TREAD",
	*					"stringValue": "All Weather"
	*				}
	*			]
	*		},
	*		{
	*			"keyMakerModelID":"2",
	*			"keyCategoryID":"CAR-TYRE",
	*			"keyProductID":"CAR-TYRE-CHEAP",
	*			"quantity": 4,
	*			"attributes":
	*			[
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-WHEELSIZE-RADIUS-INCH",
	*					"numberValue": 20
	*				},
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-WHEELSIZE-TREAD",
	*					"stringValue": "BITUMEN"
	*				}
	*			]
	*		}
	*	]
	*}
	*/
	class ESDocumentMakerModelMapping extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordMakerModelMapping[] List of maker/manufacturer model mapping records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int								status of obtaining the document's data
		*  @param message 							string							message to accompany the result status
		*  @param modelMappingRecords				ESDRecordMakerModelMapping[]	list of model mapping records
		*  @param configs 							array							A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $modelMappingRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $modelMappingRecords;
			$this->configs = $configs;
			if ($modelMappingRecords != null)
			{
				$this->totalDataRecords = count($modelMappingRecords);
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