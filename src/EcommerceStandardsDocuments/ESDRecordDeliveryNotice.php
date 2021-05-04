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
	* Ecommerce Standards Record that holds data for a single delivery notice. The delivery notice (also known as an Advanced Ship Notice (ASN)) advises of the delivery of products being made by the supplier. The notice can advise when goods are being packed, dispatched, in-transit, held in storage, delivered, lost, or cancelled
	*/
	class ESDRecordDeliveryNotice
	{
		/** 
		* @var ESDRecordDeliveryNoticeLine[] ArrayList of lines that indicate the products being delivered
		*/
		public $lines = array();
		
		/**
		* @var string Unique identifier of the delivery notice.
		*/
		public $keyDeliveryNoticeID = "";
		
		/**
		* @var string Code of the delivery. May or may not be a unique identifier. The code is a human known identifier of the delivery notice
		*/
		public $deliveryCode = "";
		
		/**
		* @var string message that advises of the status of the delivery. The message could contain details specific to status of where the delivery is at
		*/
		public $deliveryStatusMessage = "";

		/**
		* @var string Key identifier of the customer account record that the delivery notice is associated to. The customer indicates the entity of the goods being delivered for.
		*/
		public $keyCustomerAccountID = "";
		
		/**
		* @var string Key identifier of the supplier account record that the delivery notice is associated to. The supplier indicates the entity of the goods being delivered from.
		*/
		public $keySupplierAccountID = "";

		/**
		* @var string key identifier of the sales order that the delivery notice is associated to.References the sales order that the goods being delivered were ordered from.
		*/
        public $keySalesOrderID = "";

        /**
		* @var string Code of the sales order that the delivery notice is associated to. The code is a human known identifier of a sales order.
		*/
        public $salesOrderCode = "";

        /**
		* @var string Number of the sales order that the delivery notice is associated to.
		*/
        public $salesOrderNumber = "";

        /**
		* @var string key identifier of the purchase order that the delivery notice is associated to. References the purchase order that the goods being delivered were requested from by the customer.
		*/
        public $keyPurchaseOrderID = "";

        /**
		* @var string Code of the purchase order that the delivery notice is associated to. The code is a human known identifier of a purchase order.
		*/
        public $purchaseOrderCode = "";

        /**
		* @var string Number of the purchase order that the delivery notice is associated to.
		*/
        public $purchaseOrderNumber = "";

        /**
		* @var string key identifier of the customer invoice that the delivery notice is associated to. References the customer invoice that the goods being delivered were confirmed from.
		*/
        public $keyCustomerInvoiceID = "";

        /**
		* @var string Code of the customer invoice that the delivery notice is associated to. The code is a human known identifier of a customer invoice.
		*/
        public $customerInvoiceCode = "";

        /**
		* @var string Number of the customer invoice that the delivery notice is associated to.
		*/
        public $customerInvoiceNumber = "";

        /**
		* @var string key identifier of the supplier invoice that the delivery notice is associated to. References the supplier invoice that the goods being delivered were confirmed from.
		*/
        public $keySupplierInvoiceID = "";

        /**
		* @var string Code of the supplier invoice that the delivery notice is associated to. The code is a human known identifier of a customer invoice.
		*/
        public $supplierInvoiceCode = "";

        /**
		* @var string Number of the supplier invoice that the delivery notice is associated to.
		*/
        public $supplierInvoiceNumber = "";

        /**
		* @var string key identifier of the location that the delivery notice is associated to. References the location that the goods being located at.
		*/
        public $keyLocationID = "";
		
		/**
		* @var string Language that the delivery notice text is written in. Set it to a constant prefixed with LANG_ in the ESDocumentConstants class
		*/
		public $language = "";
		
		/**
		* @var string status of the delivery, indicates where the goods are located at within the delivery/shipping process. Set it to one of the DELIVERY_STATUS_ constants in the ESDocumentConstants class.
		*/
		public $deliveryStatus = ESDocumentConstants::DELIVERY_STATUS_AWAITING_PACKAGING;
		
		/**
		* @var int long Date that the products being delivered were packed for safe delivery. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $packedDate = 0;
		
		/**
		* @var int Date that the products being delivered were loaded onto transport for delivery. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $loadedDate = 0;
		
		/**
		* @var int Date that the order's goods were sent out. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $dispatchedDate = 0;
		
		/**
		* @var int Date that the products were successfully delivered to the final destination. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $deliveredDate = 0;
		
		/**
		* @var int Date that the products were unpacked from any packaging after being delivered to the final destination. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $unpackedDate = 0;
		
		/**
		* @var int Date that the products were marked as being lost after being unable to be delivered. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $lostDate = 0;
		
		/**
		* @var int Date that the products were marked as being damaged. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $damagedDate = 0;

		/**
		* @var int Date that the products were delivered. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $deliveryDate = 0;
		
		/**
		* @var int Date that the products were delivered and received by the final receiving entity. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $receivedDate = 0;

		/**
		* @var int Date that the products were cancelled from being delivered. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
        public $cancelledDate = 0;
		
		/**
		* @var string Either 'N'-No or 'Y'-Yes, If 'Y' then indicates that the goods are at a known geographic location, based on the latitude and longitude coordinates
		*/
		public $atGeographicLocation = ESDocumentConstants::ESD_VALUE_NO;
		
		/**
		* @var double Latitude co-ordinate of the geographic location where the goods are located at. The number must be between 90 and -90
		*/
		public $locationLatitude = 0.0;

		/**
		* @var double longitude co-ordinate of the geographic location the goods are located at. The number must be between 180 and -180
		*/
		public $locationLongitude = 0.0;
		
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
		* @var string Consignment code issued by the freight carrier to deliver the ordered goods
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
		* @var string Either 'N'-No or 'Y'-Yes, If 'Y' then indicates that the order is being delivered to a different entity from the customer who purchased the products.
		*/
		public $isDropship = "";

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
			
			if ($keyDeliveryNoticeID == null)
			{
				$this->keyDeliveryNoticeID = "";
			}
			
			if ($deliveryCode == null)
			{
				$this->deliveryCode = "";
			}
			
			if ($deliveryStatus == null)
			{
				$this->deliveryStatus = ESDocumentConstants::DELIVERY_STATUS_AWAITING_PACKAGING;
			}
			
			if ($deliveryStatusMessage== null)
			{
				$this->deliveryStatusMessage = "";
			}

			if ($keyCustomerAccountID == null)
            {
                $this->keyCustomerAccountID = "";
            }

            if ($keySupplierAccountID == null)
            {
                $this->keySupplierAccountID = "";
            }

            if ($keySalesOrderID == null)
            {
                $this->keySalesOrderID = "";
            }

            if ($salesOrderCode == null)
            {
                $this->salesOrderCode = "";
            }

            if ($salesOrderNumber == null)
            {
                $this->salesOrderNumber = "";
            }

            if ($keyPurchaseOrderID == null)
            {
                $this->keyPurchaseOrderID = "";
            }

            if ($purchaseOrderCode == null)
            {
                $this->purchaseOrderCode = "";
            }

            if ($purchaseOrderNumber == null)
            {
                $this->purchaseOrderNumber = "";
            }

            if ($keyCustomerInvoiceID == null)
            {
                $this->keyCustomerInvoiceID = "";
            }

            if ($customerInvoiceCode == null)
            {
                $this->customerInvoiceCode = "";
            }

            if ($customerInvoiceCode == null)
            {
                $this->customerInvoiceCode = "";
            }

            if ($customerInvoiceNumber == null)
            {
                $this->customerInvoiceNumber = "";
            }

            if ($keySupplierInvoiceID == null)
            {
                $this->keySupplierInvoiceID = "";
            }

            if ($supplierInvoiceCode == null)
            {
                $this->supplierInvoiceCode = "";
            }

            if ($supplierInvoiceNumber == null)
            {
                $this->supplierInvoiceNumber = "";
            }

            if ($keyLocationID == null)
            {
                $this->keyLocationID = "";
            }
			
			if ($atGeographicLocation== null)
			{
				$this->atGeographicLocation = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($freightCarrierCode== null)
			{
				$this->freightCarrierCode = "";
			}
			
			if ($freightCarrierName== null)
			{
				$this->freightCarrierName = "";
			}
			
			if ($freightSystemRefCode== null)
			{
				$this->freightSystemRefCode = "";
			}
			
			if ($freightCarrierConsignCode== null)
			{
				$this->freightCarrierConsignCode = "";
			}
			
			if ($freightCarrierTrackingCode== null)
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
			
			if ($instructions== null)
			{
				$this->instructions = "";
			}
			
			if ($language== null)
			{
				$this->language = "";
			}
			
			if ($internalID == null)
			{
				$this->internalID = "";
			}        
		}
	}
?>