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
	* Ecommerce Standards Record that holds data for a single invoice raised against a customer. A customer invoice specifies goods and/or services that have been purchased from a customer, and the monetary amount that the customer owes.
	*/
	class ESDRecordCustomerInvoice
	{
		/**
		* @var ESDRecordCustomerInvoiceLine[] List of lines  to the invoice
		*/
		public $lines = array();

		/**
		* @var ESDRecordInvoiceSurcharge[] string List of surcharge lines  to the invoice
		*/
		public $surcharges = array();

		/**
		* @var ESDRecordInvoicePayment[] List of payment lines  to the invoice
		*/
		public $payments = array();

		/**
		* @var string Key that allows the customer invoice record to be uniquely identified and linked to.
		*/
		public $keyCustomerInvoiceID = "";

		/**
		* @var string Code of the customer invoice, may or may not be a unique identifier, the code may be made up of the customer invoice number and any prefix or suffix text
		*/
		public $customerInvoiceCode = "";

		/**
		* @var string Number of the customer invoice, may or may not be a unique identifier
		*/
		public $customerInvoiceNumber = "";

		/**
		* @var string Key of the customer account record that is assigned to the invoice. The customer indicates the the entity supplying the invoice.
		*/
		public $keyCustomerAccountID = "";

		/**
		* @var string Code of the customer account, may or not be a unique identifier of the account. human known identifier of the customer account.
		*/
		public $customerAccountCode = "";

		/**
		* @var string Name of the customer account. Could be an organisation name, person's name, or an other label.
		*/
		public $customerAccountName = "";
		
		/**
		* @var string Key of the sales order record that allows the customer invoice record to be linked to an associated sales order originally raised
		*/
		public $keySalesOrderID = "";

		/**
		* @var string Code of the sales order record that may be linked to the customer invoice
		*/
		public $salesOrderCode = "";

		/**
		* @var string Number of the sales order record that may be linked to the customer invoice
		*/
		public $salesOrderNumber = "";

		/**
		* @var int Date that the invoice was sent
		*/
		public $sentDate = 0;

		/**
		* @var int Date that the invoice was processed. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $processedDate = 0;

		/**
		* @var int Date that the invoiced goods were sent out. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $dispatchedDate = 0;

		/**
		* @var int Date that the invoiced goods were received. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $receivedDate = 0;

		/**
		* @var int Date that the customer invoice was last modified. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $modifiedDate = 0;

		/**
		* @var int Date that the invoice was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $createdDate = 0;
		
		/**
		* @var int Date that the invoice is due to be paid. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $paymentDueDate = 0;
		
		/**
		* @var int Date that the invoice was fully paid. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $fullyPaidDate = 0;

		/**
		* @var string ID of the user in the associated Ecommerce system where the invoice was created.
		*/
		public $eCommerceUserID = "";

		/**
		* @var string Name of the user in the associated Ecommerce system where the order was created. Ideally this is  to a label of the user, and not the credentials used for a user to login (since that could be a security issue passing around such information).
		*/
		public $eCommerceUserName = "";

		/**
		* @var string ID of the associated Ecommerce system where the invoice was created. Ideally each system s its own unique identifier, formatted such as ORG_NAME.SYSTEM_NAME
		*/
		public $eCommerceSystemID = "";

		/**
		* @var string Key of the sales representative record linked to the customer invoice. May indicate the person, organisation or other entity who raised the invoice, or sold the goods/services for the supplier
		*/
		public $keySalesRepID = "";

		/**
		* @var string Code of the sales representative
		*/
		public $salesRepCode = "";

		/**
		* @var string Name of the sales representative. It could be the name of the organisation, person, or other entity who raised in the invoice, or sold the goods/services  for the supplier
		*/
		public $salesRepName = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes If 'Y' then indicates that the sales representative is an individual person, otherwise is a organisation or other entity.
		*/
		public $salesRepIndividual = "";

		/**
		* @var string Type of entity purchasing goods/services in the invoice. Set it to one of the constants in the ESDocumentConstants class prefixed with ENTITY_TYPE_
		*/
		public $customerEntity = "";

		/**
		* @var string Name of the person who is the customer of the invoice.
		*/
		public $customerPersonName = "";

		/**
		* @var string Name of the organisation who is the customer of the invoice.
		*/
		public $customerOrgName = "";

		/**
		* @var string[] Authority numbers of the customer of the invoice.
		*/
		public $customerAuthorityNumbers = array();

		/**
		* @var string[] list of Labels  for the customer authority numbers. Ensure that the array length is the same as the authorityNumbers property, or left empty
		*/
		public $customerAuthorityNumberLabels = array();

		/**
		* @var int[] list of authority number types matching the customer authority numbers. If , must use the ESDocumentConstants that are prefixed with "AUTHORITY_NUM_". Ensure that the array length is the same as the authorityNumbers property, or left empty.
		*/
		public $customerAuthorityNumberTypes = array();

		/**
		* @var string Currency that all monetary amounts of the invoice are made with. This currency code must be the 3 digit ISO currency code.
		*/
		public $currencyISOCode = "";

		/**
		* @var string Status indicating how the invoice has been paid for. Set it to one of the constants in the class prefixed with PAYMENT_STATUS_
		*/
		public $paymentStatus = "";

		/**
		* @var string Method on how the invoice is being paid for. The field must be one of the class's constants prefixed by PAYMENT_METHOD_
		*/
		public $paymentMethod = "";

		/**
		* @var string Code the proprietary system that is used as the payment method for the invoice.
		*/
		public $paymentProprietaryCode = "";

		/**
		* @var string Number that contains a reference to the payment applied against the invoice
		*/
		public $paymentReceipt = "";

		/**
		* @var double Monetary amount paid for the invoice.
		*/
		public $paymentAmount = 0.0;

		/**
		* @var string Key of the payment type record that is associated to the payment. The payment type record indicates how the payment was made for the invoice.
		*/
		public $keyPaymentTypeID = "";

		/**
		* @var string Number of the customer's purchase order that may be associated to the customer invoice. This may be used for referencing purposes.
		*/
		public $purchaseOrderNumber = "";
		
		/**
		* @var string Code of the customer's purchase order that may be associated to the customer invoice. The code may contain the purchase order number and any prefix or suffix text.
		*/
		public $purchaseOrderCode = "";

		/**
		* @var string ID of the system that the purchasing entity stores its data within.
		*/
		public $purchaserSystemID = "";

		/**
		* @var string Name of the system that the purchasing entity stores its data within.
		*/
		public $purchaserSystemName = "";

		/**
		* @var string Code of the system that the purchasing entity stores its data within.
		*/
		public $purchaserSystemCode = "";

		/**
		* @var string ID of the system that the selling entity stores its data within.
		*/
		public $sellerSystemID = "";

		/**
		* @var string Name of the system that the selling entity stores its data within.
		*/
		public $sellerSystemName = "";

		/**
		* @var string Code of the system that the selling entity stores its data within.
		*/
		public $sellerSystemCode = "";

		/**
		* @var string Description of the address that the invoiced goods are being delivered to
		*/
		public $deliveryDescription = "";

		/**
		* @var string Name of the organisation at the address that the invoiced goods are being delivered to
		*/
		public $deliveryOrgName = "";

		/**
		* @var string Name of the contact person at the address that the invoiced goods are being delivered to
		*/
		public $deliveryContact = "";

		/**
		* @var string Email of the contact person at the address that the invoiced goods are being delivered to
		*/
		public $deliveryEmail = "";

		/**
		* @var string Phone number at the address that the invoiced goods are being delivered to
		*/
		public $deliveryPhone = "";

		/**
		* @var string Fax number at the address that the invoiced goods are being delivered to
		*/
		public $deliveryFax = "";

		/**
		* @var string First delivery address field that the invoiced goods are being delivered to
		*/
		public $deliveryAddress1 = "";

		/**
		* @var string Second delivery address field that the invoiced goods are being delivered to
		*/
		public $deliveryAddress2 = "";

		/**
		* @var string Third delivery address field that the invoiced goods are being delivered to
		*/
		public $deliveryAddress3 = "";

		/**
		* @var string Post code of the address that the invoiced goods are being delivered to
		*/
		public $deliveryPostcode = "";

		/**
		* @var string Name of the region/state/province at the address that the invoiced goods are being delivered to
		*/
		public $deliveryRegionName = "";

		/**
		* @var string Name of the country at the address that the invoiced goods are being delivered to
		*/
		public $deliveryCountryName = "";

		/**
		* @var string Code of the country at the address that the invoiced goods are being delivered to as a 2 digit code  by ISO standards.
		*/
		public $deliveryCountryCodeISO2 = "";

		/**
		* @var string Code of the country at the address that the invoiced goods are being delivered to as a 3 digit code  by ISO standards.
		*/
		public $deliveryCountryCodeISO3 = "";

		/**
		* @var string Code of the purchase order to include in the delivery information, that is contains the code of the purchase order associated to the delivery of the goods
		*/
		public $deliveryPurchaseOrderCode = "";

		/**
		* @var string Description of the address associated with the billing of the invoice.
		*/
		public $billingDescription = "";

		/**
		* @var string Name of the contact person at the address associated with the billing of the invoiced.
		*/
		public $billingContact = "";

		/**
		* @var string Name of the organisation that the invoiced goods are being billing to
		*/
		public $billingOrgName = "";

		/**
		* @var string Email address at the address associated with the billing of the invoice.
		*/
		public $billingEmail = "";

		/**
		* @var string Phone number at the address associated with the billing of the invoice.
		*/
		public $billingPhone = "";

		/**
		* @var string Fax number at the address associated with the billing of the invoice.
		*/
		public $billingFax = "";

		/**
		* @var string First address field associated with the billing of the invoice.
		*/
		public $billingAddress1 = "";

		/**
		* @var string Second address field associated with the billing of the invoice.
		*/
		public $billingAddress2 = "";

		/**
		* @var string Third address field associated with the billing of the invoice.
		*/
		public $billingAddress3 = "";

		/**
		* @var string Postcode of the address associated with the billing of the invoice.
		*/
		public $billingPostcode = "";

		/**
		* @var string Name of the region/state/province of the address associated with the billing of the invoice.
		*/
		public $billingRegionName = "";

		/**
		* @var string Name of the country of the address associated with the billing of the invoice.
		*/
		public $billingCountryName = "";

		/**
		* @var string Code of the country of the address associated with the billing of the invoice as a two digit code  by the ISO standards.
		*/
		public $billingCountryCodeISO2 = "";

		/**
		* @var string Code of the country of the address associated with the billing of the invoice as a three digit code  by the ISO standards.
		*/
		public $billingCountryCodeISO3 = "";

		/**
		* @var string Email address  for the invoice.
		*/
		public $email = "";

		/**
		* @var int Total number of lines in the invoice.
		*/
		public $totalLines = 0;

		/**
		* @var int Total number of product lines in the invoice
		*/
		public $totalProducts = 0;

		/**
		* @var int Total number of labour lines in the invoice
		*/
		public $totalLabour = 0;


		/**
		* @var int Total number of download lines in the invoice
		*/
		public $totalDownloads = 0;

		/**
		* @var double Total monetary price of the invoice exclusive of tax
		*/
		public $totalPriceExTax = 0.0;

		/**
		* @var double Total monetary price of the invoice inclusive of tax
		*/
		public $totalPriceIncTax = 0.0;

		/**
		* @var double Total monetary amount of taxes applied to the invoice
		*/
		public $totalTax = 0.0;

		/**
		* @var double Total volume of the invoiced goods.
		*/
		public $totalVolume = 0.0;

		/**
		* @var double Total weight of the invoiced goods
		*/
		public $totalWeight = 0.0;

		/**
		* @var int Total number of surcharges applied to the invoice
		*/
		public $totalSurchargeItems = 0;

		/**
		* @var double Total monetary amount of surcharges applied to the invoice exclusive of taxes
		*/
		public $totalSurchargeExTax = 0.0;

		/**
		* @var double Total monetary amount of surcharges applied to the invoice inclusive of taxes
		*/
		public $totalSurchargeIncTax = 0.0;

		/**
		* @var double Total monetary amount of taxes applied to surcharges in the invoice
		*/
		public $totalSurchargeTax = 0.0;

		/**
		* @var double Total monetary amount of the invoice before discounts were applied, exclusive of taxes. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedExTax = 0.0;

		/**
		* @var double Total monetary amount of the invoice before discounts were applied, inclusive of taxes. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedIncTax = 0.0;

		/**
		* @var double Total monetary amount of taxes applied to the invoice before discounts were applied. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedTax = 0.0;

		/**
		* @var string Text describing instructions on how to handle the invoice.
		*/
		public $instructions = "";

		/**
		* @var string Code of the freight carrier delivering the invoiced goods
		*/
		public $freightCarrierCode = "";

		/**
		* @var string Name of the freight carrier delivering the invoiced goods
		*/
		public $freightCarrierName = "";

		/**
		* @var string Reference code to the system used to process the freight invoice
		*/
		public $freightSystemRefCode = "";

		/**
		* @var string Consignment code issued by the freight carrier to delivery the invoiced goods
		*/
		public $freightCarrierConsignCode = "";

		/**
		* @var string Code to track the freight carrier delivering the invoiced goods
		*/
		public $freightCarrierTrackingCode = "";

		/**
		* @var string Code of the service provided by the freight carrier to deliver the invoiced goods
		*/
		public $freightCarrierServiceCode = "";

		/**
		* @var string Code of the account in the freight carrier's system
		*/
		public $freightCarrierAccountCode = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes If 'Y' then indicates that the is being delivered to a different entity from the customer assigned to the invoice.
		*/
		public $isDropship = "";

		/**
		* @var string key of the location where the products for the invoice can be found. The key stores the unique identifier of the location. The location may be a warehouse, site, office or other location.
		*/
		public $keyLocationID = "";

		/**
		* @var string Code of the location
		*/
		public $locationCode = "";

		/**
		* @var string Name of the location
		*/
		public $locationName = "";
		
		/**
		* @var string Either 'N'-No or 'Y'-Yes If 'Y' then indicates that the invoiced goods are to be obtained across multiple locations.
		*/
		public $isMultiLocation = "";
		
		/**
		* @var string key of the external location where the products for the invoice can be found. This external location may be the location where goods are being delivered to or held at.
		*/
		public $externalKeyLocationID = "";
		
		/**
		* @var string Code of the external location. This external location may be the location where goods are being delivered to or held at.
		*/
		public $externalLocationCode = "";
		
		/**
		* @var string Name of the external location. This external location may be the location where goods are being delivered to or held at.
		*/
		public $externalLocationName = "";

		/**
		* @var string Method that the invoice is being shipped by
		*/
		public $shippingMethod = "";

		/**
		* @var double Percentage rate discounted off the invoice monetary total.
		*/
		public $accountDiscountRate = 0.0;

		/**
		* @var string Territory associated with the customer account
		*/
		public $accountTerritory = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes If 'Y' then indicates that all products for the invoice have been delivered.
		*/
		public $isProductsDelivered = "";

		/**
		* @var string Code of the unit of measure for the volume. Set it to a constant prefixed with UNIT_MEASURE_VOLUME_ in the ESDocumentConstants class
		*/
		public $totalVolumeMeasureCode = "";

		/**
		* @var string Code of the unit of measure for the weight. Set it to a constant prefixed with UNIT_MEASURE_MASS_ in the ESDocumentConstants class
		*/
		public $totalWeightMeasureCode = "";

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
		* constructor
		*/
		public function __construct()
		{
		}

		/**
		* sets default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($lines == null)
			{
				$this->lines = array();
			}
			
			if ($surcharges == null)
			{
				$this->surcharges = array();
			}
			
			if ($payments == null)
			{
				$this->payments = array();
			}
			
			if ($keyCustomerInvoiceID== null)
			{
				$this->keyCustomerInvoiceID = "";
			}
			
			if ($customerInvoiceCode== null)
			{
				$this->customerInvoiceCode = "";
			}
			
			if ($customerInvoiceNumber== null)
			{
				$this->customerInvoiceNumber = "";
			}

			if ($keySalesOrderID== null)
			{
				$this->keySalesOrderID = "";
			}
			
			if ($salesOrderCode == null)
			{
				$this->salesOrderCode = "";
			}
			
			if ($purchaseOrderNumber == null)
			{
				$this->purchaseOrderNumber = "";
			}
			
			if ($salesRepIndividual == null)
			{
				$this->salesRepIndividual = "";
			}
			
			if ($currencyISOCode == null)
			{
				$this->currencyISOCode = "";
			}
			
			if ($customerAuthorityNumbers == null)
			{
				$this->customerAuthorityNumbers = array();
			}
			
			if ($keyCustomerAccountID == null)
			{
				$this->keyCustomerAccountID = "";
			}
			
			if ($customerAccountCode == null)
			{
				$this->customerAccountCode = "";
			}
			
			if ($customerAccountName == null)
			{
				$this->customerAccountName = "";
			}
			
			if ($keySalesRepID == null)
			{
				$this->keySalesRepID = "";
			}
			
			if ($salesRepCode == null)
			{
				$this->salesRepCode = "";
			}
			
			if ($salesRepName == null)
			{
				$this->salesRepName = "";
			}
			
			if ($purchaserSystemID == null)
			{
				$this->purchaserSystemID = "";
			}
			
			if ($purchaserSystemName == null)
			{
				$this->purchaserSystemName = "";
			}
			
			if ($purchaserSystemCode == null)
			{
				$this->purchaserSystemCode = "";
			}
			
			if ($sellerSystemID == null)
			{
				$this->sellerSystemID = "";
			}
			
			if ($sellerSystemName == null)
			{
				$this->sellerSystemName = "";
			}
			
			if ($sellerSystemCode == null)
			{
				$this->sellerSystemCode = "";
			}
			
			if ($eCommerceUserID == null)
			{
				$this->eCommerceUserID = "";
			}
			
			if ($eCommerceUserName == null)
			{
				$this->eCommerceUserName = "";
			}
			
			if ($eCommerceSystemID == null)
			{
				$this->eCommerceSystemID = "";
			}
			
			if ($customerEntity == null)
			{
				$this->customerEntity = "";
			}
			
			if ($customerPersonName == null)
			{
				$this->customerPersonName = "";
			}
			
			if ($customerOrgName == null)
			{
				$this->customerOrgName = "";
			}
			
			if ($customerAuthorityNumbers == null)
			{
				$this->customerAuthorityNumbers = array();
			}
			
			if ($customerAuthorityNumberLabels == null)
			{
				$this->customerAuthorityNumberLabels = array();
			}
			
			if ($customerAuthorityNumberTypes == null)
			{
				$this->customerAuthorityNumberTypes = array();
			}
			
			if ($paymentStatus == null)
			{
				$this->paymentStatus = ESDocumentConstants::PAYMENT_STATUS_UNPAID;
			}
			
			if ($paymentMethod == null)
			{
				$this->paymentMethod = ESDocumentConstants::PAYMENT_METHOD_UNPAID;
			}
			
			if ($paymentProprietaryCode == null)
			{
				$this->paymentProprietaryCode = "";
			}
			
			if ($paymentReceipt == null)
			{
				$this->paymentReceipt = "";
			}
			
			if ($instructions == null)
			{
				$this->instructions = "";
			}
			
			if ($salesOrderNumber == null)
			{
				$this->salesOrderNumber = "";
			}
			
			if ($keyLocationID == null)
			{
				$this->keyLocationID = "";
			}
			
			if ($locationCode == null)
			{
				$this->locationCode = "";
			}
			
			if ($locationName == null)
			{
				$this->locationName = "";
			}
			
			if ($externalKeyLocationID == null)
			{
				$this->externalKeyLocationID = "";
			}

			if ($externalLocationCode == null)
			{
				$this->externalLocationCode = "";
			}

			if ($externalLocationName == null)
			{
				$this->externalLocationName = "";
			}
			
			if ($freightCarrierCode == null)
			{
				$this->freightCarrierCode = "";
			}
			
			if ($freightCarrierName == null)
			{
				$this->freightCarrierName = "";
			}
			
			if ($freightSystemRefCode == null)
			{
				$this->freightSystemRefCode = "";
			}
			
			if ($freightCarrierConsignCode == null)
			{
				$this->freightCarrierConsignCode = "";
			}
			
			if ($freightCarrierTrackingCode == null)
			{
				$this->freightCarrierTrackingCode = "";
			}
			
			if ($freightCarrierServiceCode == null)
			{
				$this->freightCarrierServiceCode = "";
			}
			
			if ($freightCarrierAccountCode == null)
			{
				$this->freightCarrierAccountCode = "";
			}
			
			if ($deliveryDescription == null)
			{
				$this->deliveryDescription = "";
			}
			
			if ($deliveryOrgName == null)
			{
				$this->deliveryOrgName = "";
			}
			
			if ($deliveryContact == null)
			{
				$this->deliveryContact = "";
			}
			
			if ($deliveryEmail == null)
			{
				$this->deliveryEmail = "";
			}
			
			if ($deliveryPhone == null)
			{
				$this->deliveryPhone = "";
			}
			
			if ($deliveryFax == null)
			{
				$this->deliveryFax = "";
			}
			
			if ($email == null)
			{
				$this->email = "";
			}
			
			if ($deliveryAddress1 == null)
			{
				$this->deliveryAddress1 = "";
			}
			
			if ($deliveryAddress2 == null)
			{
				$this->deliveryAddress2 = "";
			}
			
			if ($deliveryAddress3 == null)
			{
				$this->deliveryAddress3 = "";
			}
			
			if ($deliveryPostcode == null)
			{
				$this->deliveryPostcode = "";
			}
			
			if ($deliveryRegionName == null)
			{
				$this->deliveryRegionName = "";
			}
			
			if ($deliveryCountryName == null)
			{
				$this->deliveryCountryName = "";
			}
			
			if ($deliveryPostcode == null)
			{
				$this->deliveryPostcode = "";
			}
			
			if ($deliveryCountryCodeISO2 == null)
			{
				$this->deliveryCountryCodeISO2 = "";
			}
			
			if ($deliveryCountryCodeISO3 == null)
			{
				$this->deliveryCountryCodeISO3 = "";
			}

			if ($deliveryPurchaseOrderCode == null)
			{
				$this->deliveryPurchaseOrderCode = "";
			}
			
			if ($billingDescription == null)
			{
				$this->billingDescription = "";
			}
			
			if ($billingOrgName == null)
			{
				$this->billingOrgName = "";
			}
			
			if ($billingContact == null)
			{
				$this->billingContact = "";
			}
			
			if ($billingEmail == null)
			{
				$this->billingEmail = "";
			}
			
			if ($billingPhone == null)
			{
				$this->billingPhone = "";
			}
			
			if ($billingFax == null)
			{
				$this->billingFax = "";
			}
			
			if ($billingAddress1 == null)
			{
				$this->billingAddress1 = "";
			}
			
			if ($billingAddress2 == null)
			{
				$this->billingAddress2 = "";
			}
			
			if ($billingAddress3 == null)
			{
				$this->billingAddress3 = "";
			}
			
			if ($billingPostcode == null)
			{
				$this->billingPostcode = "";
			}
			
			if ($billingRegionName == null)
			{
				$this->billingRegionName = "";
			}
			
			if ($billingCountryName == null)
			{
				$this->billingCountryName = "";
			}
			
			if ($billingCountryCodeISO2 == null)
			{
				$this->billingCountryCodeISO2 = "";
			}
			
			if ($billingCountryCodeISO3 == null)
			{
				$this->billingCountryCodeISO3 = "";
			}
			
			if ($billingCountryCodeISO3 == null)
			{
				$this->billingCountryCodeISO3 = "";
			}
			
			if ($totalVolumeMeasureCode == null)
			{
				$this->totalVolumeMeasureCode = "";
			}
			
			if ($totalWeightMeasureCode == null)
			{
				$this->totalWeightMeasureCode = "";
			}
			
			if ($isProductsDelivered == null)
			{
				$this->isProductsDelivered = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($isDropship == null)
			{
				$this->isDropship = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($isMultiLocation== null)
			{
				$this->isMultiLocation= ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($shippingMethod== null)
			{
				$this->shippingMethod = "";
			}
			
			if ($accountTerritory== null)
			{
				$this->accountTerritory = "";
			}
			
			if ($isProductsDelivered== null)
			{
				$this->isProductsDelivered = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($internalID== null)
			{
				$this->internalID = "";
			}        
		}
	}
?>