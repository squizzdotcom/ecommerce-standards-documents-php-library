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
	* Ecommerce Standard Document that holds details of a payment made by a customer account for a given record type
	*/
	class ESDRecordCustomerAccountPayment   
	{
		/**
		* @var ESDRecordCustomerAccountPaymentRecord[] list of records that the payment applies to
		*/
		public $records = array();
		
		/**
		* @var ESDRecordAccountPaymentSurcharge[] list of surcharges that have been added to the payment
		*/
		public $surcharges = array();
		
		/**
		* @var string Key that allows the customer account payment record to be uniquely identified and linked to.
		*/
		public $keyCustomerAccountPaymentID = "";
		
		/**
		* @var string ID that allows the payment to be identified with. May or may not be unique.
		*/
		public $paymentID = "";
		
		/**
		* @var string Code that allows the payment to be identified with. May or may not be unique.
		*/
		public $paymentCode = "";
		
		/**
		* @var string Number set for reference purposes to the payment.
		*/
		public $referenceNumber = "";
		
		/**
		* @var string Text, number or code that the customer uses to identify the payment record. This could be the customer's purchase order order, supplier invoice code, or an other identifier.
		*/
		public $customerReference = "";
		
		/**
		* @var string Key of the customer account record assigned to the payment.
		*/
		public $keyCustomerAccountID = "";
		
		/**
		* @var string Code of the customer account assigned to the invoice.
		*/
		public $customerAccountCode = "";
		
		/**
		* @var string ID of the user in the associated Ecommerce system where the payment was made from.
		*/
		public $eCommerceUserID = "";
		
		/**
		* @var string ID of the associated Ecommerce system where the payment was made from.
		*/
		public $eCommerceSystemID = "";
		
		/**
		* @var string Method on how the order is being paid for. The field must be set to one of the class's constants prefixed by PAYMENT_METHOD_
		*/
		public $paymentMethod = "";
		
		/**
		* @var string Name of the user in the associated Ecommerce system where the payment was created. Ideally this is set to a label of the user, and not the credentials used for a user to login (since that could be a security issue passing around such information).
		*/
		public $eCommerceUserName = "";
		
		/**
		* @var double Monetary amount of the payment
		*/
		public $paymentAmount = 0.0;
		
		/**
		* @var string text that contains a receipt number associated with the payment
		*/
		public $paymentReceipt = "";
		
		/**
		* @var string Key of the payment type record that is associated to the payment. The payment type record indicates how the payment was made.
		*/
		public $keyPaymentTypeID = "";
		
		/**
		* @var int Date of the payment record. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $paymentDate = 0;
		
		/**
		* @var int Date that the payment record was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $creationDate = 0;
		
		/**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored in the invoice with
		*/
		public $currencyCode = "";
		
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
		* Record Type - Invoice
		*/
		const RECORD_TYPE_INVOICE = "INVOICE";
		
		/**
		* Record Type - Sales Order
		*/
		const RECORD_TYPE_ORDER_SALE = "ORDER_SALE";
		
		/**
		* Record Type - Purchase Order
		*/
		const RECORD_TYPE_ORDER_PURCHASE = "ORDER_PURCHASE";
		
		/**
		* Record Type - Back Order
		*/
		const RECORD_TYPE_BACKORDER = "BACKORDER";
		
		/**
		* UNPAID - No payment was received as yet
		*/
		const PAYMENT_METHOD_UNPAID = "UNPAID";
		
		/**
		* CREDIT - Payment was made with a credit card
		*/
		const PAYMENT_METHOD_CREDIT = "CREDITCARD";
		
		/**
		* DIRECTDEPOSIT - Payment has been made with a direct bank transfer
		*/
		const PAYMENT_METHOD_DIRECTDEPOSIT = "DIRECTDEPOSIT";
		
		/**
		* PROPRIETARY - A payment was made using a proprietary payment system. PayPal could be one example of this.
		*/
		const PAYMENT_METHOD_PROPRIETARY = "PROPRIETARY";
		
		/**
		* ACCOUNT - A payment was not applicable
		*/
		const PAYMENT_METHOD_NA = "NA";
		
		/**
		* sets default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
            if ($this->records== null)
			{
				$this->records = array();
			}
			else
			{
				foreach($this->records as &$record)
				{
					$record->setDefaultValuesForNullMembers();
				}
			}

			if ($this->surcharges== null)
			{
				$this->surcharges = array();
			}
			else
			{
				foreach($this->surcharges as &$surcharge)
				{
					$surcharge->setDefaultValuesForNullMembers();
				}
			}

            if ($this->paymentID == null)
            {
                $this->paymentID = "";
            }

            if ($this->paymentCode == null)
            {
                $this->paymentCode = "";
            }

            if ($this->keyCustomerAccountID == null)
            {
                $this->keyCustomerAccountID = "";
            }

            if ($this->customerAccountCode == null)
            {
                $this->customerAccountCode = "";
            }

            if ($this->eCommerceUserID == null)
            {
                $this->eCommerceUserID = "";
            }

            if ($this->eCommerceSystemID == null)
            {
                $this->eCommerceSystemID = "";
            }

            if ($this->eCommerceUserName == null)
            {
                $this->eCommerceUserName = "";
            }

            if ($this->referenceNumber == null)
            {
                $this->referenceNumber = "";
            }

            if ($this->paymentMethod == null)
            {
                $this->paymentMethod = "";
            }

            if ($this->paymentReceipt == null)
            {
                $this->paymentReceipt = "";
            }

            if ($this->currencyCode == null)
            {
                $this->currencyCode = "";
            }
		}
	}
?>