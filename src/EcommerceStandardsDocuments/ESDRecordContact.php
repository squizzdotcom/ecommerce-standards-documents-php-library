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
	* Ecommerce Standards record that contains data for a single contact. A contact contains information about a person on how they can be communicated with. The contact record may be linked to a customer account, or supplier account
	*/
	class ESDRecordContact
	{

		/**
		* @var string Key that allows the contact record to be uniquely identified and linked to.
		*/
        public $keyContactID = "";

        /**
		* @var string Key of the customer account record that the contact record is linked to.
		*/
        public $keyCustomerAccountID = "";

        /**
		* @var string Key of the supplier account record that the contact record is linked to.
		*/
        public $keySupplierAccountID = "";

        /**
		* @var string Key of the location record that the contact record is linked to.
		*/
        public $keyLocationID = "";

        /**
		* @var string Code of the contact. May or may not be a unqiue identifier.
		*/
        public $contactCode = "";

        /**
		* @var string Title of the contact person. Eg. Mrs, Mr, Miss, Doctor
		*/
        public $title = "";

        /**
		* @var string First name field of the contact.
		*/
        public $name1 = "";

        /**
		* @var string Second name field of the contact.
		*/
        public $name2 = "";

        /**
		* @var string Third name field of the contact.
		*/
        public $name3 = "";

        /**
		* @var string Email address of the contact.
		*/
        public $email = "";

        /**
		* @var string First phone number of the contact.
		*/
        public $phone1 = "";

        /**
		* @var string Second phone number of the contact.
		*/
        public $phone2 = "";

        /**
		* @var string Third phone number of the contact.
		*/
        public $phone3 = "";

        /**
		* @var string fax number of the contact.
		*/
        public $fax = "";

        /**
		* @var string URL of the website that the contact is associated to.
		*/
        public $website = "";

        /**
		* @var string Name of the organisation associated to the contact.
		*/
        public $orgName = "";

        /**
		* @var string Name of the employment position of the contact within the organisation.
		*/
        public $orgPosition = "";

        /**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the contact is the primary person from a list of contacts.
		*/
        public $isPrimary = "";

        /**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the contact is allowed to receive marketing media.
		*/
        public $allowMarketing = "";

        /**
		* @var string[] codes of marketing categories to assign the contact to, allowing them to receive marketing media for relevant categories of media
		*/
        public $marketingCategoryCodes = array();

        /**
		* @var string Code used to authenticate or provide authentication for the contact.
		*/
        public $authCode = "";

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;
	}
?>