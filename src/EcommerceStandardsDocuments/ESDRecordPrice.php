<?php

	/**
	* Copyright (C) 2017 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single product price. The price may be assigned to a price-level, a price-group, or a customer account
	*/
	class ESDRecordPrice   
	{
		/**
		* @var string Price has been set in a contract
		*/
		const PRICE_CONTRACT = "C";
		
		/**
		* @var string Price has been set in a contract, and it the price should override other pricing (Contract Forced Pricing)
		*/
		const PRICE_CONTRACT_FORCED = "CF";
		
		/**
		* @var string Price has been set in a promotion
		*/
		const PRICE_PROMOTION = "P";
	
		/**
		* @var string Key of the product record that links the price to a product
		*/
		public $keyProductID = "";

		/**
		* @var string Key of the download record that links the price to a download
		*/
		public $keyDownloadID = "";

		/**
		* @var string Key of the labour record that links the price to labour
		*/
		public $keyLabourID = "";

		/**
		* @var string Key of the price level record that the price is linked to. This can be set to null if the price is not linked to a price level
		*/
		public $keyPriceLevelID = "";

		/**
		* @var string Key of the customer account record that the price is linked to. This can be set to null if the price is not linked to any customer account.
		*/
		public $keyAccountID = "";

		/**
		* @var string Key of the price group that the price is linked. This can be set to null if the price is not assigned to any price group.
		*/
		public $keyPriceGroupID = "";

		/**
		* @var string Key of the sell unit that the price is linked to. This can be set to null, and if so then the price should be assigned to the the default unit of a product.
		*/
		public $keySellUnitID = "";

		/**
		* @var double The amount of product units that the price is set to. This should always be a positive number.
		*/
		public $quantity = 0.0;

		/**
		* @var double|null The tax rate that applies to the price. This can be set to null, and if so then the tax rate of taxcode assigned to the product should be used instead to calculate the product's price.
		*/
		public $taxRate = 0.0;

		/**
		* @var string|null ID of an entity that the price is referenced to. Typically it could be an ID of a contract, or promotion
		*/
		public $referenceID = "";

		/**
		* @var string|null Type of entity that the price is referenced to. Typically use one of the PRICE constants in this class to set this field, or leave it empty.
		*/
		public $referenceType = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var double Monetary amount of the price. This price may be exclusive or inclusive of tax, depending on the IsInclusive settings of a product. The currency of the price is based on the system where the price was set.
		*/
		public $price = 0.0;
	}
?>