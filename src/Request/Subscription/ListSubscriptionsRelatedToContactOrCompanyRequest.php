<?php

namespace Nascom\TeamleaderApiClient\Request\Subscription;

use Nascom\TeamleaderApiClient\Request\AbstractPostRequest;

/**
 * Class ListSubscriptionsRelatedToContactOrCompanyRequest
 *
 * @package Nascom\TeamleaderApiClient\Request\Subscription
 */
class ListSubscriptionsRelatedToContactOrCompanyRequest extends AbstractPostRequest
{
    /**
     * ListSubscriptionsRelatedToContactOrCompanyRequest constructor.
     *
     * @param $contact_or_company
     * @param $contact_or_company_id
     * @param array $options
     */
    public function __construct($contact_or_company, $contact_or_company_id, array $options = [])
    {
        $this->options = $options;
        $this->setContactOrCompany($contact_or_company);
        $this->setContactOrCompanyId($contact_or_company_id);
    }

    /**
     * @param $contact_or_company
     */
    public function setContactOrCompany($contact_or_company)
    {
        $this->options['contact_or_company'] = $contact_or_company;
    }

    /**
     * @param $contact_or_company_id
     */
    public function setContactOrCompanyId($contact_or_company_id)
    {
        $this->options['contact_or_company_id'] = $contact_or_company_id;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return 'getSubscriptionsByContactOrCompany.php';
    }
}
