<?php

	/**
	* Copyright (C) 2017 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single attribute and value within a order line. This allows any additional fields and field values to be  with the order line.
	*/
	class ESDRecordOrderLineAttribute   
	{
		/**
		* @var string Key of the order attribute record
		*/
		public $keyAttributeID = "";

		/**
		* @var string Code of the attribute.  May or may not be a unqiue identifier.
		*/
		public $attributeCode = "";

		/**
		* @var string name of the attribute.
		*/
		public $attributeName = "";

		/**
		* @var string value of the attribute.
		*/
		public $attributeValue = "";

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
		* s default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($this->attributeCode== null)
			{
				$this->attributeCode = "";
			}
			
			if ($this->attributeName== null)
			{
				$this->attributeName = "";
			}
			
			if ($this->keyAttributeID== null)
			{
				$this->keyAttributeID = "";
			}
			
			if ($this->attributeValue== null)
			{
				$this->attributeValue = "";
			}
			
			if ($this->internalID== null)
			{
				$this->internalID = "";
			}
		}
	}
?>