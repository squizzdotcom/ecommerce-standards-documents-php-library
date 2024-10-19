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
	* Ecommerce Standards Record that holds data for a single product. A product can be a physical or non-physical item that can be sold in quantities.
	*/
	class ESDRecordProduct   
	{
		/**
		* @var string Key that allows the product record to be uniquely identified and linked to.
		*/
		public $keyProductID = "";

		/**
		* @var string Code of the product.  May or may not be a unqiue identifier.
		*/
		public $productCode = "";

		/**
		* @var string Key of the Taxcode record that the product is assigned to. The taxcode may control the amount of tax applied to the product.
		*/
		public $keyTaxcodeID = "";

		/**
		* @var string Code that allows the product to searched on. This search code may or may not be unique, and would typically contain key words that allows the product to found.
		*/
		public $productSearchCode = "";

		/**
		* @var string Barcode set for the product. A barcode is typically displayed on a product and requires a reader to decipher an image that turns it into a sequence of characters.
		*/
		public $barcode = "";

		/**
		* @var string Inner barcode set for the product. Multiple barcodes be assigned to a product, and the inner barcode could denote one of these barcodes, or it could be a portion of a single barcode.
		*/
		public $barcodeInner = "";

		/**
		* @var string Branding of the product.
		*/
		public $brand = "";

		/**
		* @var string Name of the product
		*/
		public $name = "";

		/**
		* @var string First description of the product. May contain any text used to describe the product.
		*/
		public $description1 = "";

		/**
		* @var string Second description of the product. May contain any text used to describe the product.
		*/
		public $description2 = "";

		/**
		* @var string Third description of the product. May contain any text used to describe the product.
		*/
		public $description3 = "";

		/**
		* @var string Fourth description of the product. May contain any text used to describe the product.
		*/
		public $description4 = "";

		/**
		* @var string Meta title of the product. This would typically be used in the meta data of a web page or user interface that may be hidden from being viewed, but contains a label of the product that systems could utilise or be displayed in an application's header. The data in this field is typically targeted for online search engines.
		*/
		public $metaTitle = "";
		
		/**
		* @var string A list of words that describe the product. This would typically be used in the meta data of a web page or user interface that may be hidden from being viewed, but contains a space delimited list of keywords used by systems to index and allow for searching on the product. The data in this field is typically targeted for online search engines.
		*/
		public $metaKeywords = "";
		
		/**
		* @var string Meta description the product. This would typically be used in the meta data of a web page or user interface that may be hidden from being viewed, but contains a paragraph of text describing the details of a product that may be used to index, or display in search listings. The data in this field is typically targeted for online search engines.
		*/
		public $metaDescription = "";

		/**
		* @var string Class of the product. A class may contain any text that can be set for multiple products as a classifier of the type of product.
		*/
		public $productClass = "";

		/**
		* @var string United Nations Standard Products and Service Code. Stores a standard code defined by the United Nations classifying objects.
		*/
		public $UNSPSC = "";

		/**
		* @var string Key of the sell unit record that denotes the default unit that the product is sold in.
		*/
		public $keySellUnitID = "";

		/**
		* @var string Label of the default unit that the product is sold individually as.
		*/
		public $unit = "";

		/**
		* @var double Quantity of units that allow the product to bought as a pack. This is deprecated in favour of using sell units.
		*/
		public $packQuantity = 0.0;

		/**
		* @var string Label of the pack that the product may be bought as.  This is deprecated in favour of using sell units.
		*/
		public $packUnit = "";

		/**
		* @var double Weight of a single product unit.
		*/
		public $weight = 0.0;

		/**
		* @var double Width dimension of a single product unit.
		*/
		public $width = 0.0;

		/**
		* @var double Height dimension of a single product unit.
		*/
		public $height = 0.0;

		/**
		* @var double Depth dimension of a single product unit.
		*/
		public $depth = 0.0;

		/**
		* @var string Code of the product's width measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		 public $widthUnitMeasureCode = "";

		/**
		* @var string Code of the product's height measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		 public $heightUnitMeasureCode = "";
		
		/**
		* @var string Code of the product's depth measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		public $depthUnitMeasureCode = "";
		
		/**
		* @var string Code of the product's weight measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_MASS_ in the ESDocumentConstants class
		*/
		 public $weightUnitMeasureCode = "";

		/**
		* @var double Monetary value that denotes the average cost to purchase a single product unit.
		*/
		public $averageCost = 0.0;

		/**
		* @var string Label of the warehouse location that the product is assigned to.
		*/
		public $warehouse = "";

		/**
		* @var string Label of the supplier that the product is purchased from.
		*/
		public $supplier = "";

		/**
		* @var string Label of the amount of time that it would typically take for the product to be delivered when it is out of stock
		*/
		public $deliveryTimeNoStock = "";

		/**
		* @var string Label of the amount of time that it would typically take for the product to be delivered when it is in stock
		*/
		public $deliveryTimeInStock = "";

		/**
		* @var double The amount of base product units that are in stock and available for purchase.
		*/
		public $stockQuantity = 0.0;

		/**
		* @var double The amount of base product units that indicate when the product is no longer in stock.
		*/
		public $stockNoneQuantity = 0.0;

		/**
		* @var double The amount of base product units that indicate when the product is low in stock.
		*/
		public $stockLowQuantity = 0.0;

		/**
		* @var int Date time that indicates when the product's stock units has been available or in-stock since. If the product currently has no stock available then ignore setting. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $stockAvailableSinceDate = 0;

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that any pricing set for the product is inclusive of tax applied to the price, based the rate of taxcode assigned to the product.
		*/
		public $isPriceTaxInclusive = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates product is a kit, and is representative of a number of individual products bundled together.
		*/
		public $isKitted = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes If 'Y' then indicates that if the product is marked as a kit then when its pricing is calculated, that the pricing assigned to the product is for the cost of kit.
		* If 'N' then indicates that if the product is marked as a kit then when its pricing is calculated, that the price of the product should be calculated by combining the price of all the component products assignd to the kit.
		*/
		public $kitProductsSetPrice = "";
		
		/**
		* @var int Number to order the product by. This may be used to order a number of products within a list.
		*/
        public $ordering = 0;

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var ESDRecordSellUnit[] Stores a list of sell units that denote different quantities the the product can be sold in
		*/
		public $sellUnits = array();
	}
?>