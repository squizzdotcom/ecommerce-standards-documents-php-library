<?php
	/**
	* Copyright (C) 2019 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single sell unit. The unit defines how a product, download, or labour is sold individually.
	*/
	class ESDRecordSellUnit   
	{
		/**
		* @var string Key that allows the sell unit record to be uniquely identified and linked to.
		*/
		public $keySellUnitID = "";

		/**
		* @var string Code of the sell unit. May or may not be a unqiue identifier.
		*/
		public $sellUnitCode = "";

		/**
		* @var string Label of the sell unit.
		*/
		public $sellUnitLabel = "";

		/**
		* @var string Either N-No, Y-Yes. If 'Y' then indicates that the selling unit is the base selling unit. The base selling unit may be the unit stored in the system that all other units reference off. Typically only one sell unit would be set as the base.
		*/
		public $isBaseUnit = "";

		/**
		* @var double quantity of the unit that makes up the base unit. If not set then the default would be 1.
		*/
		public $baseQuantity = 0.0;

		/**
		* @var double quantity of the unit that makes up its parent unit. If not set then the default would be 1.
		*/
		public $parentQuantity = 0.0;

		/**
		* @var string Either N-No, Y-Yes. If 'Y' then indicates that the pricing of the sell unit should occur off the base sell unit. This could be set if a sell unit is assigned to a product for a given quantity, and all the pricing of the product is set in the base sell unit, not the assigned sell unit.
		*/
		public $isPricedOffBaseUnit = "";

		/**
		* @var string Key of the sell unit linked as a parent. This allows the parentQuantity to be related to another unit.
		*/
		public $keySellUnitParentID = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
	}
?>