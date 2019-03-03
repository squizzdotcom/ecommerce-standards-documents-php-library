<?php
	/**
	* Copyright (C) 2019 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;

	/**
	* Ecommerce Standards Record that holds data for a single currency exchange rate that reflects the cost of purchasing one currency from another. These rates may be used to influence the price of selling or buying goods and services between states or countries.
	*/
	class ESDRecordCurrencyExchangeRate
	{
		/**
		* @var string Key that allows the currency exchange rate record to be uniquely identified. The value set may or may not be a human known identifier
		*/
		public $keyCurrencyExchangeRateID = "";

		/**
		* @var string The code of the currency being sold. This currency code may conform to the 3 digit ISO 4217 currency code standards, or crypto currency code standards.
		*/
		public $sellCurrencyCode = "";

		/**
		* @var string Name of the currency being sold.
		*/
		public $sellCurrencyName = "";

		/**
		* @var string Specifies the kind of currency that is being sold, such as a cryptographic, or decentralised currency, as opposed to a state/country based currency controlled by government (fiat). If set must use the ESDocumentConstants class properties that are prefixed with "CURRENCY_TYPE_"
		*/	
		public $sellCurrencyType = "";

		/**
		* @var string The code of the currency being purchased. This currency code may conform to the 3 digit ISO 4217 currency code standards, or crypto currency code standards.
		*/
		public $buyCurrencyCode = "";

		/**
		* @var string Name of the currency being purchased.
		*/
		public $buyCurrencyName = "";

		/**
		* @var string Specifies the kind of currency that is being purchased, such as a cryptographic, or decentralised currency, as opposed to a state/country based currency controlled by government (fiat).  If set must use the ESDocumentConstants class properties that are prefixed with "CURRENCY_TYPE_"
		*/	
		public $buyCurrencyType = "";

		/**
		* @var double The percentage rate used determine how much its costs to sell 1 of the selling currency in the purchasing currency. The percentage rate needs to be set as a decimal eg. for a rate of 70% the value 0.70 should be set. To determine the cost to buy currency being sold use the equation (X sellCurrency x exchangeRate) = Y buyCurrency
		*/	
		public $exchangeRate = 0.0;

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or  it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
	}
?>