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
	* Ecommerce standards document that contains a list of flag records and products, dowloads, or labour assigned to flags
	* 
	* An example of the Flag Ecommerce Standards document in its JSON serialised form
	* 
	* @code 
	* {
	*     "version": 1.4,
	*     "resultStatus": 1,
	*     "message":"The flag data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 5,
	*     "configs":{"dataFields":"keyProductID,keyDownloadID,keyLabourID,keyFlagID"},
	*     "flagRecords": 
	*     [
	*         {"keyFlagID":"FLAG-123"},
	*         {
	*             "keyFlagID":"FLAG-456",
	*             "flagCode":"DIS",
	*             "flagName":"Discounted",
	*             "description":"Denotes products that are marked as having a discounted price."
	*         },
	*         {
	*             "keyFlagID":"FLAG-789",
	*             "flagCode":"ENV",
	*             "flagName":"Environmentally Friendly",
	*             "description":"Denotes products that are marked as being manufacturered using environmentally friendly materials and methods."
	*         }
	*     ],
	*     "dataRecords":
	*     [
	*         {"keyProductID":"PROD-123","keyFlagID":"FLAG-123"},
	*         {"keyProductID":"PROD-123","keyFlagID":"FLAG-456"},
	*         {"keyProductID":"PROD-123","keyFlagID":"FLAG-789"},
	*         {"keyProductID":"PROD-456","keyFlagID":"FLAG-123"},
	*         {"keyProductID":"PROD-789","keyFlagID":"FLAG-456"},
	*         {"keyDownloadID":"DOW2","keyFlagID":"FLAG-456"},
	*         {"keyLabourID":"LAB1","keyFlagID":"FLAG-456"}
	*     ]
	* }
	*/
	class ESDocumentFlag extends ESDocument implements \JsonSerializable
	{	
		/**
		* @var ESDRecordFlag[] list of flag records, defining the types of flags and details of each
		*/
		public $flagRecords = array();

		/**
		* @var ESDRecordFlagMapping[] list of flag mapping records that assign flags to products, downloads, or labour
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int								status of obtaining the document's data
		*  @param message 							string							message to accompany the result status
		*  @param flagRecords						ESDRecordFlag[]					list of flag records
		*  @param flagMappingRecords				ESDRecordFlagMapping[]			list of flag mapping records
		*  @param configs 							array							A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $flagRecords = array(), $flagMappingRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->flagRecords = $flagRecords;
			$this->dataRecords = $flagMappingRecords;
			$this->configs = $configs;
			if ($generalLedgerAccountRecords != null)
			{
				$this->totalDataRecords = count($flagMappingRecords);
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
				'flagRecords' => array_filter($this->flagRecords),
				'dataRecords' => array_filter($this->dataRecords)
			]);
		}
	}
?>