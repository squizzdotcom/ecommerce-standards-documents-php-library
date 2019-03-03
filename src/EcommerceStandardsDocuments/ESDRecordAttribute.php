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
	* Ecommerce Standards Record that holds data for a single attribute associated with products, downloads, or labour. Attributes define the fields that can have values set for products, downloads, or labour.
	*/
	class ESDRecordAttribute  
	{
		/**
		* @var string Key that allows the attribute record to be uniquely identified and linked to.
		*/
		public $keyAttributeID = "";

		/**
		* @var string name of the attribute
		*/
		public $name = "";

		/**
		* @var string The type of data that can be set as values for the attribute. Set to one the DATA_TYPE constants in the class
		*/
		public $dataType = "";

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Attribute Data Type - String
		*/
		const DATA_TYPE_STRING = "STRING";
		/**
		* @var string Attribute Data Type - Number
		*/
		const DATA_TYPE_NUMBER = "NUMBER";
	}
?>