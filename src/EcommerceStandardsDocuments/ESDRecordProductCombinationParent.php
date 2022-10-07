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
	* Ecommerce Standards record for associating a parent product with a product combination profile, and all of its associated product-field-value combinations
	*/
	class ESDRecordProductCombinationParent  
	{
		/**
		* @var int For product combinations specifics the value to set when no child product is the default within the combination
		*/
		const DEFAULT_COMBINATION_NOT_SET = -1;

		/**
		* @var string Key of the product record that links it to being the parent product of the combination
		*/
		public $keyProductID = "";

		/**
		* @var string Key of the product combination profile that links the profile to the combination
		*/
		public $keyComboProfileID = "";

		/**
		* @var int Index of the product combinations list that denotes the combination that is the default. The default may be set when initially viewing a combination product as the default child product option(s)
		*/
		public $defaultCombination = DEFAULT_COMBINATION_NOT_SET;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var ESDRecordProductCombination[] List of product combinations that contains the child products assigned based on a combination of field values be set for each
		*/
		public $productCombinations = array();
	}
?>