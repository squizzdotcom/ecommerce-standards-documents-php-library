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
	* Ecommerce standards document that holds a list of general ledger account records
	* 
	* An example of the Customer Account Ecommerce Standards document in its JSON serialised form
	* 
	* @code 
	* {
	*     "version": 1.4,
	*     "resultStatus": 1,
	*     "message":"The general ledger account data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 3,
	*     "configs":{"dataFields":"keyGLAccountID,glAccountCode,name,description,accountClass,balance,keyTaxcodeID,keyParentGLAccountID,accountType"},
	*     "dataRecords":
	*      [
	*         {
	*             "keyGLAccountID":"GL1",
	*         },
	*         {
	*             "keyGLAccountID":"111",
	*             "glAccountCode":"3000",
	*             "name":"Operating Revenue Account",
	*             "description":"Records transactions for revenue that is generated in day-to-day trading activities",
	*             "accountClass":"Revenue",
	*             "balance":200123.34,
	*             "keyTaxcodeID": "TAXGST",
	*             "keyParentGLAccountID": "3",
	*             "accountType":"OPERATING_REVENUE"
	*         },
	*         {
	*             "keyGLAccountID":"2",
	*             "glAccountCode":"1150",
	*             "name":"Buildings and land assets",
	*             "description":"Records transactions associated with building and land assets owned by the business",
	*             "accountClass":"Asset",
	*             "balance":100023.43,
	*             "keyTaxcodeID": "TAXGST",
	*             "keyParentGLAccountID": "1",
	*             "accountType":"ASSET"
	*         }
	*     ]
	* }
	*/
	class ESDocumentGeneralLedgerAccount extends ESDocument implements \JsonSerializable
	{	
		/**
		* @var ESDRecordGeneralLedgerAccount[] List of general ledger account records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int								status of obtaining the document's data
		*  @param message 							string							message to accompany the result status
		*  @param generalLedgerAccountRecords		ESDRecordGeneralLedgerAccount[]	list of general ledger account records
		*  @param configs 							array							A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $generalLedgerAccountRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $generalLedgerAccountRecords;
			$this->configs = $configs;
			if ($generalLedgerAccountRecords != null)
			{
				$this->totalDataRecords = count($generalLedgerAccountRecords);
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