<?php
	/**
	* Copyright (C) Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single sales order. A sales order indicates an intent of a customer account to make a purchase.
	*/
	class ESDRecordOrderSale   
	{
		/**
		* UNPAID - No payment was received as yet
		*/
		const PAYMENT_METHOD_UNPAID = "UNPAID";
		/**
		* CREDITCARD - A payment was made with a credit card
		*/
		const PAYMENT_METHOD_CREDIT = "CREDITCARD";
		/**
		* COD - Payment will be made with cash when the goods are delivered to the delivery location
		*/
		const PAYMENT_METHOD_CASHONDELIVERY = "COD";
		/**
		* DIRECTDEPOSIT - Payment has been made with a direct bank transfer
		*/
		const PAYMENT_METHOD_DIRECTDEPOSIT = "DIRECTDEPOSIT";
		/**
		* QUOTE - No payment was made as a quote was only required
		*/
		const PAYMENT_METHOD_QUOTE = "QUOTE";
		/**
		* NONE - No payment was made or needed
		*/
		const PAYMENT_METHOD_NONE = "NONE";
		/**
		* PROPRIETARY - A payment was made using a proprietary payment system. PayPal could be one example of this.
		*/
		const PAYMENT_METHOD_PROPRIETARY = "PROPRIETARY";
		/**
		* ACCOUNT - A payment will be assigned to a customer account and paid based on the agreed payment terms
		*/
		const PAYMENT_METHOD_ACCOUNT = "ACCOUNT";
		/**
		* UNPAID - The order has not been paid for
		*/
		const PAYMENT_STATUS_UNPAID = "UNPAID";
		/**
		* PENDING - A payment is currently in the process of being paid for, or is waiting on a process to complete
		*/
		const PAYMENT_STATUS_PENDING = "PENDING";
		/**
		* PAID - The order has been paid
		*/
		const PAYMENT_STATUS_PAID = "PAID";
		/**
		* DECLINED - A payment failed when trying to be paid
		*/
		const PAYMENT_STATUS_DECLINED = "DECLINED";
		/**
		* NONREQUIRED - No payment is required to pay for the order
		*/
		const PAYMENT_STATUS_NONREQUIRED = "NONREQUIRED";
		
		/** 
		* @var ESDRecordOrderSaleLine[] ArrayList of lines added to the order
		*/
		public $lines = array();

		/** 
		* @var ESDRecordOrderSurcharge[] ArrayList of surcharge lines added to the order
		*/
		public $surcharges = array();

		/** 
		* @var ESDRecordOrderPayment[] ArrayList of payments added to to the order
		*/
		public $payments = array();

		/**
		* @var string Key that allows the sale order record to be uniquely identified and linked to.
		*/
		public $keySalesOrderID = "";

		/**
		* @var string Code of the sales order, may or may not be a unqiue indentifier
		*/
		public $salesOrderCode = "";

		/**
		* @var string Number of the sales order, may or may not be a unique identifier
		*/
		public $salesOrderNumber = "";

		/**
		* @var string Key of the customer account record that is assigned to the order. The customer indicates the purchaser of the order.
		*/
		public $keyCustomerAccountID = "";

		/**
		* @var string Code of the customer account, may or not be a unique identifier of the account.
		*/
		public $customerAccountCode = "";

		/**
		* @var string Name of the customer account
		*/
		public $customerAccountName = "";

		/**
		* @var int long Date that the order was sent
		*/
		public $sentDate = 0;

		/**
		* @var int Date that the order was processed. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $processedDate = 0;

		/**
		* @var int Date that the order's goods were sent out. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $dispatchedDate = 0;

		/**
		* @var int Date that the order's goods were received by the purchaser. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $receivedDate = 0;

		/**
		* @var int Date that the order was last modified. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $modifiedDate = 0;

		/**
		* @var int Date that the order was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $createdDate = 0;

		/**
		* @var string ID of the user in the associated Ecommerce system where the order was created.
		*/
		public $eCommerceUserID = "";

		/**
		* @var string Name of the user in the associated Ecommerce system where the order was created. Ideally this is  to a label of the user, and not the credentials used for a user to login (since that could be a security issue passing around such information).
		*/
		public $eCommerceUserName = "";

		/**
		* @var string ID of the associated Ecommerce system where the order was created. Ideally each system s its own unique identifier, formatted such as ORG_NAME.SYSTEM_NAME
		*/
		public $eCommerceSystemID = "";

		/**
		* @var string Key of the sales representative record linked to the order.
		*/
		public $keySalesRepID = "";

		/**
		* @var string Code of the sales representative.
		*/
		public $salesRepCode = "";

		/**
		* @var string Name of the sales representative.
		*/
		public $salesRepName = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes If 'Y' then indicates that the sales representative is an individual person.
		*/
		public $salesRepIndividual = "";

		/**
		* @var string Customer entity buying the order. Set it to one of the constants in the ESDocumentConstants class prefixed with ENTITY_TYPE_
		*/
		public $customerEntity = "";

		/**
		* @var string Name of the person who is the customer of the order.
		*/
		public $customerPersonName = "";

		/**
		* @var string Name of the organisation who is the customer of the order.
		*/
		public $customerOrgName = "";

		/**
		* @var string[] Authority numbers of the customer of the order.
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
		* @var string Currency that all monetary amounts of the order are  with. This currency code must be the 3 digit ISO currency code.
		*/
		public $currencyISOCode = "";

		/**
		* @var string Status indicating how the order has been paid for. Set it to one of the constants in the class prefixed with PAYMENT_STATUS_
		*/
		public $paymentStatus = "";

		/**
		* @var string Method on how the order is being paid for. The field must be  to one of the class's constants prefixed by PAYMENT_METHOD_
		*/
		public $paymentMethod = "";

		/**
		* @var string Code the proprietary system that is used as the payment method for the order.
		*/
		public $paymentProprietaryCode = "";

		/**
		* @var string Number that contains a reference to the payment applied against the order
		*/
		public $paymentReceipt = "";

		/**
		* @var double Monetary amount already paid for the order.
		*/
		public $paymentAmount = 0.0;

		/**
		* @var string Key of the payment type record that is associated to the payment. The payment type record indicates how the payment was made for the order.
		*/
		public $keyPaymentTypeID = "";

		/**
		* @var string Number of the purchase order that may be associated to the sales order. This may be used for referencing purposes.
		*/
		public $purchaseOrderNumber = "";

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
		* @var string[] ArrayList of the invoice numbers linked to this sales order.
		*/
		public $invoiceNumbers = array();
		/**
		* @var string Description of the address that the ordered goods are being delivered to
		*/
		public $deliveryDescription = "";

		/**
		* @var string Name of the contact person at the address that the ordered goods are being delivered to
		*/
		public $deliveryContact = "";

		/**
		* @var string Name of the organisation that the orders goods are being delivered to
		*/
		public $deliveryOrgName = "";

		/**
		* @var string Email of the contact person at the address that the ordered goods are being delivered to
		*/
		public $deliveryEmail = "";

		/**
		* @var string Phone number at the address that the ordered goods are being delivered to
		*/
		public $deliveryPhone = "";

		/**
		* @var string Fax number at the address that the ordered goods are being delivered to
		*/
		public $deliveryFax = "";

		/**
		* @var string First delivery address field that the ordered goods are being delivered to
		*/
		public $deliveryAddress1 = "";

		/**
		* @var string Second delivery address field that the ordered goods are being delivered to
		*/
		public $deliveryAddress2 = "";

		/**
		* @var string Third delivery address field that the ordered goods are being delivered to
		*/
		public $deliveryAddress3 = "";

		/**
		* @var string Code of the purchase order to include in the delivery information, that is contains the code of the purchase order associated to the delivery of the goods
		*/
		public $deliveryPurchaseOrderCode = "";

		/**
		* @var string Post code of the address that the ordered goods are being delivered to
		*/
		public $deliveryPostcode = "";

		/**
		* @var string Name of the region/state/province at the address that the ordered goods are being delivered to
		*/
		public $deliveryRegionName = "";

		/**
		* @var string Name of the country at the address that the ordered goods are being delivered to
		*/
		public $deliveryCountryName = "";

		/**
		* @var string Code of the country at the address that the ordered goods are being delivered to as a 2 digit code  by ISO standards.
		*/
		public $deliveryCountryCodeISO2 = "";

		/**
		* @var string Code of the country at the address that the ordered goods are being delivered to as a 3 digit code  by ISO standards.
		*/
		public $deliveryCountryCodeISO3 = "";

		/**
		* @var string Description of the address associated with the billing of the order.
		*/
		public $billingDescription = "";

		/**
		* @var string Name of the contact person at the address associated with the billing of the order.
		*/
		public $billingContact = "";

		/**
		* @var string Name of the organisation that the orders goods are being billing to
		*/
		public $billingOrgName = "";

		/**
		* @var string Email address at the address associated with the billing of the order.
		*/
		public $billingEmail = "";

		/**
		* @var string Phone number at the address associated with the billing of the order.
		*/
		public $billingPhone = "";

		/**
		* @var string Fax number at the address associated with the billing of the order.
		*/
		public $billingFax = "";

		/**
		* @var string First address field associated with the billing of the order.
		*/
		public $billingAddress1 = "";

		/**
		* @var string Second address field associated with the billing of the order.
		*/
		public $billingAddress2 = "";

		/**
		* @var string Third address field associated with the billing of the order.
		*/
		public $billingAddress3 = "";

		/**
		* @var string Postcode of the address associated with the billing of the order.
		*/
		public $billingPostcode = "";

		/**
		* @var string Name of the region/state/province of the address associated with the billing of the order.
		*/
		public $billingRegionName = "";

		/**
		* @var string Name of the country of the address associated with the billing of the order.
		*/
		public $billingCountryName = "";

		/**
		* @var string Code of the country of the address associated with the billing of the order as a two digit code  by the ISO standards.
		*/
		public $billingCountryCodeISO2 = "";

		/**
		* @var string Code of the country of the address associated with the billing of the order as a three digit code  by the ISO standards.
		*/
		public $billingCountryCodeISO3 = "";

		/**
		* @var string Email address  for the order.
		*/
		public $email = "";

		/**
		* @var int Total number of lines in the order.
		*/
		public $totalLines = 0;

		/**
		* @var int Total number of product lines in the order
		*/
		public $totalProducts = 0;

		/**
		* @var int Total number of labour lines in the order
		*/
		public $totalLabour = 0;

		/**
		* @var int Total number of download lines in the order
		*/
		public $totalDownloads = 0;

		/**
		* @var double Total monetary price of the order exclusive of tax
		*/
		public $totalPriceExTax = 0;

		/**
		* @var double Total monetary price of the order inclusive of tax
		*/
		public $totalPriceIncTax = 0;

		/**
		* @var double Total monetary amount of taxes applied to the order
		*/
		public $totalTax = 0;

		/**
		* @var double Total weight of the ordered goods
		*/
		public $totalWeight = 0;

		/**
		* @var double Total volume of the ordered goods
		*/
		public $totalVolume = 0;

		/**
		* @var double Total number of surcharges applied to the order
		*/
		public $totalSurchargeItems = 0;

		/**
		* @var double Total monetary amount of surcharges applied to the order exclusive of taxes
		*/
		public $totalSurchargeExTax = 0;

		/**
		* @var double Total monetary amount of surcharges applied to the order inclusive of taxes
		*/
		public $totalSurchargeIncTax = 0;
		/**
		* @var double Total monetary amount of taxes applied to surcharges in the order
		*/
		public $totalSurchargeTax = 0;

		/**
		* @var double Total monetary amount of the order before discounts were applied, exclusive of taxes. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedExTax = 0;

		/**
		* @var double Total monetary amount of the order before discounts were applied, inclusive of taxes. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedIncTax = 0;

		/**
		* @var double Total monetary amount of taxes applied to the order before discounts were applied. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedTax = 0;

		/**
		* @var string Text describing instructions on how to handle the order.
		*/
		public $instructions = "";

		/**
		* @var string Code of the freight carrier delivering the ordered goods
		*/
		public $freightCarrierCode = "";

		/**
		* @var string Name of the freight carrier delivering the orders goods
		*/
		public $freightCarrierName = "";

		/**
		* @var string Reference code to the system used to process the freight order
		*/
		public $freightSystemRefCode = "";

		/**
		* @var string Consignment code issued by the freight carrier to delivery the ordered goods
		*/
		public $freightCarrierConsignCode = "";

		/**
		* @var string Code to track the freight carrier delivering the ordered goods
		*/
		public $freightCarrierTrackingCode = "";

		/**
		* @var string Code of the service provided by the freight carrier to deliver the ordered goods
		*/
		public $freightCarrierServiceCode = "";


		/**
		* @var string Code of the account in the freight carrier's system
		*/
		public $freightCarrierAccountCode = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes, If 'Y' then indicates that the order is being supplied by a different entity from supplier assigned to the order.
		*/
		public $isDropship = "";

		/**
		* @var string key of the location where the products for the order can be found.
		*/
		public $keyLocationID = "";

		/**
		* @var string Code of the location that the order's products are to be picked/packed/delivered/managed from by default.
		*/
		public $locationCode = "";

		/**
		* @var string Name of the location that the order's products are to be picked/packed/delivered/managed from by default.
		*/
		public $locationName = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes, If 'Y' then indicates that the ordered goods are to be obtained across multiple locations.
		*/
		public $isMultiLocation = "";
		
		/**
		* @var string key of the external location where the products for the order can be found. This external location may be the location where goods are being delivered to or held at.
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
		* @var string Method that the order is being shipped by
		*/
		public $shippingMethod = "";

		/**
		* @var double Percentage rate discounted off the order monetary total based on the discount assigned to the order's customer account.
		*/
		public $accountDiscountRate = 0;

		/**
		* @var string Territory associated with the customer account
		*/
		public $accountTerritory = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes, If 'Y' then indicates that all products for the order have been delivered.
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
		public function defaultValuesForNullMembers()
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
			
			if ($keySalesOrderID == null)
			{
				$this->keySalesOrderID = "";
			}
			
			if ($billingDescription == null)
			{
				$this->billingDescription = "";
			}
			
			if ($billingContact == null)
			{
				$this->billingContact = "";
			}
			
			if ($billingOrgName == null)
			{
				$this->billingOrgName = "";
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
			
			if ($deliveryDescription == null)
			{
				$this->deliveryDescription = "";
			}
			
			if ($deliveryContact == null)
			{
				$this->deliveryContact = "";
			}
			
			if ($deliveryOrgName == null)
			{
				$this->deliveryOrgName = "";
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
			
			if ($salesOrderCode == null)
			{
				$this->salesOrderCode = "";
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
			
			if ($salesOrderNumber == null)
			{
				$this->salesOrderNumber = "";
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
			
			if ($salesRepIndividual == null)
			{
				$this->salesRepIndividual = "";
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
			
			if ($currencyISOCode == null)
			{
				$this->currencyISOCode = "";
			}
			
			if ($paymentStatus == null)
			{
				$this->paymentStatus = "";
			}
			
			if ($purchaseOrderNumber == null)
			{
				$this->purchaseOrderNumber = "";
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
			
			if ($invoiceNumbers == null)
			{
				$this->invoiceNumbers = array();
			}
			
			if ($email == null)
			{
				$this->email = "";
			}
			
			if ($instructions == null)
			{
				$this->instructions = "";
			}
			
			if ($paymentMethod == null)
			{
				$this->paymentMethod = "";
			}
			
			if ($paymentProprietaryCode == null)
			{
				$this->paymentProprietaryCode = "";
			}
			
			if ($paymentReceipt == null)
			{
				$this->paymentReceipt = "";
			}

			if ($keyPaymentTypeID == null)
			{
				$this->keyPaymentTypeID = "";
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
			
			if ($isDropship == null)
			{
				$this->isDropship = ESDocumentConstants::ESD_VALUE_NO;
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
			
			if ($isMultiLocation == null)
			{
				$this->isMultiLocation = ESDocumentConstants::ESD_VALUE_NO;
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
			
			if ($shippingMethod == null)
			{
				$this->shippingMethod = "";
			}
			
			if ($accountTerritory == null)
			{
				$this->accountTerritory = "";
			}
			
			if ($isProductsDelivered == null)
			{
				$this->isProductsDelivered = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($totalVolumeMeasureCode == null)
			{
				$this->totalVolumeMeasureCode = "";
			}
			
			if ($totalWeightMeasureCode == null)
			{
				$this->totalWeightMeasureCode = "";
			}
			
			if ($internalID == null)
			{
				$this->internalID = "";
			}
		}
		
		/**
		* Converts the order sale record into a customer account enquiry order sale record
		* @return customer account enquiry sales order record and its lines
		*/
		/*
		public function convertToCustomerAccountEnquiryOrderSaleRecord()
		{
			$accountEnquiryOrderSaleRecord = new ESDRecordCustomerAccountEnquiryOrderSale();
			$recordLines = array();
			
			$accountEnquiryOrderSaleRecord->keyOrderSaleID = $this->keySalesOrderID;
			$accountEnquiryOrderSaleRecord->orderID = $this->salesOrderCode;
			$accountEnquiryOrderSaleRecord->orderNumber = $this->salesOrderNumber;
			$accountEnquiryOrderSaleRecord->keyCustomerAccountID = $this->keyCustomerAccountID;
			$accountEnquiryOrderSaleRecord->customerAccountCode = $this->customerAccountCode;
			$accountEnquiryOrderSaleRecord->deliveredDate = $this->dispatchedDate;
			$accountEnquiryOrderSaleRecord->creationDate = $this->createdDate;
			$accountEnquiryOrderSaleRecord->salesRepCode = $this->salesRepCode;
			$accountEnquiryOrderSaleRecord->salesRepName = $this->salesRepName;
			$accountEnquiryOrderSaleRecord->currencyCode = $this->currencyISOCode;
			
			if(strcasecmp($accountEnquiryOrderSaleRecord->referenceType, ESDocumentCustomerAccountEnquiry::RECORD_TYPE_ORDER_PURCHASE) == 0){
				$this->accountEnquiryOrderSaleRecord->referenceNumber = $this.purchaseOrderNumber;
				$this->accountEnquiryOrderSaleRecord->referenceType = ESDocumentCustomerAccountEnquiry::RECORD_TYPE_ORDER_PURCHASE;
			}
			
			if($this->invoiceNumbers!=null && count($this->invoiceNumbers) > 0){
				$this->accountEnquiryOrderSaleRecord->referenceNumber = array();
				$this->accountEnquiryOrderSaleRecord->referenceType = ESDocumentCustomerAccountEnquiry::RECORD_TYPE_INVOICE;
			}
			
			$accountEnquiryOrderSaleRecord->deliveryContact = $this->deliveryContact;
			$accountEnquiryOrderSaleRecord->deliveryOrgName = $this->deliveryOrgName;
			$accountEnquiryOrderSaleRecord->deliveryAddress1 = $this->deliveryAddress1;
			$accountEnquiryOrderSaleRecord->deliveryAddress2 = $this->deliveryAddress2;
			$accountEnquiryOrderSaleRecord->deliveryAddress3 = $this->deliveryAddress3;
			$accountEnquiryOrderSaleRecord->deliveryPostcode = $this->deliveryPostcode;
			$accountEnquiryOrderSaleRecord->deliveryStateProvince = $this->deliveryRegionName;
			$accountEnquiryOrderSaleRecord->deliveryCountry = $this->deliveryCountryName;
			$accountEnquiryOrderSaleRecord->deliveryCountryCodeISO2 = $this->deliveryCountryCodeISO2;
			$accountEnquiryOrderSaleRecord->deliveryCountryCodeISO3 = $this->deliveryCountryCodeISO3;
			$accountEnquiryOrderSaleRecord->billingContact = $this->billingContact;
			$accountEnquiryOrderSaleRecord->billingOrgName = $this->billingOrgName;
			$accountEnquiryOrderSaleRecord->billingAddress1 = $this->billingAddress1;
			$accountEnquiryOrderSaleRecord->billingAddress2 = $this->billingAddress2;
			$accountEnquiryOrderSaleRecord->billingAddress3 = $this->billingAddress3;
			$accountEnquiryOrderSaleRecord->billingPostcode = $this->billingPostcode;
			$accountEnquiryOrderSaleRecord->billingStateProvince = $this->billingRegionName;
			$accountEnquiryOrderSaleRecord->billingCountry = $this->billingCountryName;
			$accountEnquiryOrderSaleRecord->billingCountryCodeISO2 = $this->billingCountryCodeISO2;
			$accountEnquiryOrderSaleRecord->billingCountryCodeISO3 = $this->billingCountryCodeISO3;
			$accountEnquiryOrderSaleRecord->totalExTax = $this->totalPriceExTax;
			$accountEnquiryOrderSaleRecord->totalIncTax = $this->totalPriceIncTax;
			$accountEnquiryOrderSaleRecord->totalTax = $this->totalTax;
			$accountEnquiryOrderSaleRecord->totalExtraChargesExTax = $this->totalSurchargeExTax;
			$accountEnquiryOrderSaleRecord->totalExtraChargesIncTax = $this->totalSurchargeIncTax;
			$accountEnquiryOrderSaleRecord->comment = $this->instructions;
			$accountEnquiryOrderSaleRecord->freightCarrierCode = $this->freightCarrierCode;
			$accountEnquiryOrderSaleRecord->freightCarrierName = $this->freightCarrierName;
			$accountEnquiryOrderSaleRecord->freightSystemRefCode = $this->freightSystemRefCode;
			$accountEnquiryOrderSaleRecord->freightCarrierConsignCode = $this->freightCarrierConsignCode;
			$accountEnquiryOrderSaleRecord->freightCarrierTrackingCode = $this->freightCarrierTrackingCode;
			$accountEnquiryOrderSaleRecord->freightCarrierAccountCode = $this->freightCarrierAccountCode;
			$accountEnquiryOrderSaleRecord->keyLocationID = $this->keyLocationID;
			$accountEnquiryOrderSaleRecord->locationCode = $this->locationCode;
			$accountEnquiryOrderSaleRecord->locationLabel = $this->locationName;
			
			//iterate through each order line and add to the account enquiry record
			foreach($this->lines as &$line)
			{
				$this->recordLine = new ESDRecordCustomerAccountEnquiryOrderSaleLine();
				$this->recordLine.lineType = $line->lineType;
				$this->recordLine.referenceLineCode = $line->purchaseOrderLineCode;
				$this->recordLine.referenceLineItemCode = $line->purchaseOrderLineNumber;
				$this->recordLine.locationCode = $line->locationCode;
				$this->recordLine.locationCode = $line->locationName;
				$this->recordLine.keyLocationID = $line->keyLocationID;
				$this->recordLine.UNSPSC = $line->UNSPSC;
				$this->recordLine.language = $line->language;
				$this->recordLine.quantityOrdered = $line->quantity;
				$this->recordLine.priceExTax = $line->priceExTax;
				$this->recordLine.priceIncTax = $line->priceIncTax;
				$this->recordLine.priceTax = $line->priceTax;
				$this->recordLine.totalPriceExTax = $line->priceTotalExTax;
				$this->recordLine.totalPriceIncTax = $line->priceTotalIncTax;
				$this->recordLine.totalPriceTax = $line->priceTotalTax;
				$this->recordLine.unit = $line->unitName;
				$this->recordLine.referenceLineCode = $line->priceReferenceCode;
				
				if(strcasecmp($line->lineType, ESDocumentConstants::ORDER_LINE_TYPE_DOWNLOAD) == 0){
					$this->recordLine->lineItemCode = $line->downloadCode;
					$this->recordLine->description = $line->downloadDescription;
					$this->recordLine->referenceLineItemCode = $line->purchaseOrderDownloadCode;
				}
				else if(strcasecmp($line->lineType, ESDocumentConstants::ORDER_LINE_TYPE_LABOUR) == 0){
					$this->recordLine->lineItemCode = $line->labourCode;
					$this->recordLine->description = $line->labourDescription;
					$this->recordLine->referenceLineItemCode = $line->purchaseOrderLabourCode;
				}else{
					$this->recordLine->lineItemCode = $line->productCode;
					$this->recordLine->description = $line->productDescription;
					$this->recordLine->referenceLineItemCode = $line->purchaseOrderProductCode;
				}
				
				if($line->taxes != null && count($line->taxes) > 0)
				{
					$this->recordLine->taxCode = $line->$taxes[0]->taxcode;
				}
				
				array_push($recordLines, $recordLine);
			}
			
			//add lines to the record
			$accountEnquiryOrderSaleRecord->lines = $recordLines;
			
			return $accountEnquiryOrderSaleRecord;
		}*/
	}
?>