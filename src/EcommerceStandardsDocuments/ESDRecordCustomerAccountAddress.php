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
	* Ecommerce Standards record that contains the data of a single address associated to a customer account.
	*/
	class ESDRecordCustomerAccountAddress   
	{
		/**
		* @var string Key that allows the customer account address record to be uniquely identified and linked to.
		*/
		public $keyAddressID = "";

		/**
		* @var string Key of the customer account record that the address record is linked to.
		*/
		public $keyCustomerAccountID = "";

		/**
		* @var string Description of the customer account address. This may be used as a label to help a person identify with the address.
		*/
		public $description = "";

		/**
		* @var string Name of the organisation that the address is associated to.
		*/
		public $orgName = "";

		/**
		* @var string Name of the person who can be contacted at the address.
		*/
		public $contact = "";

		/**
		* @var string Phone number of the address. Its preferable to set phone numbers that can be dialled from anywhere internationally.
		*/
		public $phone = "";

		/**
		* @var string Fax number of the address. Its preferable to set fax numbers that can be dialled from anywhere internationally.
		*/
		public $fax = "";

		/**
		* @var string First address field. Typically this could be a unit number or street number.
		*/
		public $address1 = "";

		/**
		* @var string Second address field. Typically this could be the street name.
		*/
		public $address2 = "";

		/**
		* @var string Third address field. Typically this could be the suburb, city or town.
		*/
		public $address3 = "";

		/**
		* @var string Name of the region/province/state that the address exists within.
		*/
		public $region = "";

		/**
		* @var string Name of the country that the address exists within.
		*/
		public $country = "";

		/**
		* @var string Postcode or zipcode of the address.
		*/
		public $postcode = "";

		/**
		* @var string Code that denotes the freight location or freight data associated to the address.
		*/
		public $freightCode = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the address is the primary address assigned to the customer account. Typically a primary address would be the account's billing address.
		*/
		public $isPrimary = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the address may be used by the customer account to have goods delivered to.
		*/
		public $isDelivery = "";

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