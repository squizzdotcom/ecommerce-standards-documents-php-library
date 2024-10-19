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
	* Ecommerce Standards record that contains the data of a single Credit that can be queried for a customer account. A credit record contains information about a monetary amount applied to the account's balance. The account enquiry aspect denotes that the record may be queried in real time and contain additional information associated with the record.
	*/
	class ESDRecordCustomerAccountEnquiryCredit   
	{
        /**
		* @var string Key that allows the customer account credit record to be uniquely identified and linked to.
		*/
        public $keyCreditID = "";
        
        /**
		* @var string ID that allows the credit to be identified with. May or may not be unique.
		*/
        public $creditID = "";
        
        /**
		* @var string Number that is associated to the credit. This number can be used for referencing purposes.
		*/
        public $creditNumber = "";
        
        /**
		* @var string Key of the customer account record assigned to the credit.
		*/
        public $keyCustomerAccountID = "";
        
        /**
		* @var string Code of the customer account assigned to the credit.
		*/
        public $customerAccountCode = "";
        
        /**
		* @var int Date that the credit record was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
        public $creationDate = 0;
        
        /**
		* @var int Date set to the credit. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
        public $creditDate = 0;
        
        /**
		* @var double Monetary amount that the credit applies for.
		*/
        public $appliedAmount = 0.0;
        
        /**
		* @var string Key of the location record associated to the credit.
		*/
        public $keyLocationID = "";
        
        /**
		* @var string Code of the location associated to the credit.
		*/
        public $locationCode = "";
        
        /**
		* @var string Label of the location associated to the credit.
		*/
        public $locationLabel = "";
        
        /**
		* @var string The type of location associated to the credit. Set it to one of the LOCATION_TYPE constants in the ESDocumentConstants class
		*/
        public $locationType = "";
        
        /**
		* @var string Key of an entity that is linked to the credit as a reference. A Reference could be a record such as a sales order or invoice
		*/
        public $referenceKeyID = "";
        
        /**
		* @var string Type of entity that is linked to the credit as a reference.  A Reference could be a record such as a sales order or invoice
		*/
        public $referenceType = "";
        
        /**
		* @var string Number that provides a reference to the credit.
		*/
        public $referenceNumber = "";
        
        /**
		* @var string Text, number or code that the customer uses to identify the credit record. This could be the customer's purchase order order, supplier invoice code, or an other identifier.
		*/
		public $customerReference = "";
        
        /**
		* @var string Code of the sales representative associated to the credit.
		*/
        public $salesRepCode = "";
        
        /**
		* @var string Name of the sales representative associated to the credit.
		*/
        public $salesRepName = "";
        
        /**
		* @var string Name of the contact person associated with the delivery address
		*/
        public $deliveryContact = "";
        
        /**
		* @var string Name of the organisation associated to the delivery address
		*/
        public $deliveryOrgName = "";
        
        /**
		* @var string First delivery address field set for the credit.
		*/
        public $deliveryAddress1 = "";
        
        /**
		* @var string Second delivery address field set for the credit.
		*/
        public $deliveryAddress2 = "";
        
        /**
		* @var string Third delivery address field set for the credit.
		*/
        public $deliveryAddress3 = "";
        
        /**
		* @var string Region/State/Province delivery address field set for the credit.
		*/
        public $deliveryStateProvince = "";
        
        /**
		* @var string Country delivery address field set for the credit.
		*/
        public $deliveryCountry = "";
        
        /**
		* @var string Code of the country at the delivery address as a 2 digit code set by ISO standards.
		*/
        public $deliveryCountryCodeISO2 = "";
        
        /**
		* @var string Code of the country at the delivery address as a 3 digit code set by ISO standards.
		*/
        public $deliveryCountryCodeISO3 = "";
        
        /**
		* @var string Post code at the delivery address.
		*/
        public $deliveryPostcode = "";

		/**
		* @var string Code of the purchase order to include in the delivery information, that is contains the code of the purchase order associated to the delivery of the goods
		*/
		public $deliveryPurchaseOrderCode = "";
        
        /**
		* @var string Name of the contact person at the address associated with the billing of the credit.
		*/
        public $billingContact = "";
        
        /**
		* @var string Name of the organisation set against the billing address for the credit.
		*/
        public $billingOrgName = "";
        
        /**
		* @var string First address field of the billing address set for the credit.
		*/
        public $billingAddress1 = "";
        
        /**
		* @var string Second address field of the billing address set for the credit.
		*/
        public $billingAddress2 = "";
        
        /**
		* @var string Third address field of the billing address set for the credit.
		*/
        public $billingAddress3 = "";
        
        /**
		* @var string Name of the region/state/province that the credit is being billed to.
		*/
        public $billingStateProvince = "";
        
        /**
		* @var string Name of the country that the credit is being billed to.
		*/
        public $billingCountry = "";
        
        /**
		* @var string Code of the country at the billing address as a 2 digit code set by ISO standards.
		*/
        public $billingCountryCodeISO2 = "";
        
        /**
		* @var string Code of the country at the billing address as a 3 digit code set by ISO standards.
		*/
        public $billingCountryCodeISO3 = "";
        
        /**
		* @var string Post code at the billing address
		*/
        public $billingPostcode = "";
        
        /**
		* @var string Tax number displayed on the credit
		*/
        public $taxNumber = "";
        
        /**
		* @var string Label of the taxes assigned to the credit's total
		*/
        public $taxLabel = "";
        
        /**
		* @var double Percentage amount of tax that the applied to the credit's total
		*/
        public $taxRate = 0.0;
        
        /**
		* @var double Total monetary amount of the credit excluding taxes
		*/
        public $totalExTax = 0.0;
        
        /**
		* @var double Total monetary amount of the credit including taxes
		*/
        public $totalIncTax = 0.0;
        
        /**
		* @var double Total monetary amount of tax applied to the credit's total
		*/
        public $totalTax = 0.0;
        
        /**
		* @var double Total monetary amount of freight inclusive of tax applied to the credit's total
		*/
        public $totalFreightIncTax = 0.0;
        
        /**
		* @var double Total monetary amount of freight excluding tax applied to the credit's total
		*/
        public $totalFreightExTax = 0.0;
        
        /**
		* @var double Total monetary amount of extra charges inclusive of tax applied to the credit's total
		*/
        public $totalExtraChargesIncTax = 0.0;
        
        /**
		* @var double Total monetary amount of extra charges exclusive of tax applied to the credit's total
		*/
        public $totalExtraChargesExTax = 0.0;
        
        /**
		* @var double Total monetary amount of discounts inclusive of tax discounted off the credit's total
		*/
        public $totalDiscountsIncTax = 0.0;
        
        /**
		* @var double Total monetary amount of discounts exclusive of tax discounted off the credit's total
		*/
        public $totalDiscountsExTax = 0.0;
        
        /**
		* @var double Total monetary amount of levies inclusive of tax applied to the credit's total
		*/
        public $totalLeviesIncTax = 0.0;
        
        /**
		* @var double Total monetary amount of levies exclusive of tax applied to the credit's total
		*/
        public $totalLeviesExTax = 0.0;
        
        /**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored in the credit with
		*/
        public $currencyCode = "";
        
        /**
		* @var double Total quantity across all the credit lines
		*/
        public $totalQuantity = 0.0;
        
        /**
		* @var string Text that describes any information associated with the credit
		*/
        public $description = "";
        
        /**
		* @var string Language that all text is described in. Set it to one of the LANG constants in the ESDocumentConstants class
		*/
        public $language = "";
        
        /**
		* @var string Text that contains additional comments that have been made for the credit
		*/
        public $comment = "";
        
        /**
		* @var ESDRecordCustomerAccountEnquiryCreditLine[] List of lines in the credit
		*/
        public $lines = array();
		
		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;
		
		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
	}
?>