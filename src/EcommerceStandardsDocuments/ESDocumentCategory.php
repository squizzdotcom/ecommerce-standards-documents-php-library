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
	* Ecommerce standards document that contains a list of category records
	* An example of the Category Ecommerce Standards document in its JSON serialised form
	* @code 
	* {
	*     "version": 1.3,
	*     "resultStatus": 1,
	*     "message":"The category data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 3,
	*     "configs":{"dataFields":"keyCategoryID,categoryCode,keyCategoryParentID,name,description1,description2,description3,description4,metaTitle,metaKeywords,metaDescription,ordering"},
	*     "dataRecords":
	*      [
	*         {
	*             "keyCategoryID":"2",
	*             "categoryCode":"Home and Stationery"
	*         },
	*         {
	*             "keyCategoryID":"123",
	*             "categoryCode":"tables-chairs",
	*             "keyCategoryParentID":"2",
	*             "keyCategoryTreeID":"Main-Catalogue",
	*             "name":"Tables and Chairs",
	*             "description1":"View our extensive range of tables and chairs",
	*             "description2":"Range includes products from the ESD designers",
	*             "description3":"",
	*             "description4":"",
	*             "metaTitle":"Tables and Chairs From ESD Designers",
	*             "metaKeywords":"tables chairs esd furniture designers",
	*             "metaDescription":"Tables and chairs from the ESD designers",
	*             "ordering": 2,
	*             "keyProductIDs":["TAB-1","53432","CHAIR-5"],
	*             "keyDownloadIDs":[],
	*             "keyLabourIDs":[]
	*         },
	*         {
	*             "keyCategoryID":"124",
	*             "categoryCode":"paper",
	*             "keyCategoryParentID":"2",
	*             "keyCategoryTreeID":"Main-Catalogue",
	*             "name":"Paper Products",
	*             "description1":"View our extensive range of paper",
	*             "description2":"Range includes paper only sources from sustainable environments",
	*             "description3":"",
	*             "description4":"",
	*             "metaTitle":"Paper Products",
	*             "metaKeywords":"paper products environmental",
	*             "metaDescription":"Paper products from sustainable environments",
	*             "ordering": 1,
	*             "keyProductIDs":["PROD-001","PROD-002"],
	*             "keyDownloadIDs":["DOWN-1", "DOWN-2","DOWN-3"],
	*             "keyLabourIDs":[]
	*         }
	*     ]
	* }
	*/
	class ESDocumentCategory extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordCategory[] List of category records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 			int							status of obtaining the document's data
		*  @param message 				string						message to accompany the result status
		*  @param categoryRecords		ESDRecordCategory[]			list of category records
		*  @param configs 				array						A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $categoryRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $categoryRecords;
			$this->configs = $configs;
			if ($categoryRecords != null)
			{
				$this->totalDataRecords = count($categoryRecords);
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