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
	* Ecommerce standards document that contains a list of image file records associated with products, downloads, labour, categories, category trees, makers or maker models
	* An example of the Image Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	* {
	*     "version": 1.4,
	*     "resultStatus": 1,
	*     "message":"The product image data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 2,
	*     "configs":{"dataFields":"keyProductImageID,keyProductID,imageFullFilePath,imageFileName,imageFileExtension,title,description"},
	*     "dataRecords":
	*     [
	*         {
	*             "keyProductImageID":"11",
	*             "keyProductID":"PROD-123"
	*         },
	*         {
	*             "keyProductImageID":"22",
	*             "keyProductID":"PROD-456",
	*             "imageFullFilePath":"C://location/to/the/product/images/Image-PROD-456.jpg",
	*             "imageFileName":"Image-PROD-456",
	*             "imageFileExtension":"jpg",
	*             "title":"Black Lounge Chair Front View",
	*             "description":"View from the front the quality styling of this modern lounge chair."
	*         }
	*     ]
	* }
	*/
	class ESDocumentImage extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordImage[] List of Image records. The data records property must be the last property in the JSON data when serialised.
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param imageRecords						ESDRecordImage[]		list of image records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $imageRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $imageRecords;
			$this->configs = $configs;
			if ($imageRecords != null)
			{
				$this->totalDataRecords = count($imageRecords);
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