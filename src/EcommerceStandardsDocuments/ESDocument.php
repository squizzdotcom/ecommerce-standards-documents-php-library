<?php
	/**
	* Copyright (C) 2016 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Document that contains the base set of properties for all documents
	*/
	class ESDocument implements \JsonSerializable
	{
		/**
		* @var double Version of the Ecommerce Standards Document.
		* Verifying the version of the document is critical for systems transferring and manipulating the data.
		*/
		public $version = ESDocumentConstants::ESD_DOCUMENT_VERSION;
		
		/**
		* @var int Code that denotes if the data could be successfully obtained for the document, and if not why.
		* See ESDocumentConstants Class for the list of status codes
		*/
		public $resultStatus = ESDocumentConstants::RESULT_SUCCESS;
		
		/**
		* @var string Message providing details of if the data could be obtained when requesting the document. The message gives meaning to the result status.
		*/
		public $message = "";
		
		/**
		* @var string Denotes if the data being placed into document is a complete data set, or partial data being transferred containing only data changes.
		*/
		public $dataTransferMode = "";
		
		/**
		* @var int The total number of records placed within document.
		* For documents that contain multiple record lists, please check the relevant documentation to see how this number applies.
		*/
		public $totalDataRecords = 0;
		
		/**
		* @var string[] A dictionary of additional configurations and settings to include with each Ecommerce Standard Document. Typically documents would contain the "dataFields" key that would have a comma delimited list of record properties that are expected to contain data when reading the document's records. Any records not containing data for properties in list could then have the data set to a default when saved to a database.
		*/
		public $configs = [];
		
		/**
		* Constructor that sets that initialises the document's properties
		*/
		public function __construct($resultStatus = 0, $message = "")
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->totalDataRecords = 0;
			$this->configs = [];
			$this->version = ESDocumentConstants::ESD_DOCUMENT_VERSION;
			$this->dataTransferMode = ESDocumentConstants::ESD_DATA_MODE_COMPLETE;
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
				'configs' => $this->configs
			]);
		}
	}
?>

