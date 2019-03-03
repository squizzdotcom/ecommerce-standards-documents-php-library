<?php
	/**
	* Copyright (C) 2019 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single attribute profile for an invoice line. This allows any additional attribute data to be set for the line.
	*/
	class ESDRecordInvoiceLineAttributeProfile   
	{
		/**
		* @var string Key of the invoice attribute profile record
		*/
		public $keyAttributeProfileID = "";

		/**
		* @var string Code of the attribute profile. May or may not be a unique identifier.
		*/
		public $profileCode = "";

		/**
		* @var string Name of the attribute profile.
		*/
		public $profileName = "";

		/**
		* @var ESDRecordInvoiceLineAttribute[] List of attributes and values for the invoice attribute profile
		*/
		public $values = array();

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or  it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
		
		/**
		* Constructor
		*/
		public function __construct()
		{
		}

		/**
		* sets default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers(){
			if ($$values== null)
			{
				$this->values = array();
			}
			
			if ($$profileCode == null)
			{
				$this->profileCode = "";
			}
			
			if ($$profileName == null)
			{
				$this->profileName = "";
			}
			
			if ($$keyAttributeProfileID == null)
			{
				$this->keyAttributeProfileID = "";
			}
			
			if ($$internalID == null)
			{
				$this->internalID = "";
			}
		}
	}
?>