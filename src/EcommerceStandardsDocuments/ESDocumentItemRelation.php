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
	* Ecommerce standards document that contains a list of item relation records
	* An example of the item relation Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	* {
	*      "version": 1.5,
	*      "resultStatus": 1,
	*      "message":"The item relation data has been successfully obtained.",
	*      "dataTransferMode": "COMPLETE",
	*      "totalDataRecords": 4,
	*      "configs":{"dataFields":"keyProductID,keyDownloadID,keyLabourID,keyAssetID,keyRelatedDownloadID,keyRelatedProductID,keyRelatedLabourID,keyRelatedAssetID"},
	*      "dataRecords":
	*       [
	*          {
	*              "keyProductID":"123",
	*              "keyRelatedProductID":"456"
	*          },
	*          {
	*              "keyProductID":"123",
	*              "keyRelatedDownloadID": "DWN1"
	*          },
	*          {
	*              "keyDownloadID":"DWN1",
	*              "keyRelatedLabourID": "LAB2"
	*          },
	*          {
	*              "keyLabourID":"LAB1",
	*              "keyRelatedProductID": "123"
	*          },
	*          {
	*              "keyAssetID":"ASSET1",
	*              "keyRelatedAssetID": "ASSET323"
	*          }
	*      ]
	*  }
	*/
	class ESDocumentItemRelation extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordItemRelation[] list of item relation records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param imageRecords						ESDRecordItemRelation[]	list of item relation records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $itemRelationRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $itemRelationRecords;
			$this->configs = $configs;
			if ($itemRelationRecords != null)
			{
				$this->totalDataRecords = count($itemRelationRecords);
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