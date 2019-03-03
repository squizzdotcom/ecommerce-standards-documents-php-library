<?php
	/**
	* Copyright (C) 2019 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	
	/**
	* Contains a list of variable constants that can be used in Ecommerce Standards Documents and records
	*/
	class ESDocumentConstants
	{
		/**
		* result status denoting that data was successfully obtained
		*/
		const RESULT_SUCCESS = 1;
		/**
		* result status denoting that an error occurred when trying to obtain/process data
		*/
		const RESULT_ERROR = 2;
		/**
		* result status denoting that an unknown error occurred when trying to obtain/process data
		*/
		const RESULT_ERROR_UNKNOWN = 3;
		/**
		* result status denoting that an error occurred when a connection could not be made to a data source to obtain/process data
		*/
		const RESULT_ERROR_DATA_SOURCE_CONNECTION_MISSING = 4;
		/**
		* result status denoting that an error occurred when a connection was unexpectedly lost from a data source when trying to obtain/process data
		*/
		const RESULT_ERROR_DATA_SOURCE_CONNECTION_LOST = 5;
		/**
		* result status denoting that an error occurred when trying to access a data source because of incorrect credentials given.
		*/
		const RESULT_ERROR_DATA_SOURCE_INVALID_CREDENTIALS = 6;
		/**
		* result status denoting that an error occurred when trying to process data from a data source to obtain/process data.
		*/
		const RESULT_ERROR_DATA_SOURCE_PROCESSING = 7;
		/**
		* result status denoting that an error occurred when a data source was given or sent invalid data.
		*/
		const RESULT_ERROR_DATA_SOURCE_INVALID_DATA = 8;
		/**
		* result status denoting that an error occurred when trying to access a data source because it denied access.
		*/
		const RESULT_ERROR_DATA_SOURCE_PERMISSION_DENIED = 13;
		/**
		* result status denoting that an error occurred when requesting access a data source too many times.
		*/
		const RESULT_ERROR_DATA_SOURCE_MAXIMUM_REQUESTS_EXCEEDED = 14;
		/**
		* result status denoting that an error occurred because incorrect credials were given to a connecting system to obtain/process data.
		*/
		const RESULT_ERROR_CONNECTOR_INVALID_CREDENTIALS = 9;
		/**
		* result status denoting that an error occurred because a connecting system could not process data.
		*/
		const RESULT_ERROR_CONNECTOR_PROCESSING = 10;
		/**
		* result status denoting that an error occurred because incorrect data was sent to or received from a connecting system.
		*/
		const RESULT_ERROR_CONNECTOR_INVALID_DATA = 11;
		/**
		* result status denoting that an error occurred because a connecting system was incorrectly configured to obtain/process data.
		*/
		const RESULT_ERROR_CONNECTOR_INCORRECT_CONFIGURATION = 12;
		/**
		* Result response status denoting the type of data returned is in the JSON format (JavaScript Object Notation)
		*/
		const RESULT_RESPONSE_TYPE_JSON = "JSON";
		/**
		* Result response status denoting the type of data returned is in a raw binary format.
		*/
		const RESULT_RESPONSE_TYPE_RAW = "RAW";
		/**
		* Data mode of the Ecommerce Standards Document is incremental, meaning only changes to data are contained within the document.
		*/
		const ESD_DATA_MODE_INCREMENT = "INCREMENT";
		/**
		* Data mode of the Ecommerce Standards Document is incremental if possible, meaning only changes to data need be contained within the document, but if it is not possible then all the data can be contained in the document.
		*/
		const ESD_DATA_MODE_INCREMENT_IF_AVAILABLE = "INCREMENT_AVAILABLE";
		/**
		* Data mode of the Ecommerce Standards Document is complete, and all the data available is contained within the document.
		*/
		const ESD_DATA_MODE_COMPLETE = "COMPLETE";
		/**
		* Yes value that can be embedded in an ESD document
		*/
		const ESD_VALUE_YES = "Y";
		/**
		* No value that can be embedded in an ESD document
		*/
		const ESD_VALUE_NO = "N";
		/**
		* Denotes that the record in the Ecommerce Standard Document has no record operation associated to it.
		*/
		const ESD_RECORD_OPERATION_NA = 0;
		/**
		* Denotes that the record in the Ecommerce Standard Document needs to be inserted into the requesting data source because it is a new record.
		*/
		const ESD_RECORD_OPERATION_INSERT = 1;
		/**
		* Denotes that the record in the Ecommerce Standard Document needs to be updated in the requesting data source because the record has changed.
		*/
		const ESD_RECORD_OPERATION_UPDATE = 2;
		/**
		* Denotes that the record in the Ecommerce Standard Document needs to be deleted from the requesting data source because the record no longer exists.
		*/
		const ESD_RECORD_OPERATION_DELETE = 3;
		/**
		* Denotes that the record in the Ecommerce Standard Document needs can be ignored in the requesting data source from being modified because the record's data has not changed.
		*/
		const ESD_RECORD_OPERATION_IGNORE = 4;
		/**
		* Contains the version that the Ecommerce Standards Documents library is currently at.
		*/
		const ESD_DOCUMENT_VERSION = 1.3;
		/**
		* Denotes that the location is a warehouse
		*/
		const LOCATION_TYPE_WAREHOUSE = "WAREHOUSE";
		/**
		* Denotes that the location is a store
		*/
		const LOCATION_TYPE_STORE = "STORE";
		/**
		* Denotes that the location is a site
		*/
		const LOCATION_TYPE_SITE = "SITE";
		/**
		* Denotes that the location is an office
		*/
		const LOCATION_TYPE_OFFICE = "OFFICE";
		/**
		* Location is the main head office of an organisational entity
		*/
		const LOCATION_TYPE_HEAD_OFFICE = "HEAD_OFFICE";
		/**
		* Location is external to an organisation and may be owned or run by a separate entity
		*/
		const LOCATION_TYPE_THIRD_PARTY = "THIRD_PARTY";
		/**
		* The location type is not specified
		*/
		const LOCATION_TYPE_OTHER = "OTHER";
		/**
		* Language - English Australia
		*/
		const LANG_EN_AU = "EN_AU";
		/**
		* Language - English USA
		*/
		const LANG_EN_US = "EN_US";
		/**
		* Language - French France
		*/
		const LANG_FR_FR = "FR_FR";
		/**
		* Authority Number - Australian Business Number
		*/
		const AUTHORITY_NUM_AUS_ABN = 1;
		/**
		* Authority Number - Australian Company Number
		*/
		const AUTHORITY_NUM_AUS_ACN = 2;
		/**
		* Authority Number - Great Britain Company Registration Number
		*/
		const AUTHORITY_NUM_GBR_CRN = 3;
		/**
		* Authority Number - New Zealand Business Number
		*/
		const AUTHORITY_NUM_NZL_NZBN = 4;
		/**
		* Authority Number - United States Employer Identification Number
		*/
		const AUTHORITY_NUM_USA_EIN = 5;
		/**
		* Order Line Type - Text
		*/
		const ORDER_LINE_TYPE_TEXT = "TEXT";
		/**
		* Order Line Type - Product
		*/
		const ORDER_LINE_TYPE_PRODUCT = "PRODUCT";
		/**
		* Order Line Type - Download
		*/
		const ORDER_LINE_TYPE_DOWNLOAD = "DOWNLOAD";
		/**
		* Order Line Type - Labour
		*/
		const ORDER_LINE_TYPE_LABOUR = "LABOUR";
		/**
		* Invoice Line Type - Text
		*/
		const INVOICE_LINE_TYPE_TEXT = "TEXT";
		/**
		* Invoice Line Type - Product
		*/
		const INVOICE_LINE_TYPE_PRODUCT = "PRODUCT";
		/**
		* Invoice Line Type - Download
		*/
		const INVOICE_LINE_TYPE_DOWNLOAD = "DOWNLOAD";
		/**
		* Invoice Line Type - Labour
		*/
		const INVOICE_LINE_TYPE_LABOUR = "LABOUR";
		/**
		* Invoice Line Type - Miscellaneous - indicates that a non-specified sale or purchase has been made within an invoice line. Use this if no product/download/labour has been sold or purchased.
		*/
		const INVOICE_LINE_TYPE_MISC = "MISC";
		/**
		* Entity Type - Org, denotes an organisation
		*/
		const ENTITY_TYPE_ORG = "ORG";
		/**
		* Entity Type - Personal, denotes a human individual
		*/
		const ENTITY_TYPE_PERSON = "PERSON";
		/**
		* Entity Set Price - system automatically calculated the price
		*/
		const ENTITY_SET_PRICE_SYSTEM = "SYSTEM";
		/**
		* Entity Set Price - price set by a sales representative
		*/
		const ENTITY_SET_PRICE_SALESREP = "SALESREP";
		/**
		* Entity Set Price - price set by an employee
		*/
		const ENTITY_SET_PRICE_EMPLOYEE = "EMPLOYEE";
		/**
		* Surcharge Type - Freight
		*/
		const SURCHARGE_TYPE_FREIGHT = "FREIGHT";
		/**
		* Surcharge Type - Credit Card
		*/
		const SURCHARGE_TYPE_CREDIT_CARD = "CREDITCARD";
		/**
		* Surcharge Type - Minimum Order Total
		*/
		const SURCHARGE_TYPE_MIN_ORDER = "MINORDER";
		/**
		* Surcharge Type - Other
		*/
		const SURCHARGE_TYPE_OTHER = "OTHER";
		/**
		* Payment method - UNPAID - No payment was received as yet
		*/
		const PAYMENT_METHOD_UNPAID = "UNPAID";
		/**
		* Payment method - CREDIT - A payment was made with a credit card
		*/
		const PAYMENT_METHOD_CREDIT = "CREDITCARD";
		/**
		* Payment method - COD - Payment will be made with cash when the goods are delivered to the delivery location
		*/
		const PAYMENT_METHOD_CASHONDELIVERY = "COD";
		/**
		* Payment method - DIRECTDEPOSIT - Payment has been made with a direct bank transfer
		*/
		const PAYMENT_METHOD_DIRECTDEPOSIT = "DIRECTDEPOSIT";
		/**
		* Payment method - QUOTE - No payment was made as a quote was only required
		*/
		const PAYMENT_METHOD_QUOTE = "QUOTE";
		/**
		* Payment method - NONE - No payment was made or needed
		*/
		const PAYMENT_METHOD_NONE = "NONE";
		/**
		* Payment method - PROPRIETARY - A payment was made using a proprietary payment system. PayPal could be one example of this.
		*/
		const PAYMENT_METHOD_PROPRIETARY = "PROPRIETARY";
		/**
		* Payment method - ACCOUNT - A payment will be assigned to a customer account and paid based on the agreed payment terms
		*/
		const PAYMENT_METHOD_ACCOUNT = "ACCOUNT";
		/**
		* Payment Status - UNPAID - The invoice has not been paid for
		*/ 
		const PAYMENT_STATUS_UNPAID = "UNPAID";
		/**
		* Payment Status - PENDING - A payment is currently in the process of being paid for, or is waiting on a process to complete</summary>
		*/ 
		const PAYMENT_STATUS_PENDING = "PENDING";
		/**
		* Payment Status - PAID - The invoice has been paid
		*/ 
		const PAYMENT_STATUS_PAID = "PAID";
		/**
		* Payment Status - DECLINED - A payment failed when trying to be paid
		*/ 
		const PAYMENT_STATUS_DECLINED = "DECLINED";
		/**
		* Payment Status - NONREQUIRED - No payment is required to pay for the invoice
		*/
		const PAYMENT_STATUS_NONREQUIRED = "NONREQUIRED";
		/**
		* Record Type - Invoice
		*/
		const RECORD_TYPE_INVOICE = "INVOICE";
		/**
		* Record Type - Transaction
		*/
		const RECORD_TYPE_TRANSACTION = "TRANSACTION";
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
		* Record Type - Credit
		*/
		const RECORD_TYPE_CREDIT = "CREDIT";
		/**
		* Record Type - Payment
		*/
		const RECORD_TYPE_PAYMENT = "PAYMENT";
		/**
		* Record Type - Quote
		*/
		const RECORD_TYPE_QUOTE = "QUOTE";
		/**
		* Record Line Type - Item
		*/
		const RECORD_LINE_TYPE_ITEM = "ITEM";
		/**
		* Record Line Type - Text
		*/
		const RECORD_LINE_TYPE_TEXT = "TEXT";
		/**
		* Record Line Type - Invoice
		*/
		const RECORD_LINE_TYPE_INVOICE = "INVOICE";
		/**
		* Record Line Type - Sales Order
		*/
		const RECORD_LINE_TYPE_ORDER_SALE = "ORDER_SALE";
		/**
		* Record Line Type - Sales Order
		*/
		const RECORD_LINE_TYPE_ORDER_PURCHASE = "ORDER_PURCHASE";
		/**
		* Price reference Type - Contract
		*/
		const PRICE_REFERENCE_TYPE_CONTRACT = "C";
		/**
		* Price reference Type - Contract With Forced Pricing
		*/
		const PRICE_REFERENCE_TYPE_CONTRACT_FORCED = "CF";
		/**
		* Price reference Type - Promotion
		*/
		const PRICE_REFERENCE_TYPE_PROMOTION = "P";
		/**
		* Delivery Status - Awaiting Packaging - The ordered goods are awaiting to be packaged up for delivery
		*/
		const DELIVERY_STATUS_AWAITING_PACKAGING = "AWAITING_PACKAGING";
		/**
		* Delivery Status - Packed - The ordered goods have been packaged up and awaiting to be loaded on transport for delivery
		*/
		const DELIVERY_STATUS_PACKED = "PACKED";
		/**
		* Delivery Status - Loaded - The ordered goods have been packaged up and have been loaded on transport for delivery. The transport has not yet left with the packaged goods.
		*/
		const DELIVERY_STATUS_LOADED = "LOADED";
		/**
		* Delivery Status - In Transit - The ordered goods have been packaged up, loaded and are in transit on transport.
		*/
		const DELIVERY_STATUS_IN_TRANSIT = "IN_TRANSIT";
		/**
		* Delivery Status - In Storage - The ordered goods have been packaged up and are being stored at a location for later delivery.
		*/
		const DELIVERY_STATUS_IN_STORAGE = "IN_STORAGE";
		/**
		* Delivery Status - Delivered - The ordered goods have been packaged up, transported and delivered to a final location.
		*/
		const DELIVERY_STATUS_DELIVERED = "DELIVERED";
		/**
		* Delivery Status - Unpacked - The ordered goods have been packaged up, transported and delivered to a final location, then unpacked at that location.
		*/
		const DELIVERY_STATUS_UNPACKED = "UNPACKED";
		/**
		* Delivery Status - Delivery Missed - The ordered goods have been packaged up, transported to a final location, however they were not able to be received due to the authorized person(s) not being available to accept the goods.
		*/
		const DELIVERY_STATUS_DELIVERY_MISSED = "DELIVERY_MISSED";
		/**
		* Delivery Status - Received - The ordered goods have been packaged up, transported to a final location, delivered and able to be received by the authorised person(s).
		*/
		const DELIVERY_STATUS_RECEIVED = "RECEIVED";
		/**
		* Delivery Status - Lost In Transit - The ordered goods have been packaged up, and transported, however they were lost in transit. They may have been been lost in an accident, by an act of nature, or any other unforseen circumstance.
		*/
		const DELIVERY_STATUS_LOST_IN_TRANSIT = "LOST_IN_TRANSIT";
		/**
		* Delivery Status - Damaged In Transit - The ordered goods have been packaged up, and transported, however they were damaged in transit. They may have been been damaged in an accident, by an act of nature, or any other unforseen circumstance.
		*/
		const DELIVERY_STATUS_DAMAGED_IN_TRANSIT = "DAMAGED_IN_TRANSIT";
		
		/**
		* General Ledger Account Type - Asset - a type of general ledger account that represents the different types of economic resources owned or controlled by an entity. Common examples of asset accounts are cash in hand, cash in bank, real estate, inventory, prepaid expenses, goodwill, and accounts receivable.</summary>
		*/
		const GENERAL_LEDGER_ACCOUNT_TYPE_ASSET = "ASSET";
		/**
		* General Ledger Account Type - Liability - a type of general ledger account that represents the different types of economic obligations of an entity, such as accounts payable, bank loans, bonds payable, and accrued expenses.</summary>
		*/
		const GENERAL_LEDGER_ACCOUNT_TYPE_LIABILITY = "LIABILITY";
		/**
		* General Ledger Account Type - Equity - a type of general ledger account that represents the residual equity of an entity (the value of assets after deducting the value of all liabilities). Equity accounts include common stock, paid-in capital, and retained earnings.</summary>
		*/
		const GENERAL_LEDGER_ACCOUNT_TYPE_EQUITY = "EQUITY";
		/**
		* General Ledger Account Type - Operating Revenue - a type of general ledger account that represents an entity's earnings from operating and trading activities, such as sales and service revenue.</summary>
		*/
		const GENERAL_LEDGER_ACCOUNT_TYPE_OPERATING_REVENUE = "OPERATING_REVENUE";
		/**
		* General Ledger Account Type - Non Operating Expense - a type of general ledger account that represent an entity's expenditures from operating and trading activities, such as utilities, rents and insurance.</summary>
		*/
		const GENERAL_LEDGER_ACCOUNT_TYPE_OPERATING_EXPENSE = "OPERATING_EXPENSE";
		/**
		* General Ledger Account Type - Non Operating Revenue - a type of general ledger account that represents an entity's earnings from non-operating or trading activities, such as investments, property or asset sales, currency exchange, or non-recurring sales.</summary>
		*/
		const GENERAL_LEDGER_ACCOUNT_TYPE_NON_OPERATING_REVENUE = "NON_OPERATING_REVENUE";
		/**
		* General Ledger Account Type - Non Operating Expenses - a type of general ledger account that represent an entity's expenditures from non-operating or trading activities, such as paying interest of loans, depreciation, losses on property or assets, legal fees</summary>
		*/
		const GENERAL_LEDGER_ACCOUNT_TYPE_NON_OPERATING_EXPENSE = "NON_OPERATING_EXPENSE";

		/**
		* Currency Type - Fiat - currency that is issued and controlled by a central authority, such as a government</summary>
		*/
		const CURRENCY_TYPE_FIAT = "FIAT";
		/**
		* Currency Type - Cryptographic - currency that is stored and generated through cryptographic, digital mechanisms and not controlled by any one central authority.</summary>
		*/
		const CURRENCY_TYPE_CRYPTO = "CRYPTO";
		/**
		* Currency Type - Virtual - currency that is stored and created through digital mechanisms, and may be invented and/or controlled by a single organisation or other entity.</summary>
		*/
		const CURRENCY_TYPE_VIRTUAL = "VIRTUAL";
	}
?>