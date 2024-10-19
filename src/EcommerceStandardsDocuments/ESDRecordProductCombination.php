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
	* Ecommerce Standards record for associating a child product with a given combination of fields and values
	*/
	class ESDRecordProductCombination  
	{
		/**
		* @var string Key of the product record that the child product is assigned to
		*/
		public $keyProductID = "";

		/**
		* @var string Key of the product combination profile record that the combination is linked to
		*/
		public $keyComboProfileID = "";

		/**
		* @var int Numeric value to order the field by. This ordering may be used when multiple fields are assigned to same combination profile
		*/
		public $ordering = 0;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string[][] List of combination field and values that maps the product to the combination. Each inner array must be 2 items in size, with the first item storing the keyComboProfileFieldID, and the 2nd the fieldValueID. It's the collection of different fields and values assigned to the child product that allows it to be separately be found, from other child products assigned to the same parent product.
		*/
		public $fieldValueCombinations = array();
	}
?>