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
	* Ecommerce Standards record that contains the data of a single Payment that can be queried for a customer account. A payment record contains information about a positive monetary amount paid to the customer account's balance. The account enquiry aspect denotes that the record may be queried in real time and contain additional information associated with the record.
	*/
	class ESDRecordCustomerAccountEnquiryPayment   
	{
		/**
		* @var string Key that allows the customer account invoice record to be uniquely identified and linked to.
		*/
		public $keyQuoteID = "";
		/**
		* @var string ID that allows the quote to be identified with. May or may not be unique.
		*/
		public $quoteID = "";
		/**
		* @var string Number that is associated to the quote. This number can be used for referencing purposes.
		*/
		public $quoteNumber = "";
		/**
		* @var string Key of the customer account record assigned to the quote.
		*/
		public $keyCustomerAccountID = "";
		/**
		* @var string Code of the customer account assigned to the quote.
		*/
		public $customerAccountCode = "";
		/**
		* @var int Date that the quote record was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $creationDate = 0;
		/**
		* @var int Date set to the quote. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $quoteDate = 0;
		/**
		* @var int Date that the quote expires is no longer valid. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $expiryDate = 0;
		/**
		* @var int Date that the quoted goods/services are expected to be delivered. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $expectedDeliveryDate = 0;
		/**
		* @var string Key of the location record associated to the quote.
		*/
		public $keyLocationID = "";
		/**
		* @var string Code of the location associated to the quote.
		*/
		public $locationCode = "";
		/**
		* @var string Label of the location associated to the quote.
		*/
		public $locationLabel = "";
		/**
		* @var string The type of location associated to the quote. Set it to one of the LOCATION_TYPE constants in the ESDocumentConstants class
		*/
		public $locationType = "";
		/**
		* @var string Key of an entity that is linked to the quote as a reference. A Reference could be an ID of a record such as a quote or invoice
		*/
		public $referenceKeyID = "";
		/**
		* @var string Type of entity that is linked to the quote as a reference.  A Reference could be a record such as a quote or invoice
		*/
		public $referenceType = "";
		/**
		* @var string Number that provides a reference to the quote.
		*/
		public $referenceNumber = "";
		/**
		* @var string Text, number or code that the customer uses to identify the quote record. This could be the customer's purchase order order, supplier invoice code, or an other identifier
		*/
		public $customerReference = "";
		/**
		* @var string Code of the sales representative associated to the quote.
		*/
		public $salesRepCode = "";
		/**
		* @var string Name of the sales representative associated to the quote.
		*/
		public $salesRepName = "";
		/**
		* @var string Name of the contact person at the address that the quoted goods are to be delivered to
		*/
		public $deliveryContact = "";
		/**
		* @var string Name of the organisation that the quoted goods are to be delivered to
		*/
		public $deliveryOrgName = "";
		/**
		* @var string First address field that the quote is being delivered to.
		*/
		public $deliveryAddress1 = "";
		/**
		* @var string Second address field that the quote is being delivered to.
		*/
		public $deliveryAddress2 = "";
		/**
		* @var string Third address field that the quote is being delivered to.
		*/
		public $deliveryAddress3 = "";
		/**
		* @var string Name of the state/province/region that the quote is being delivered to.
		*/
		public $deliveryStateProvince = "";
		/**
		* @var string Name of the country that the quote is being delivered to.
		*/
		public $deliveryCountry = "";
		/**
		* @var string Code of the country at the address that the quoted goods are to be delivered to as a 2 digit code set by ISO standards.
		*/
		public $deliveryCountryCodeISO2 = "";
		/**
		* @var string Code of the country at the address that the quoted goods are to be delivered to as a 3 digit code set by ISO standards.
		*/
		public $deliveryCountryCodeISO3 = "";
		/**
		* @var string Post code of the address that the quoted goods are to be delivered to
		*/
		public $deliveryPostcode = "";
		/**
		* @var string Code of the purchase order to include in the delivery information, that is contains the code of the purchase order associated to the delivery of the goods
		*/
		public $deliveryPurchaseOrderCode = "";
		/**
		* @var string Name of the contact person at the address associated with the billing of the quote.
		*/
		public $billingContact = "";
		/**
		* @var string Name of the organisation that the quoted goods are to be billed to
		*/
		public $billingOrgName = "";
		/**
		* @var string First address field of the billing address set for the quote.
		*/
		public $billingAddress1 = "";
		/**
		* @var string Second address field of the billing address set for the quote.
		*/
		public $billingAddress2 = "";
		/**
		* @var string Third address field of the billing address set for the quote.
		*/
		public $billingAddress3 = "";
		/**
		* @var string Name of the region/state/province that the quote is being billed to.
		*/
		public $billingStateProvince = "";
		/**
		* @var string Name of the country that the quote is being billed to.
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
		* @var string Tax number displayed on the quote
		*/
		public $taxNumber = "";
		/**
		* @var string Label of the taxes assigned to the quote's total
		*/
		public $taxLabel = "";
		/**
		* @var double Percentage amount of tax that the applied to the quote's total
		*/
		public $taxRate = 0.0;
		/**
		* @var double Total monetary amount of the quote excluding taxes
		*/
		public $totalExTax = 0.0;
		/**
		* @var double Total monetary amount of the quote including taxes
		*/
		public $totalIncTax = 0.0;
		/**
		* @var double Total monetary amount of tax applied to the quote's total
		*/
		public $totalTax = 0.0;
		/**
		* @var double Total monetary amount of freight inclusive of tax applied to the quote's total
		*/
		public $totalFreightIncTax = 0.0;
		/**
		* @var double Total monetary amount of freight excluding tax applied to the quote's total
		*/
		public $totalFreightExTax = 0.0;
		/**
		* @var double Total monetary amount of extra charges inclusive of tax applied to the quote's total
		*/
		public $totalExtraChargesIncTax = 0.0;
		/**
		* @var double Total monetary amount of extra charges exclusive of tax applied to the quote's total
		*/
		public $totalExtraChargesExTax = 0.0;
		/**
		* @var double Total monetary amount of discounts inclusive of tax discounted off the quote's total
		*/
		public $totalDiscountsIncTax = 0.0;
		/**
		* @var double Total monetary amount of discounts exclusive of tax discounted off the quote's total
		*/
		public $totalDiscountsExTax = 0.0;
		/**
		* @var double Total monetary amount of levies inclusive of tax applied to the quote's total
		*/
		public $totalLeviesIncTax = 0.0;
		/**
		* @var double Total monetary amount of levies exclusive of tax applied to the quote's total
		*/
		public $totalLeviesExTax = 0.0;
		/**
		* @var double Total monetary amount paid for the quote
		*/
		public $totalPaid = 0.0;
		/**
		* @var double Total monetary amount still to be paid for the quote
		*/
		public $balance = 0.0;
		/**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored in the quote with
		*/
		public $currencyCode = "";
		/**
		* @var double Total quantity across all the quote lines
		*/
		public $totalQuantity = 0.0;
		/**
		* @var string Text that describes any information associated with the quote
		*/
		public $description = "";
		/**
		* @var string Language that all text is described in. Set it to one of the LANG constants in the ESDocumentConstants class
		*/
		public $language = "";
		/**
		* @var string Text that contains additional comments that have been made for the quote
		*/
		public $comment = "";
		/**
		* @var string Code of the freight carrier who is quoted to deliver the requested goods
		*/
		public $freightCarrierCode = "";
		/**
		* @var string Name of the freight carrier who is quoted to deliver the requested goods
		*/
		public $freightCarrierName = "";
		/**
		* @var string Reference code to the system used to process the freight
		*/
		public $freightSystemRefCode = "";
		/**
		* @var string Consignment code issued by the freight carrier who is quoted to deliver the requested goods
		*/
		public $freightCarrierConsignCode = "";
		/**
		* @var string Code to track the freight carrier who is quoted to deliver the requested goods
		*/
		public $freightCarrierTrackingCode = "";
		/**
		* @var string Code of the service provided by the freight carrier who is quoted to deliver the requested goods
		*/
		public $freightCarrierServiceCode = "";
		/**
		* @var string Code of the account in the freight carrier's system
		*/
		public $freightCarrierAccountCode = "";
		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;
		
		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
		/**
		* @var ESDRecordCustomerAccountEnquiryQuoteLine[] List of lines in the quote
		*/
		public $lines = array();
	}
?>
