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
	* Ecommerce Standards Record that holds data for a single combination profile. Each profile defines the fields and field-values that are available for any number of combination products, downloads, or labour.
	*/
	class ESDRecordCombinationProfile   
	{
		/**
		* @var string Key that allows the combination profile record to be uniquely identified and linked to.
		*/
		public $keyComboProfileID = "";

		/**
		* @var string Name of the profile
		*/
		public $profileName = "";

		/**
		* @var string Text that describes the combination profile.
		*/
		public $description = "";

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var ESDRecordCombinationProfileField[] List of fields assigned to the combination profile
		*/
		public $combinationFields = array();
	}
?>