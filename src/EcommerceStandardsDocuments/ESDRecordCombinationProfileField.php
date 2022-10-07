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
	* Ecommerce Standards Record for storing the field data associated to a combination profile. Each field can contain any number of field-values, which allows products, downloads, and labour to be assigned to.
	*/
	class ESDRecordCombinationProfileField  
	{
		/**
		* @var string Key that allows the combination profile field record to be uniquely identified and linked to.
		*/
		public $keyComboProfileFieldID = "";

		/**
		* @var string Name of the combination field
		*/
		public $fieldName = "";

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
		* @var string[] List of field value labels. Each label can contain any text to label the field. Ensure that the length of the list matches the fieldValueIDs array
		*/
		public $fieldValues = array();

		/**
		* @var string[] List of field value IDs. Each value ID uniquely identifies the field value. Ensure that the length of the list matches the fieldValues array
		*/
		public $fieldValueIDs = array();
	}
?>