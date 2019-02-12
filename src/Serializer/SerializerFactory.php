<?php

namespace Nascom\TeamleaderApiClient\Serializer;

use Nascom\TeamleaderApiClient\Serializer\FieldDescription\FieldDescriptionDenormalizer;
use Nascom\TeamleaderApiClient\Serializer\FieldDescription;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ArrayDenormalizer;
use Symfony\Component\Serializer\Normalizer\DateTimeNormalizer;
use Symfony\Component\Serializer\Serializer;

/**
 * Class SerializerFactory
 *
 * @package Nascom\TeamleaderApiClient\Serializer
 */
class SerializerFactory
{
    /**
     * @return Serializer
     */
    public static function create()
    {
        $fieldDescriptionDenormalizer = new FieldDescriptionDenormalizer(
            [
                // Models
                // General
                new FieldDescription\Model\User\UserFieldDescription(),
                new FieldDescription\Model\User\UserListViewFieldDescription(),
                new FieldDescription\Model\Department\DepartmentFieldDescription(),
                new FieldDescription\Model\Department\DepartmentListViewFieldDescription(),
                new FieldDescription\Model\CustomFieldDefinition\CustomFieldDefinitionFieldDescription(),
                new FieldDescription\Model\CustomFieldDefinition\CustomFieldDefinitionListViewFieldDescription(),
                new FieldDescription\Model\WorkType\WorkTypeListViewFieldDescription(),
                // CRM
                new FieldDescription\Model\Contact\ContactListViewFieldDescription(),
                new FieldDescription\Model\Contact\ContactFieldDescription(),
                new FieldDescription\Model\Company\CompanyFieldDescription(),
                new FieldDescription\Model\Company\CompanyListViewFieldDescription(),
                new FieldDescription\Model\BusinessType\BusinessTypeListViewFieldDescription(),
                new FieldDescription\Model\Tag\TagListViewFieldDescription(),
                // Deals
                new FieldDescription\Model\Deal\DealListViewFieldDescription(),
                new FieldDescription\Model\Deal\DealFieldDescription(),
                new FieldDescription\Model\DealPhase\DealPhaseListViewFieldDescription(),
                new FieldDescription\Model\DealSource\DealSourceListViewFieldDescription(),
                new FieldDescription\Model\Quotation\QuotationFieldDescription(),
                // Calendar
                new FieldDescription\Model\Calendar\CalendarListViewEventFieldDescription(),
                new FieldDescription\Model\Calendar\CalendarEventFieldDefinition(),
                new FieldDescription\Model\ActivityType\ActivityTypeListViewFieldDescription(),
                // Invoicing
                new FieldDescription\Model\Invoice\InvoiceListViewFieldDescription(),
                new FieldDescription\Model\Invoice\InvoiceFieldDescription(),
                new FieldDescription\Model\CreditNote\CreditNoteListViewFieldDescription(),
                new FieldDescription\Model\CreditNote\CreditNoteFieldDescription(),
                new FieldDescription\Model\TaxRate\TaxRateListViewFieldDescription(),
                new FieldDescription\Model\WithholdingTaxRate\WithholdingTaxRateListViewFieldDescription(),

                // Aggregates
                new FieldDescription\Model\Aggregate\AccountFieldDescription(),
                new FieldDescription\Model\Aggregate\TelephoneFieldDescription(),
                new FieldDescription\Model\Aggregate\EmailFieldDescription(),
                new FieldDescription\Model\Aggregate\AddressFieldDescription(),
                new FieldDescription\Model\Aggregate\AddressWithTypeFieldDescription(),
                new FieldDescription\Model\Aggregate\ConfigurationFieldDescription(),
                new FieldDescription\Model\Aggregate\BusinessTypeFieldDescription(),
                new FieldDescription\Model\Aggregate\InvoicingPreferenceFieldDescription(),
                new FieldDescription\Model\Aggregate\PaymentTermFieldDescription(),
                new FieldDescription\Model\Aggregate\AddressesFieldDescription(),
                new FieldDescription\Model\Aggregate\AddressWithAddresseeFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedCustomFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedDefinitionDescription(),
                new FieldDescription\Model\Aggregate\LinkedCompanyDescription(),
                new FieldDescription\Model\Aggregate\CustomFieldDescription(),
                new FieldDescription\Model\Aggregate\LeadFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedCustomerFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedContactFieldDescription(),
                new FieldDescription\Model\Aggregate\PhaseFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedDepartmentFieldDescription(),
                new FieldDescription\Model\Aggregate\EstimatedValueFieldDescription(),
                new FieldDescription\Model\Aggregate\SourceFieldDescription(),
                new FieldDescription\Model\Aggregate\PhaseHistoryFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedQuotationFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedDealFieldDescription(),
                new FieldDescription\Model\Aggregate\GroupedLineFieldDescription(),
                new FieldDescription\Model\Aggregate\SectionFieldDescription(),
                new FieldDescription\Model\Aggregate\LineItemFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedProductFieldDescription(),
                new FieldDescription\Model\Aggregate\UnitPriceFieldDescription(),
                new FieldDescription\Model\Aggregate\TaxFieldDescription(),
                new FieldDescription\Model\Aggregate\DiscountFieldDescription(),
                new FieldDescription\Model\Aggregate\CalculatedTotalFieldDescription(),
                new FieldDescription\Model\Aggregate\PaymentAmountFieldDescription(),
                new FieldDescription\Model\Aggregate\DownloadedQuotationFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedTodoFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedActivityTypeFieldDescription(),
                new FieldDescription\Model\Aggregate\InvoiceeFieldDescription(),
                new FieldDescription\Model\Aggregate\TotalWithDueFieldDescription(),
                new FieldDescription\Model\Aggregate\ContactWithNameFieldDescription(),
                new FieldDescription\Model\Aggregate\InvoiceTaxFieldDescription(),
                new FieldDescription\Model\Aggregate\InvoiceeExtendedFieldDescription(),
                new FieldDescription\Model\Aggregate\DownloadedInvoiceFieldDescription(),
                new FieldDescription\Model\Aggregate\DiscountWithDescriptionFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedInvoiceFieldDescription(),
                new FieldDescription\Model\Aggregate\PaymentWithDateFieldDescription(),
                new FieldDescription\Model\Aggregate\DownloadedInvoiceFieldDescription(),
                new FieldDescription\Model\Aggregate\TotalFieldDescription(),
                new FieldDescription\Model\Aggregate\InvoiceeMinimalFieldDescription(),
                new FieldDescription\Model\Aggregate\LinkedProductCategoryFieldDescription(),
                new FieldDescription\Model\Aggregate\DownloadedCreditNoteFieldDescription(),
            ]
        );

        $normalizers = [
            new DateTimeNormalizer(),
            new ParseDataDenormalizer(),
            $fieldDescriptionDenormalizer,
            new ArrayDenormalizer(),
        ];
        $encoders = [
            new JsonEncoder(),
        ];

        return new Serializer($normalizers, $encoders);
    }
}
