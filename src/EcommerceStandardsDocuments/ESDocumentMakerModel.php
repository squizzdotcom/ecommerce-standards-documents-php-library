<?php
	/**
	* Copyright (C) 2018 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;

	/**
	* Ecommerce standards document that contains a list of model records associated to makers/manufacturers
	* An example of the Maker Model Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*	"version": 1.2,
	*	"resultStatus": 1,
	*	"message":"The model data has been successfully obtained.",
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 3,
	*	"configs":{"dataFields":"keyMakerModelID,keyMakerID,modelCode,modelSubCode,name,modelSearchCode,groupClass,releasedDate,createdDate,attributes"},
	*	"dataRecords":
	*		[
	*		{
	*			"keyMakerModelID":"1"
	*		},
	*		{
	*			"keyMakerModelID":"2",
	*			"keyMakerID":"2",
	*			"modelCode":"SEDAN1",
	*			"modelSubCode":"1ABC",
	*			"name":"Sahara Luxury Sedan 2016",
	*			"modelSearchCode":"Car-Manufacturer-A-Saraha-Luxury-Sedan-2016",
	*			"groupClass":"SEDAN",
	*			"releasedDate": 1456750800000,
	*			"createdDate": 1430748000000,
	*			"attributes":
	*			[
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-TYPE",
	*					"stringValue": "Sedan"
	*				},
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-ENGINE-CYLINDERS",
	*					"numberValue": 4
	*				},
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-FUEL-TANK-LITRES",
	*					"numberValue": 80.5
	*				}
	*			]
	*		},
	*		{
	*			"keyMakerModelID":"3",
	*			"keyMakerID":"2",
	*			"modelCode":"TRUCK22",
	*			"modelSubCode":"EX",
	*			"name":"City Truck 2016",
	*			"modelSearchCode":"Car-Manufacturer-A-City-Truck-2016",
	*			"groupClass":TRUCK",
	*			"releasedDate": 1456750800000,
	*			"createdDate": 1430748000000,
	*			"attributes":
	*			[
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-TYPE",
	*					"stringValue": "Truck"
	*				},
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-ENGINE-CYLINDERS",
	*					"numberValue": 6
	*				},
	*				{
	*					"keyAttributeProfileID":"MAKEMODELCAR",
	*					"keyAttributeID":"MMCAR-FUEL-TANK-LITRES",
	*					"numberValue": 140
	*				}
	*			]
	*		}
	*	]
	*}
	*/
	class ESDocumentMakerModel extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordMakerModel[] List of maker/manufacturer model records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param modelRecords						ESDRecordMakerModel[]	list of model records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $modelRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $modelRecords;
			$this->configs = $configs;
			if ($modelRecords != null)
			{
				$this->totalDataRecords = count($modelRecords);
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