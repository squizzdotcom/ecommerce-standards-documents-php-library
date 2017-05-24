<?php
	/**
	* Copyright (C) 2017 Squizz PTY LTD
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
		const ESD_DOCUMENT_VERSION = 1.1;
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
		* Language - English Australia
		*/
		const LANG_EN_AU = "EN_AU";
		/**
		* Language - English USA
		*/
		const LANG_EN_US = "EN_US";
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
	}
?>