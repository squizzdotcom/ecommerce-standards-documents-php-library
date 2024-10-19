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
	*{
	*     "version": 1.5,
	*     "resultStatus": 1,
	*     "message":"The location data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 3,
	*     "configs":{
	*         "dataFieldsLocation":"keyLocationID,locationCode,locationName,address1,address2,address3,region,country,postcode,contact,phone,fax,isActive,isGeographic,latitude,longitude",
	*         "dataFieldsLocationStock":"keyProductID,qtyAvailable,qtyOnHand,qtyOrdered,qtyBackordered,qtyReserved,qtyConsigned"
	*      },
	*     "dataRecords":
	*         [
	*             {
	*                 "keyLocationID":"111",
	*                 "locationCode":"LOC-111",
	*                 "locationName":"Local Store"
	*             },
	*             {
	*                 "keyLocationID":"123",
	*                 "locationCode":"LOC-123",
	*                 "locationName":"Head Office",
	*                 "address1":"234",
	*                 "address2":"Bourke Street",
	*                 "address3":"Melbourne",
	*                 "region":"Victoria",
	*                 "country":"Australia",
	*                 "postcode":"3000",
	*                 "contact":"John Doe",
	*                 "phone":"+614001112222",
	*                 "fax":"+614002223333",
	*                 "email":"headoffice@example.com",
	*                 "isActive":"Y",
	*                 "isGeographic":"Y",
	*                 "latitude":45.123,
	*                 "longitude":-72.123,
	*                 "website":"www.example.com",
	*                 "locationType":"OFFICE",
	*                 "productStock":[],
	*                 "attributes":[]
	*             },
	*             {
	*                 "keyLocationID":"456",
	*                 "locationCode":"LCT-456",
	*                 "locationName":"Warehouse",
	*                 "address1":"237",
	*                 "address2":"Bourke Street",
	*                 "address3":"Melbourne",
	*                 "region":"Victoria",
	*                 "country":"Australia",
	*                 "postcode":"3000",
	*                 "contact":"Max Smith",
	*                 "phone":"+614003334444",
	*                 "fax":"+614005556666",
	*                 "email":"warehouse@example.com",
	*                 "isActive":"Y",
	*                 "isGeographic":"Y",
	*                 "latitude":45.423,
	*                 "longitude":-72.823,
	*                 "website":"www.example.com",
	*                 "locationType":"WAREHOUSE",
	*                 "productStock":
	*                 [
	*                     {
	*                         "keyProductID":"ABC",
	*                         "qtyAvailable":432
	*                     },
	*                     {
	*                         "keyProductID":"DEF",
	*                         "qtyAvailable":0,
	*                         "qtyOnHand":0,
	*                         "qtyOrdered":5,
	*                         "qtyBackordered":10,
	*                         "qtyReserved":11,
	*                         "qtyConsigned":3
	*                     }
	*                 ],
	*                 "attributes":
	*                 [
	*                     {
	*                         "keyAttributeProfileID":"BD",
	*                         "keyAttributeID":"BRAND-NAME",
	*                         "stringValue": "Acme Shoes"
	*                     },
	*                     {
	*                         "keyAttributeProfileID":"BD",
	*                         "keyAttributeID":"BRAND-NAME",
	*                         "stringValue": "Swisho Shoes"
	*                     },
	*                     {
	*                         "keyAttributeProfileID":"BD",
	*                         "keyAttributeID":"BRAND-NAME",
	*                         "stringValue": "Budgety Shoes"
	*                     }
	*                 ]
	*             }
	*         ]
	* }
	*/
	class ESDocumentLocation extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordLocation[] List of Location records. The data records property must be the last property in the JSON data when serialised.
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int						status of obtaining the document's data
		*  @param message 							string					message to accompany the result status
		*  @param locationRecords					ESDRecordLocation[]		list of location records
		*  @param configs 							array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $locationRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $locationRecords;
			$this->configs = $configs;
			if ($locationRecords != null)
			{
				$this->totalDataRecords = count($locationRecords);
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