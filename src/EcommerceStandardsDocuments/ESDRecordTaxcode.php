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
	* Ecommerce Standards Record that holds data for a single taxcode. Each taxcode defines a type of tax that can be calculated for any relevant monetary price.
	*/
	class ESDRecordTaxcode   
	{
		/**
		* @var string Key of the taxcode record to be uniquely identified and linked to.
		*/
		public $keyTaxcodeID = "";

		/**
		* @var string Taxcode. May or may not be a unique identifier
		*/
		public $taxcode = "";

		/**
		* @var string Label of the taxcode
		*/
		public $taxcodeLabel = "";

		/**
		* @var string Text to describe the taxcode
		*/
		public $description = "";

		/**
		* @var double Numeric amount as a percentage rate that the taxcode applies to. Eg. if set to 10, then a 10% tax will be applied on top of a price.
		*/
		public $taxcodePercentageRate = 0.0;

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

	}
?>