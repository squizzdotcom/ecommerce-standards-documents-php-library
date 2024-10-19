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
	* Ecommerce standards document that contains a list of attribute records associated with products, download, and labour, as well as a list of attribute profile records
	* 
	* An example of the Attribute Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*     "version": 1.5,
	*     "resultStatus": 1,
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 4,
	*     "message":"The product attribute data has been successfully obtained.",
	*     "configs":{},
	*     "attributeProfiles":
	*     [
	*         {
	*             "keyAttributeProfileID":"PAP-001"
	*         },
	*         {
	*             "keyAttributeProfileID":"PAP002",
	*             "name":"Clothing Styling",
	*             "description":"View the styling details of clothes",
	*             "attributes":
	*             [
	*                 {
	*                     "keyAttributeID":"PAP002-0"
	*                 },
	*                 {
	*                     "keyAttributeID":"PAP002-1",
	*                     "name":"Colour"
	*                 },
	*                 {
	*                     "keyAttributeID":"PAP002-2",
	*                     "name":"Size",
	*                     "dataType":"NUMBER"
	*                 },
	*                 {
	*                     "keyAttributeID":"PAP002-3",
	*                     "name":"Texture",
	*                     "dataType":"STRING"
	*                 }
	*             ]
	*         },
	*         {
	*             "keyAttributeProfileID":"BD",
	*             "name":"Brand Details",
	*             "description":"Details of brands that our company sells",
	*             "attributes":
	*             [
	*                 {
	*                     "keyAttributeID":"BRAND-NAME",
	*                     "name":"Brand Name",
	*                     "dataType":"STRING"
	*                 },
	*                 {
	*                     "keyAttributeID":"BRAND-COUNTRY",
	*                     "name":"Brand Country Of Origin",
	*                     "dataType":"STRING"
	*                 }
	*             ]
	*         }
	*     ],
	*     "dataRecords":
	*      [
	*         {
	*             "keyProductID":"PROD-001",
	*             "keyAttributeProfileID":"PAP002",
	*             "keyAttributeID":"PAP002-0"
	*         },
	*         {
	*             "keyProductID":"PROD-001",
	*             "keyAttributeProfileID":"PAP002",
	*             "keyAttributeID":"PAP002-1",
	*             "stringValue":"RED"
	*         },
	*         {
	*             "keyProductID":"PROD-001",
	*             "keyAttributeProfileID":"PAP002",
	*             "keyAttributeID":"PAP002-2",
	*             "numberValue": 8
	*         },
	*         {
	*             "keyProductID":"PROD-001",
	*             "keyAttributeProfileID":"PAP002",
	*             "keyAttributeID":"PAP002-3",
	*             "stringValue": "soft"
	*         }
	*     ]
	*}
	*/
	class ESDocumentAttribute extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordAttributeProfile[] List of attribute profile records
		*/
		public $attributeProfiles = array();
		
		/**
		* @var ESDRecordAttributeValue[] List of attribute value records
		*/
		public $dataRecords = array();
		
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int							status of obtaining the document's data
		*  @param message 							string						message to accompany the result status
		*  @param attributeProfileRecords			ESDRecordAttributeProfile[]	list of attribute profile records
		*  @param attributeValueRecords				ESDRecordLocation[]			list of attribute value records that assign attribute values to products, downloads, and labour
		*  @param configs 							array						A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $attributeProfileRecords = array(), $attributeValueRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->attributeProfiles = $attributeProfileRecords; 
			$this->dataRecords = $attributeValueRecords;
			$this->configs = $configs;
			if ($attributeValueRecords != null)
			{
				$this->totalDataRecords = count($attributeValueRecords);
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
				'attributeProfiles' => array_filter($this->attributeProfiles),
				'dataRecords' => array_filter($this->dataRecords)
			]);
		}
	}
?>