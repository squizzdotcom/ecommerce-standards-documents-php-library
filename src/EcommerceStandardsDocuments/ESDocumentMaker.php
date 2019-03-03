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
	*{
	*	"version": 1.3,
	*	"resultStatus": 1,
	*	"message":"The maker data has been successfully obtained.",
	*	"dataTransferMode": "COMPLETE",
	*	"totalDataRecords": 3,
	*	"configs":{"dataFields":"keyMakerID,makerCode,name,makerSearchCode,groupClass,ordering,establishedDate,orgName,authorityNumbers,authorityNumberLabels,authorityNumberTypes"},
	*	"dataRecords":
	*	[
	*		{
	*			"keyMakerID":"1"
	*		},
	*		{
	*			 "keyMakerID":"2",
	*			 "makerCode":"CAR1",
	*			 "name":"Car Manufacturer A",
	*			 "makerSearchCode":"Car-Manufacturer-A",
	*			 "groupClass":"POPULAR CARS",
	*			 "ordering": 2,
	*			 "establishedDate": 1449132083084,
	*			 "orgName":"Car Manufacturer A",
	*			 "authorityNumbers":["123456789 1234"],
	*			 "authorityNumberLabels":["Australian Business Number"],
	*			 "authorityNumberTypes":[1]
	*		},
	*		{
	*			 "keyMakerID":"3",
	*			 "makerCode":"CAR3",
	*			 "name":"Car Manufacturer B",
	*			 "makerSearchCode":"Car-Manufacturer-B-Sedans-Wagons",
	*			 "groupClass":"CUSTOM CARS",
	*			 "ordering": 1,
	*			 "establishedDate": 1449132083084,
	*			 "orgName":"Car Manufacturer B",
	*			 "authorityNumbers":["98877664322"],
	*			 "authorityNumberLabels":["Australian Business Number"],
	*			 "authorityNumberTypes":[1]
	*		}
	*	 ]
	*}
	*/
	class ESDocumentMaker extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordMaker[] List of maker/manufacturer records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param makerRecords						ESDRecordMaker[]		list of maker records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $makerRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $makerRecords;
			$this->configs = $configs;
			if ($makerRecords != null)
			{
				$this->totalDataRecords = count($makerRecords);
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