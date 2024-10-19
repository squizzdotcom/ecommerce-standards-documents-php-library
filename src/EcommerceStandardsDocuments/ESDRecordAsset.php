<?php
	/**
	* Copyright (C) Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single asset. An asset can be single instance of a tangible or intangible product/service/resource that is created, owned, traded, and may ultimately be destroyed.
	*/
	class ESDRecordAsset
	{
		/**
		* @var string Key that allows the asset record to be uniquely identified and linked to.
		*/
		public $keyAssetID = "";
		/**
		* @var string Code of the asset.  May or may not be a unqiue identifier.
		*/
		public $assetCode = "";
		/**
		* @var string Key of the Product record that the asset is represented by and linked to.
		*/
		public $keyProductID = "";
		/**
		* @var string Key of the Taxcode record that the asset is assigned to. The taxcode may control the amount of tax applied to the asset.
		*/
		public $keyTaxcodeID = "";
		/**
		* @var string Code that allows the asset to searched on. This search code may or may not be unique, and would typically contain key words that allows the asset to found.
		*/
		public $assetSearchCode = "";
		/**
		* @var string Barcode set for the asset. A barcode is typically displayed on a asset and requires a reader to decipher an image that turns it into a sequence of characters.
		*/
		public $barcode = "";
		/**
		* @var string Inner barcode set for the asset. Multiple barcodes be assigned to a asset, and the inner barcode could denote one of these barcodes, or it could be a portion of a single barcode.
		*/
		public $barcodeInner = "";
		/**
		* @var string name of brand that the asset belongs to.
		*/
		public $brand = "";
		/**
		* @var string Name of the asset. The name provides a label to desribe the overall nature of the asset, making it more easily identifiable to humans
		*/
		public $name = "";
		/**
		* @var string First description of the asset. May contain any text used to describe the asset.
		*/
		public $description1 = "";
		/**
		* @var string Second description of the asset. May contain any text used to describe the asset.
		*/
		public $description2 = "";
		/**
		* @var string Third description of the asset. May contain any text used to describe the asset.
		*/
		public $description3 = "";
		/**
		* @var string Fourth description of the asset. May contain any text used to describe the asset.
		*/
		public $description4 = "";
		/**
		* @var string Meta title of the asset. This would typically be used in the meta data of a web page or user interface that may be hidden from being viewed, but contains a label of the asset that systems could utilise or be displayed in an application's header. The data in this field is typically targeted for online search engines.
		*/
		public $metaTitle = "";
		/**
		* @var string A list of words that describe the asset. This would typically be used in the meta data of a web page or user interface that may be hidden from being viewed, but contains a space delimited list of keywords used by systems to index and allow for searching on the asset. The data in this field is typically targeted for online search engines.
		*/
		public $metaKeywords = "";
		/**
		* @var string Meta description the asset. This would typically be used in the meta data of a web page or user interface that may be hidden from being viewed, but contains a paragraph of text describing the details of a asset that may be used to index, or display in search listings. The data in this field is typically targeted for online search engines.
		*/
		public $metaDescription = "";
		/**
		* @var string primary resource path of the asset's Uniform Resource Locator (URL) that allows the asset to be communicated to or found within a public or private computer network
		*/
		public $assetResourceURL = "";
		/**
		* @var string Class of the asset. A class may contain any text that can be set for multiple assets as a classifier of the type of asset.
		*/
		public $assetClass = "";
		/**
		* @var string United Nations Standard Assets and Service Code. Stores a standard code defined by the United Nations classifying objects.
		*/
		public $UNSPSC = "";
		/**
		* @var string Key of the sell unit record that denotes the unit that the asset is sold in.
		*/
		public $keySellUnitID = "";
		/**
		* @var string Label of the unit that the asset is sold as.
		*/
		public $unit = "";
		/**
		* @var double Weight of a single asset unit.
		*/
		public $weight  = 0.0;
		/**
		* @var double Width dimension of the asset.
		*/
		public $width  = 0.0;
		/**
		* @var double Height dimension of the asset.
		*/
		public $height  = 0.0;
		/**
		* @var double Depth dimension of the asset.
		*/
		public $depth  = 0.0;
		/**
		* @var double Weight of the package that the sell unit is contained within.
		*/
		public $packageWeight  = 0.0;
		/**
		* @var double Width dimension of the package that the sell unit is contained within.
		*/
		public $packageWidth  = 0.0;
		/**
		* @var double Height dimension of the package that the sell unit is contained within.
		*/
		public $packageHeight  = 0.0;
		/**
		* @var double Depth dimension of the package that the sell unit is contained within.
		*/
		public $packageDepth  = 0.0;
		/**
		* @var string Code of the asset's width measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		public $widthUnitMeasureCode = "";
		/**
		* @var string Code of the asset's height measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		public $heightUnitMeasureCode = "";
		/**
		* @var string Code of the asset's depth measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		public $depthUnitMeasureCode = "";
		/**
		* @var string Code of the asset's weight measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_MASS_ in the ESDocumentConstants class
		*/
		public $weightUnitMeasureCode = "";
		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that any pricing set for the asset is inclusive of tax applied to the price, based the rate of taxcode assigned to the asset.
		*/
		public $isPriceTaxInclusive = "";
		/**
		* @var int Number to order the asset by. This may be used to order a number of assets within a list.
		*/
		public $ordering = 0;
		/**
		* @var int Date time that the asset was first created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $createdDate  = 0;
		/**
		* @var int Date time that the asset was destroyed. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $destroyedDate  = 0;
		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop  = ESDocumentConstants::ESD_RECORD_OPERATION_NA;
		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var ESDRecordSellUnit[] Stores a list of sell units that denote different quantities the the asset can be sold in
		*/
		public $sellUnits = array();
	}
?>