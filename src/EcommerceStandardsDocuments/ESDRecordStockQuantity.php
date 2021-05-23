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
	* Ecommerce Standards Record that holds data for a stock unit quantity of a product, download or labour. This record typically stores stock quantity data that can updated on a frequent basis.
	*/
	class ESDRecordStockQuantity   
	{
		/**
		* @var string Key of the product record that the stock level quantity is set for
		*/
		public $keyProductID = "";

		/**
		* @var string Key of the download record that the stock level quantity is set for
		*/
		public $keyDownloadID = "";

		/**
		* @var string Key of the labour record that the stock level quantity is set for
		*/
		public $keyLabourID = "";

		/**
		* @var double Unit quantity of stock available to be purchased
		*/
		public $qtyAvailable = 0.0;

		/**
		* @var double Unit quantity of stock on hand at its location
		*/
		public $qtyOnHand = 0.0;

		/**
		* @var double Unit quantity of stock that has been ordered by a purchaser
		*/
		public $qtyOrdered = 0.0;
		
        /**
		* @var double Unit quantity of stock that is the maximum amount that can be ordered by a purchaser
		*/
        public $qtyOrderable = 0.0;

		/**
		* @var double Unit quantity of stock that has been back ordered from a supplier
		*/
		public $qtyBackordered = 0.0;

		/**
		* @var double Unit quantity of stock that has been reserved for given purchasers
		*/
		public $qtyReserved = 0.0;

		/**
		* @var double Unit quantity of stock that has been placed at an external location (consigned)
		*/
		public $qtyConsigned = 0.0;

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