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
	* Ecommerce standards document that contains a list of asset component records, that define the relationships between assets, and the components that make up an asset.
	* An example of the Asset Component Ecommerce Standards document in its JSON serialised form
	* @code 
	* {
	*     "version": 1.5,
	*     "resultStatus": 1,
	*     "message":"The asset data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 2,
	*     "configs":{"dataFields":"keyAssetID,assetCode,keyTaxcodeID,assetSearchCode,barcode,barcodeInner,brand,name,description1,description2,description3,description4,assetClass,keySellUnitID,unit,weight,width,height,depth,widthUnitMeasureCode,heightUnitMeasureCode,depthUnitMeasureCode,weightUnitMeasureCode,isPriceTaxInclusive,isKitted,kitAssetsSetPrice"},
	*     "dataRecords":
	*      [
	*         {
	*             "keyAssetID":"123A",
	*             "assetCode":"ASSET-123",
	*             "keyTaxcodeID":"FREE"
	*         },
	*         {
	*             "keyAssetID":"1234",
	*             "assetCode":"ASSET-001",
	*             "keyTaxcodeID":"GST",
	*             "assetSearchCode":"Green-Recycled-Paper-Swisho",
	*             "barcode":"03423404230",
	*             "barcodeInner":"234234",
	*             "brand":"Swisho Paper",
	*             "name":"Swisho Green Paper",
	*             "description1":"Swisho green coloured paper is the ultimate green paper.",
	*             "description2":"Paper built strong and tough by Swisho",
	*             "description3":"Recommended to be used with dark inks.",
	*             "description4":"",
	*             "assetClass":"paper",
	*             "unit":"REAM",
	*             "weight": 20.1,
	*             "width": 21,
	*             "height": 29.7,
	*             "depth": 10,
	*             "widthUnitMeasureCode": "CM",
	*             "heightUnitMeasureCode": "CM",
	*             "depthUnitMeasureCode": "CM",
	*             "weightUnitMeasureCode": "KG",
	*             "isPriceTaxInclusive": "N",
	*             "keySellUnitID": 2,
	*             "ordering": 1,
	*             "sellUnits":[
	*                 {
	*                     "keySellUnitID":"2",
	*                     "weight": 1.2,
	*                     "width": 6.1,
	*                     "height": 4.4,
	*                     "depth": 2.9,
	*                     "packageWeight": 2.3,
	*                     "packageWidth": 8.0,
	*                     "packageHeight": 9.2,
	*                     "packageDepth": 10.1,
	*                     "widthUnitMeasureCode":"CM",
	*                     "heightUnitMeasureCode":"CM",
	*                     "depthUnitMeasureCode":"CM",
	*                     "weightUnitMeasureCode":"KG"
	*                 }
	*             ]
	*         }
	*     ]
	* }
	*/
	class ESDocumentAsset extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordAsset[] List of asset records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 		int						status of obtaining the asset data
		*  @param message 			string					message to accompany the result status
		*  @param assetRecords		ESDRecordAsset[]		list of asset records
		*  @param configs 			array					A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $assetRecords = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $assetRecords;
			$this->configs = $configs;
			if ($assetRecords != null)
			{
				$this->totalDataRecords = count($assetRecords);
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
