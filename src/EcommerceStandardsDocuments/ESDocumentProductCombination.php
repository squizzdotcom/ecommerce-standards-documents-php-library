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
	* Ecommerce standards document that contains a list of product combination records, and a list of product combination profile records
	* 
	* An example of the Product Combinations Ecommerce Standards document in its JSON serialised form
	* 
	*@code 
	*{
	*    "version": 1.4,
	*    "resultStatus": 1,
	*    "message":"The product combination data has been successfully obtained.",
	*    "dataTransferMode": "COMPLETE",
	*    "totalDataRecords": 2,
	*    "configs":{},
	*    "combinationProfiles":
	*    [
	*        {
	*            "keyComboProfileID":"PROF-123",
	*            "combinationFields":[]
	*        },
	*        {
	*            "keyComboProfileID":"PROF-456",
	*            "profileName":"Furniture Styling",
	*            "description":"Styling of Furniture Products",
	*            "combinationFields":
	*            [
	*                {
	*                    "keyComboProfileFieldID":"PROF-456-1",
	*                    "fieldValues":[],
	*                    "fieldValueIDs":[]
	*                },
	*                {
	*                    "keyComboProfileFieldID":"PROF-456-2",
	*                    "fieldName":"Size",
	*                    "ordering": 2,
	*                    "fieldValues": ["Small","Medium","Large","Jumbo"],
	*                    "fieldValueIDs": ["PROF-456-2-SM","PROF-456-2-MED","PROF-456-2-LARG","PROF-456-2-JUM"]
	*                },
	*                {
	*                    "keyComboProfileFieldID":"PROF-456-4",
	*                    "fieldName":"Style",
	*                    "ordering": 1,
	*                    "fieldValues": ["Classic","Modern","Vintage","Minimalist"],
	*                    "fieldValueIDs": ["COMBO-VAL-CL","COMBO-VAL-MOD","COMBO-VAL-VINT","COMBO-VAL-MIN"]
	*                }
	*            ]
	*        }
	*    ],
	*    "dataRecords":
	*     [
	*        {
	*            "keyProductID":"678",
	*            "keyComboProfileID":"PROF-123",
	*            "productCombinations":[]
	*        },
	*        {
	*            "keyProductID": "679",
	*            "keyComboProfileID": "PROF-456",
	*            "productCombinations": 
	*            [
	*                {
	*                    "keyProductID":"SOFTA-123",
	*                    "keyComboProfileID":"PROF-456",
	*                    "fieldValueCombinations":[
	*                        ["PROF-456-2","PROF-456-2-SM"],
	*                        ["PROF-456-4","COMBO-VAL-CL"]
	*                    ]
	*                },
	*                {
	*                    "keyProductID":"SOFTA-456",
	*                    "keyComboProfileID":"PROF-456",
	*                    "fieldValueCombinations":[
	*                        ["PROF-456-2","PROF-456-2-SM"],
	*                        ["PROF-456-4","COMBO-VAL-CL"]
	*                    ]
	*                },
	*                {
	*                    "keyProductID":"SOFTA-098",
	*                    "keyComboProfileID":"PROF-456",
	*                    "fieldValueCombinations":[
	*                        ["PROF-456-2","PROF-456-2-MED"],
	*                        ["PROF-456-4","COMBO-VAL-CL"]
	*                    ]
	*                }
	*            ],
	*            "defaultCombination": 2
	*        }
	*    ]
	*}
	*/
	class ESDocumentProductCombination extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordCombinationProfile[] List of product combination profile records
		*/
		public $combinationProfiles = array();
		
		/**
		* @var ESDRecordProductCombinationParent[] List of product combination records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int									status of obtaining the document's data
		*  @param message 							string								message to accompany the result status
		*  @param productCombinationParentRecords	ESDRecordProductCombinationParent[]	list of product combination parent records
		*  @param combinationProfileRecords			ESDRecordCombinationProfile[]		list of product combination profile records
		*  @param configs 							array								A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $productCombinationParentRecords = array(), $combinationProfileRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->combinationProfiles = $combinationProfileRecords; 
			$this->dataRecords = $productCombinationParentRecords;
			$this->configs = $configs;
			if ($productCombinationParentRecords != null)
			{
				$this->totalDataRecords = count($productCombinationParentRecords);
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
				'combinationProfiles' => array_filter($this->combinationProfiles),
				'dataRecords' => array_filter($this->dataRecords)
			]);
		}
	}
?>