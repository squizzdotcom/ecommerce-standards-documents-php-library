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
	* Ecommerce standards document that contains a list of attachment file records associated with products, downloads or labour
	* An example of the Attachment Ecommerce Standards document in its JSON serialised form
	* 
	* @code 
	* 	{
	* 		"version": 1.5,
	* 		"resultStatus":"1",
	* 		"message":"The product attachment data has been successfully obtained.",
	* 		"configs":{"dataFields":"keyProductAttachmentID,keyProductID,fileName,fileExtension,fullFilePath"},
	* 		"dataTransferMode": "COMPLETE",
	* 		"totalDataRecords": 3,
	* 		"dataRecords":
	* 		[
	* 			{
	* 				"keyProductAttachmentID":"1",
	* 				"keyProductID":"1234",
	* 				"fileName":"product-image",
	* 				"fileExtension":"jpg",
	* 				"fullFilePath":"C://product/images/product-image.jpg"
	* 			},
	* 			{
	* 				"keyProductAttachmentID":"2",
	* 				"keyProductID":"1234",
	* 				"fileName":"product-image2",
	* 				"fileExtension":"png",
	* 				"fullFilePath":"C://product/images/product-image2.png"
	* 			},
	* 			{
	* 				"keyProductAttachmentID":"33A",
	* 				"keyProductID":"123A",
	* 				"fileName":"12345",
	* 				"fileExtension":"gif",
	* 				"fullFilePath":"D://products2/images/12345.gif"
	* 			}
	* 		]
	* 	}
	*/
	class ESDocumentAttachment extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordAttachment[] List of attachment records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param attachmentRecords					ESDRecordAttachment[]	list of attachment records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $attachmentRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $attachmentRecords;
			$this->configs = $configs;
			if ($attachmentRecords != null)
			{
				$this->totalDataRecords = count($attachmentRecords);
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